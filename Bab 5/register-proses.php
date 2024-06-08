<?php
require 'koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$umur = $_POST["umur"];

$query_sql = "INSERT INTO tb_admin (username, email, password, umur) 
            VALUES ('$username', '$email', '$password', '$umur')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
