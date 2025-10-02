<?php
require "db.php";

function getBookingByID($id)
{
    // parsing variabel conn secara global
    $conn = $GLOBALS['conn'];
    //query
    $sql_join = "SELECT * FROM booking
    INNER JOIN package ON package.id = booking.id_package
    INNER JOIN customer ON customer.id = booking.id_customer
    INNER JOIN payments ON payments.id = booking.id_payment
    WHERE booking.id = '$id'";

    // run query
    $run = mysqli_query($conn, $sql_join);

    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);
        return $data;
    }
    // Tutup koneksi
    mysqli_close($conn);
}

function getPaymentByID($id)
{
    // parsing variabel conn secara global
    $conn = $GLOBALS['conn'];
    //query
    $sql_join = "SELECT * FROM payments WHERE id = '$id'";

    // run query
    $run = mysqli_query($conn, $sql_join);

    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);
        return $data;
    }
    // Tutup koneksi
    mysqli_close($conn);
}
