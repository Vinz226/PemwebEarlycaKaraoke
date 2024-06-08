<?php
require 'koneksi.php'; // Menghubungkan ke database

// Menerima data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['pw'];

// Membuat query SQL untuk menyimpan data ke dalam database
$query_sql = "INSERT INTO tb_customer (nama, email, password) 
            VALUES ('$nama', '$email', '$password')";

// Menjalankan query SQL
if (mysqli_query($conn, $query_sql)) {
    // Jika penyimpanan berhasil
    echo json_encode(['success' => true]);
    exit; // Pastikan untuk keluar dari script setelah mengirim respons
} else {
    // Jika terjadi kesalahan, kirim pesan error dalam format JSON
    $error_message = 'Pendaftaran Gagal: ' . mysqli_error($conn);
    echo json_encode(['success' => false, 'message' => $error_message]);
    exit;
}
?>
