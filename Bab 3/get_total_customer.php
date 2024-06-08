<?php
require '../koneksi.php'; // Menghubungkan ke database

// Query SQL untuk mengambil jumlah data dari tb_customer
$query_sql = "SELECT COUNT(*) as total FROM tb_customer";

// Menjalankan query SQL
$result = mysqli_query($conn, $query_sql);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Ambil jumlah data dari hasil query
    $row = mysqli_fetch_assoc($result);
    $totalCustomers = $row['total'];
    // Kembalikan jumlah data sebagai response
    echo $totalCustomers;
} else {
    echo "0"; // Jika query gagal, kembalikan 0
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
