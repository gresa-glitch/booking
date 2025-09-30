<?php

use phpDocumentor\Reflection\Location;

require 'db.php';

function makeIDBooking()
{
        // parsing variabel conn secara global
        $conn = $GLOBALS['conn'];
        $getIDLastBooking = mysqli_query($conn, "SELECT max(id) as 'idbookmax' FROM booking") or die(mysqli_error($conn));
        $data = [];
        if (mysqli_num_rows($getIDLastBooking) > 0) {
                while ($row = mysqli_fetch_assoc($getIDLastBooking)) {
                        $data[] = $row;
                }
        }

        foreach ($data as $key) {
                return $key['idbookmax'];
        }
}

if (isset($_POST['btnBook'])) :
        // variabel to customer
        $id_customer = uniqid();
        $post_name = $_POST['name'];
        $post_email = $_POST['email'];
        $post_phone = $_POST['phone'];
        $register_by = "Online";

        // // variabel to booking
        $id_booking = makeIDBooking();
        // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
        // dan diubah ke integer dengan (int)
        $increment = (int) substr($id_booking, 12, 5);
        $increment++;
        // membentuk kode barang baru
        // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
        // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
        // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
        $string = "STD";
        $finalOrderId = $string . date('Ymd') . sprintf("%03s", $increment);
        if ($id_booking) {
                $finalOrderId = $finalOrderId;
        } else {
                $finalOrderId = $string . date('Ymd') . sprintf("%03s", "00001");
        }

        $post_booking_date = $_POST['booking_date'];
        $post_id_package = $_POST['id_package'];
        $post_booking_duration = $_POST['booking_duration'];

        // variable payment
        $getPricePackage = mysqli_query($conn, "SELECT price, item FROM package WHERE id = '$post_id_package'");
        $rowPrice = mysqli_fetch_assoc($getPricePackage);
        $dataPrice = $rowPrice['price'];
        $item = $rowPrice['item'];
        $total_payment = $post_booking_duration * (int)$dataPrice;

        // // insert to customer
        $sql_cust = "INSERT INTO customer (id, name, email, phone, registered_by) VALUES ('$id_customer', '$post_name', '$post_email', '$post_phone', '$register_by')";
        $run_sql_cust = mysqli_query($conn, $sql_cust) or die(mysqli_error($conn));

        // // insert data booking after customer register
        $sql_booking = "INSERT INTO booking (id, id_package, id_customer, booking_duration, booking_date, order_type, booking_status)
        VALUES ('$finalOrderId', '$post_id_package', '$id_customer', '$post_booking_duration', '$post_booking_date', 'Online', 'Waiting')";
        $sql_booking = mysqli_query($conn, $sql_booking) or die(mysqli_error($conn));

        // // insert data payment after customer make a booking
        $id_payment = uniqid();
        $sql_payment = "INSERT INTO payments (id, total_payment, status_payment) VALUES ('$id_payment', $total_payment, 0)";
        $sql_payment = mysqli_query($conn, $sql_payment) or die(mysqli_error($conn));
        // update data payment di booking table
        $sql_update_payment_id = mysqli_query($conn, "UPDATE booking SET id_payment = '$id_payment' WHERE id = '$finalOrderId'");

        $string = "
        Silahkan melakukan pembayaran untuk pemesanan booking studio
        dengan paket " . $item . " dengan harga " . $total_payment . ". Gunakan BA " . $id_payment . " agar transaksi lebih fast respon.
        setelah melakukan pembayaran, silahkan klik link berikut untuk konfirmasi pembayaran
        http://booking.test/payment.php?idpay=" . $id_payment . " Terima kasih.";
        // let encodedMessage = encodeURIComponent(message);
        // let link = `https://wa.me/?text=${encodedMessage}`;
        if ($sql_update_payment_id) {
                $link = "http://booking.test/payment.php?id=";
                echo '<script type="text/javascript">
                alert("Booking berhasil dibuat, anda akan dialihkan ke bagian Admin!")
                window.location.href="https://wa.me/6281806132508?text=Silahkan%20lakukan%20pembayaran.%20Setelah%20melakukan%20pembayaran,%20klik%0Ahttp://booking.test/payment.php?id=' . $id_payment . '"
                </script>';
        }

endif;
mysqli_close($conn); // Tutup koneksi database
