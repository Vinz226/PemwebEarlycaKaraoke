<?php 
    session_start();
    if($_SESSION['username'] == null) {
        header('location:login-proses.php');
    }
?>
<?php
// Include file koneksi.php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
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
				<a href="#" class="active">
					<i class="bx bx-grid-alt"></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="produc.php">
					<i class="bx bx-box"></i>
					<span class="links_name">Product</span>
				</a>
			</li>
			<li>
				<a href="order.php">
					<i class="bx bx-list-ul"></i>
					<span class="links_name">Order</span>
				</a>
			</li>
			<li>
				<a href="customer/customer.php">
                    <i class="bx bxs-group"></i>
					<span class="links_name">Customer</span>
				</a>
			</li>
            <li>
				<a href="logout.php">
					<i class="bx bx-log-out"></i>
					<span class="links_name">Log out</span>
				</a>
			</li>
			<li>
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
    <h2>Dashboard</h2>
    <div class="profile-details">
        <?php echo "Welcome, ".$_SESSION['username']."!"; ?>
    </div>
    <div id="clock" class="clock"></div>
    <div id="date" class="date"></div>
    
    <!-- Tambahkan widget untuk menampilkan jumlah data pelanggan -->
    <div class="widget-container">
        <div class="widget">
            <h3>
                <i class='bx bxs-group'></i> <!-- Tambahkan ikon user -->
                Customer Count
            </h3>
            <?php
                // Mengambil jumlah baris dalam tabel customer
                $query_count = "SELECT COUNT(*) AS total FROM tb_customer";
                $result_count = mysqli_query($conn, $query_count);
                $row_count = mysqli_fetch_assoc($result_count);
                $total_customers = $row_count['total'];

                // Tampilkan jumlah data pelanggan
                echo "<p>Total Customers: " . $total_customers . "</p>";
            ?>
        </div>
    </div>
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
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);

        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var date = today.toLocaleString('en-US', options);
        document.getElementById('date').innerHTML = date;
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
    }
    window.onload = function() {
        startTime();
    };
</script>
</body>
</html>