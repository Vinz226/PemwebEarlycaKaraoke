<?php
require '../koneksi.php'; // Menghubungkan ke database

// Query SQL untuk mengambil data dari tb_product
$query_sql = "SELECT nama, email, password FROM tb_customer";

// Menjalankan query SQL
$result = mysqli_query($conn, $query_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-headphone'></i>
        <span class="logo_name">Earlyca Karaoke</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="../admin.php" class="active">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="../produc.php">
                <i class="bx bx-box"></i>
                <span class="links_name">Product</span>
            </a>
        </li>
        <li>
            <a href="../order.php">
                <i class="bx bx-list-ul"></i>
                <span class="links_name">Order</span>
            </a>
        </li>
        <li>
            <a href="../customer/customer.php">
                <i class="bx bxs-group"></i>
                <span class="links_name">Customer</span>
            </a>
        </li>
        <li>
            <a href="../logout.php">
                <i class="bx bx-log-out"></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
        </div>
        <div class="profile-details">
            <span class="admin_name">Earlyca Karaoke Admin</span>
        </div>
    </nav>
    <div class="home-content">
        <h2>Customer List</h2>
    <table class="table-data">
        <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th> <!-- Kolom untuk tombol edit dan hapus -->
    </tr>
    <?php
    // Periksa apakah ada data yang diambil dari database
    if (mysqli_num_rows($result) > 0) {
        // Loop melalui setiap baris data dan tampilkan dalam tabel
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>"; // Kolom untuk tombol edit dan hapus
            echo "<a href='edit_customer.php?email=" . $row["email"] . "' class='btn-edit'>Edit</a>"; // Tombol edit
            echo "<a href='delete_customer.php?email=" . $row["email"] . "' class='btn-delete'>Delete</a>"; // Tombol hapus
            echo "</td>";
            echo "</tr>";
        }
    } else {
        // Jika tidak ada data, tampilkan pesan kosong
        echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
    }
    ?>
</table>
    </div>
</section>
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };
</script>
</body>
</html>

<?php
// Tutup koneksi ke database
mysqli_close($conn);
?>