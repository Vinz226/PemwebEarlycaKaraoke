<?php
require '../koneksi.php'; // Menghubungkan ke database

if(isset($_GET['email'])) {
    $email = $_GET['email'];
    
    // Query SQL untuk mengambil data customer berdasarkan email
    $query_sql = "SELECT * FROM tb_customer WHERE email='$email'";

    // Menjalankan query SQL
    $result = mysqli_query($conn, $query_sql);

    // Periksa apakah data ditemukan
    if (mysqli_num_rows($result) == 1) {
        // Ambil data customer
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $email = $row['email'];
        $password = $row['password'];
    } else {
        // Jika data tidak ditemukan, redirect ke halaman customer.php
        header("Location: ../customer.php");
        exit();
    }
} else {
    // Jika tidak ada parameter email, redirect ke halaman customer.php
    header("Location: ../customer.php");
    exit();
}

// Proses form jika tombol Update ditekan
if (isset($_POST['update'])) {
    // Ambil data dari form
    $newNama = $_POST['nama'];
    $newEmail = $_POST['email'];
    $newPassword = $_POST['password'];

    // Query SQL untuk mengupdate data customer
    $update_sql = "UPDATE tb_customer SET nama='$newNama', email='$newEmail', password='$newPassword' WHERE email='$email'";

    // Menjalankan query SQL untuk update
    if (mysqli_query($conn, $update_sql)) {
        // Jika berhasil diupdate, redirect kembali ke halaman customer.php
        header("Location: ../customer.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="form-login">
    <h2>Edit Customer</h2>
    <form method="POST">
        <input type="text" name="nama" value="<?php echo $nama; ?>" placeholder="Nama" required>
        <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required>
        <input type="text" name="password" value="<?php echo $password; ?>" placeholder="Password" required>
        <button type="submit" name="update" class="btn">Update</button>
    </form>
</div>
</body>
</html>

<?php
// Tutup koneksi ke database
mysqli_close($conn);
?>
