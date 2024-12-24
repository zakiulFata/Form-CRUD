<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="styles/style.css">

	<title>Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-landmark'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="side1.php">
					<i class='bx bxs-group'></i>
					<span class="text">Show employyees</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-square-add' ></i>
					<span class="text">Input salary</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-category-alt'></i>
					<span class="text">Categories</span>
				</a>
			</li>
			<li>
				<a href="landingPage.php">
					<i class='bx bx-windows'></i>
                    <span class="text">Landing page</span>
				</a>
			</li>
			<li>
				<a href="#" id="inbox">
					<i class='bx bxs-envelope'></i>
					<span class="text">Inbox</span>
				</a>
			</li>


		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Admin Dashboard</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="images/people.JPG">
			</a>
		</nav>


		<!------------------ MAIN --------------------------->


		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<a href="side1.php"><i class='bx bxs-group' ></i></a>
					<span class="text">
						<h3>30</h3>
						<p>number of employees</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>Rp </h3>
						<p>monthly expenses</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-category-alt'></i>
					<span class="text">
						<h3>20</h3>
						<p>list of applicants</p>
					</span>
				</li>
				<li>
					<i class='bx bx-list-plus'></i>
					<span class="text">
						<h3>20</h3>
						<p>Detail Categories</p>
					</span>
				</li>
			</ul>
		</main>
	<script src="script.js"></script>
</body>
</html>