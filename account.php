<?php
require_once './resource/php/init.php';
session_start();
logIn();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./resource/css/main.css">
		<link rel="icon" type="image/x-icon" href="./resource/img/favicon.ico">
		<title>Account | KriziaWare</title>
	</head>
	<body class="bg-body-secondary">
		<header>
			<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow">
				<div class="container-fluid">
					<a class="navbar-brand" href="dashboard.php">
						<img class="logo-img img-fluid" src="./resource/img/logo.png" alt="LOGO">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navStuff" aria-controls="navStuff" aria-expanded="false" aria-label="Toggle Navbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navStuff">
						<?php
							if ($_SESSION['user_type'] == 1) {
								echo '
								<ul class="navList navbar-nav ms-auto">
									<li class="nav-item">
										<a class="nav-link link-body-emphasis" href="home.php">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-body-emphasis" href="product.php">Products</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-body-emphasis" href="home.php#about">About Us</a>
									</li>
									<li class="nav-item dropdown">
										<button class="acc_btn nav-link link-body-emphasis fw-bolder dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Account</button>
										<ul class="accList dropdown-menu dropdown-menu-end">
											<li><a class="h5 text-center link-body-emphasis dropdown-item disabled" href="#">'.$_SESSION['username'].'</a></li>
											<li><hr class="dropdown-divider"></li>
											<li class="link-body-emphasis dropdown-item">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" role="switch" id="theme_switch">
													<label class="form-check-label" for="theme_switch">Dark Mode</label>
												</div>
											</li>
											<li><a class="text-center link-body-emphasis dropdown-item" href="account.php">Account Detail</a></li>
											<li><a class="text-center link-body-emphasis dropdown-item" href="logout.php">Logout</a></li>
										</ul>
									</li>
								</ul>
								';
							} else {
								echo '
								<ul class="navList navbar-nav ms-auto">
									<li class="nav-item">
										<a class="nav-link link-body-emphasis" href="dashboard.php">Dashboard</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-body-emphasis" href="user.php">User</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-body-emphasis" href="inventory.php">Inventory</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-body-emphasis" href="order.php">Order</a>
									</li>
									<li class="nav-item dropdown">
										<button class="acc_btn nav-link link-body-emphasis dropdown-toggle fw-bolder" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Account</button>
										<ul class="accList dropdown-menu dropdown-menu-end">
											<li><a class="h5 text-center link-body-emphasis dropdown-item disabled" href="#">'.$_SESSION['username'].'</a></li>
											<li><hr class="dropdown-divider"></li>
											<li class="link-body-emphasis dropdown-item">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" role="switch" id="theme_switch">
													<label class="form-check-label" for="theme_switch">Dark Mode</label>
												</div>
											</li>
											<li><a class="link-body-emphasis dropdown-item" href="account.php">Account Detail</a></li>
											<li><a class="link-body-emphasis dropdown-item" href="logout.php">Logout</a></li>
										</ul>
									</li>
								</ul>
								';
							}
						?>
					</div>
				</div>
			</nav>
		</header>

		<section class="acc-cont py-5">
			<div class="container-fluid">
				<div class="row d-flex justify-content-center align-content-center">
					<div class="col-md-6 my-3">
						<div class="card mt-5 h-100">
							<div class="card-body text-body-emphasis bg-body-tertiary rounded">
								<h3 class="acc-title card-title text-center my-4">Account Details</h3>
								<?php
								echo '
									<h4 class="fw-bolder">Username: <span class="fw-light">'.$_SESSION['username'].'</span></h4>
									<h4 class="fw-bolder">Email Address: <span class="fw-light">'.$_SESSION['user_mail'].'</span></h4>
									<h4 class="fw-bolder">Date Joined: <span class="fw-light">'.$_SESSION['user_date'].'</span></h4>
								';
								AccType($_SESSION['user_type']);
								?>
							</div>
						</div>
					</div>
					<div class="col-md-6 my-3">
						<div class="card mt-5 h-100">
							<form class="card-body text-body-emphasis bg-body-tertiary rounded" method="post">
								<?php NewPassMsg(); ?>
								<h3 class="acc-title card-title text-center my-4">Update Password</h3>
								<div class="form-floating my-3">
									<input class="acc-box form-control" type="password" placeholder="New Password" name="new_pw" id="up_input1" required>
									<label for="up_input1">New Password</label>
								</div>
								<div class="form-floating my-3">
									<input class="acc-box form-control" type="password" placeholder="Confirm New Password" name="cnew_pw" id="up_input2" required>
									<label for="up_input2">Confirm New Password</label>
								</div>
								<div class="d-flex justify-content-center my-3">
									<input class="btn btn-secondary rounded-pill w-25 p-2" type="submit" value="Update" name="up-pw_btn">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container-fluid bg-body-tertiary border-top py-3">
				<div class="row d-flex justify-content-center align-content-center">
					<div class="col-sm-6 col-md-4 col-lg-5">
						<small class="copyright">Copyright &copy; KriziaWare. <strong>All Rights Reserved 2023</strong></small>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-5">
						<small class="membs">Group 4: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup Jr, Emman Siva</small>
					</div>
				</div>
			</div>
		</footer>

	<!-- Bootstrap Dependencies -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

	<!-- Own Script -->
	<script src="./resource/js/theme-toggle.js"></script>
	</body>
</html>