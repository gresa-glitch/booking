<?php
require_once "controller/db.php";
require "controller/function.php";

@$idbooking = $_GET['booking'];
// pangil fungsi getbookingbyid dan tampilkan
$data = getBookingByID($idbooking);
$dataid = $data['id'];
$dataPayment = getPaymentByID($dataid);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Randi Studio - Payment</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/my.css">
</head>

<body>

    <div class="container">
        <div class="row mt-3 d-flex justify-content-center align-items-center">
            <?php
            if (@$data['booking_status'] == "Waiting") : ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h6>Konfirmasi Pembayaran</h6>
                        </div>
                        <div class="card-body">

                            <p class="text-center">Invoice #<?= $data['id']; ?></p>
                            <p class="fs-2 fw-bold text-center text-danger"><?= $data['booking_status']; ?></p>

                            <div class="me-auto mb-2 mt-3">
                                <div class="fw-bold">Pay to</div>
                                <?= $data['name']; ?>
                            </div>

                            <div class="me-auto mb-2">
                                <div class="fw-bold">Item</div>
                                <ul>
                                    <li><?= $data['item']; ?></li>
                                    <li><?= "Rp" . number_format($data['total_payment']); ?></li>
                                </ul>
                            </div>

                            <div class="me-auto mb-4">
                                <div class="fw-bold">Booking Date</div>
                                <?= date('d-m-Y', strtotime($data['booking_date'])); ?>
                            </div>

                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" value="">
                                <div class="mb-3">
                                    <label for="bkuti_pembayaran" class="form-label">Foto Bukti Pembayaran</label>
                                    <input type="hidden" name="phone" value="<?= $data['phone']; ?>" required>
                                    <input type="hidden" name="idpayment" value="<?= $data['id']; ?>" required>
                                    <input type="hidden" name="id_booking" value="<?= $idbooking; ?>" required>
                                    <input type="file" class="form-control" id="bkuti_pembayaran" name="payment_receive" required>
                                    <?php
                                    if (isset($_GET['alert'])) {
                                        if ($_GET['alert'] == 'gagal_ekstensi') {
                                    ?>
                                            <label for="" class="text-danger mt-1"><small>Ekstensi Tidak Diperbolehkan!</small></label>
                                        <?php
                                        } elseif ($_GET['alert'] == "gagal_ukuran") {
                                        ?>
                                            <label for="" class="text-danger mt-1"><small>Ukuran file terlalu besar!</small></label>
                                        <?php
                                        } elseif ($_GET['alert'] == "berhasil") {
                                        ?>
                                            <label for="" class="text-success mt-1"><small>Berhasil konfirmasi pembayaran</small></label>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="d-grid gap-2 col-md mx-auto">
                                    <button class="btn btn-primary" type="submit" name="btnSubmitPayment">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center bg-success text-white p-3 rounded">STUDIO RANDI</h5>
                            <p class="text-center">Invoice #<?= $data['id']; ?></p>
                            <p class="fs-2 fw-bold text-center text-success"><?= $data['booking_status'] == $data['booking_status'] ? "PAID" : ""; ?></p>
                            <hr>
                            <div class="me-auto mb-2 mt-3">
                                <div class="fw-bold">Pay to</div>
                                <?= $data['name']; ?>
                            </div>

                            <div class="me-auto mb-4">
                                <div class="fw-bold">Booking Date</div>
                                <?= date('d-m-Y', strtotime($data['booking_date'])); ?>
                            </div>
                            <div class="responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>ID Pembayaran</th>
                                            <th>Total</th>
                                            <th>Foto</th>
                                        </tr>
                                    <tbody>
                                        <td><?= date('d-m-Y', strtotime($dataPayment['payment_date'])); ?></td>
                                        <td><?= $dataPayment['id']; ?></td>
                                        <td><?= "Rp" . number_format($dataPayment['total_payment']); ?></td>
                                        <td>
                                            <img src="admin/upload/payments/<?= $dataPayment['payment_receipt']; ?>" width="50px">
                                        </td>
                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-1">
                        <a href="index.php" class="text-dark">&#60; Kembali ke halaman utama</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
if (isset($_POST['btnSubmitPayment'])) {
    $get_phone_customer = $_POST['phone'];
    $pay_date = date('Y-m-d');
    $id_pay = $_POST['idpayment'];
    $id_booking = $_POST['id_booking'];

    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['payment_receive']['name'];
    $ukuran = $_FILES['payment_receive']['size'];
    $custom_filename = "OL-" . date('Ymd') . uniqid();
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:payment.php?alert=gagal_ekstensi&booking=$id_booking");
    } else {
        if ($ukuran < 1044070) {
            $xx = $custom_filename;
            move_uploaded_file($_FILES['payment_receive']['tmp_name'], 'admin/upload/payments/' . $custom_filename);
            mysqli_query($conn, "UPDATE payments SET payment_date = '$pay_date', payment_receipt = '$xx', status_payment = 1 WHERE id = '$id_pay'")
                or die(mysqli_error($conn));
            mysqli_query($conn, "UPDATE booking SET booking_status = 'Settlement' WHERE id ='$id_booking'");
            header("location:payment.php?alert=berhasil&booking=$id_booking");
        } else {
            header("location:payment.php?alert=gagal_ukuran&booking=$id_booking");
        }
    }
}
?>