<?php
header('Access-Control-Allow-Origin');
header('Content-Type: application/json');

require 'db.php';

echo "berhasil";

// // Validasi server-side
// if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['datebooking']) || empty($_POST['package'])) {
//     echo json_encode(['status' => 'error', 'message' => 'Semua field wajib diisi.']);
//     exit;
// }

// $name  = htmlspecialchars(trim($_POST['name']));
// $phone = htmlspecialchars(trim($_POST['phone']));
// $datebooking  = htmlspecialchars(trim($_POST['datebooking']));
// $package = htmlspecialchars(trim($_POST['package']));


// // Masukkan ke database
// $stmt = $conn->prepare("INSERT INTO booking (id_package, id_customer, phone, datebooking, package) VALUES (?, ?, ?, ?)");
// $stmt->bind_param("ss", $nama, $email);

// if ($stmt->execute()) {
//     echo json_encode(['status' => 'success', 'message' => 'Data berhasil disimpan.']);
// } else {
//     echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan data.']);
// }

$stmt->close();
$conn->close();
