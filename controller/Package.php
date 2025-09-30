<?php
// import file connection
require 'db.php';

function getPackage()
{
    // parsing variabel conn secara global
    $conn = $GLOBALS['conn'];

    // Query untuk mengambil data
    $sql = "SELECT * FROM package";
    $result = mysqli_query($conn, $sql);

    $data = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        // Kembalikan data
        return $data;
    }

    // Tutup koneksi
    mysqli_close($conn);
}
