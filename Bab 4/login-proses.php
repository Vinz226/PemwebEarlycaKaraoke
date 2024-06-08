<?php
require 'koneksi.php';
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tb_admin
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    // Login berhasil, simpan informasi pengguna dalam sesi
    $_SESSION['username'] = $username;
    header("Location: admin.php");
} else {
    echo "<script>
            alert('Username atau Password Anda Salah. Silahkan Coba Login Kembali.');
            window.location.href = 'login.php'; // Redirect ke halaman login
          </script>";
}
?>
