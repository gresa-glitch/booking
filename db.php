<?php
$host = "localhost";
$user = "root";
$pass = "Mangga@12345"; // Ganti jika ada password
$db   = "bookingapp"; // Ganti dengan nama database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
