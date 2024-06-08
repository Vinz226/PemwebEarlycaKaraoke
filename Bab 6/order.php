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
				<a href="admin.php" class="active">
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
<h2>Order List</h2>
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
