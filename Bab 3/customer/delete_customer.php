<?php
require '../koneksi.php'; // Menghubungkan ke database

if(isset($_GET['email'])) {
    $email = $_GET['email'];
    
    // Query SQL untuk menghapus data customer berdasarkan email
    $delete_sql = "DELETE FROM tb_customer WHERE email='$email'";

    // Menjalankan query SQL untuk delete
    if (mysqli_query($conn, $delete_sql)) {
        // Jika berhasil dihapus, redirect kembali ke halaman customer.php
        header("Location: customer.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // Jika tidak ada parameter email, redirect ke halaman customer.php
    header("Location: customer.php");
    exit();
}
?>
