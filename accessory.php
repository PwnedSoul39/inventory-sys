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
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./resource/css/accessory.css">
		<link rel="icon" type="image/x-icon" href="./resource/img/favicon.ico">
		<title>Accessory | KriziaWare</title>
	</head>
	<body data-bs-theme="dark">
		<header>
			<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow">
				<div class="container-fluid">
					<a class="navbar-brand" href="home.php">
						<img class="logo-img img-fluid" src="./resource/img/logo.png" alt="LOGO">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navStuff" aria-controls="navStuff" aria-expanded="false" aria-label="Toggle Navbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navStuff">
						<ul class="navList navbar-nav me-auto">
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="home.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis fw-bolder" href="home.php#product">Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="home.php#about">About Us</a>
							</li>
							<li class="nav-item dropdown">
								<button class="acc_btn nav-link link-body-emphasis dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Account</button>
								<ul class="accList dropdown-menu dropdown-menu-end text-center">
									<li><a class="h5 text-center link-body-emphasis dropdown-item disabled" href="#"><?php echo $_SESSION['username']; ?></a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="text-center link-body-emphasis dropdown-item" href="account.php">Account Detail</a></li>
									<li><a class="text-center link-body-emphasis dropdown-item" href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
						<form class="nav-link d-flex text-body-emphasis" role="search">
							<div class="input-group">
								<input class="input-group-text bg-body text-emphasis-body border border-danger" type="text" placeholder="Search" aria-labelledby="Search" aria-describedby="search">
								<span class="input-group-text bg-body-secondary border border-danger" id="search"><i class="fa fa-search"></i></span>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</header>

		<section class="pt-5" id="sec-1">
			<div class="container-fluid text-center text-light py-5">
				<h1 class="display-1">Welcome to the Accessory Section</h1>
				<p class="lead"> Elevate your computing experience with our extraordinary range of computer accessories, meticulously crafted to enhance your every click, tap, and scroll. </p>
			</div>
		</section>

		<section id="sec-2">
			<div class="container-fluid text-light text-center py-5">
				<h1 class="text-uppercase py-5">featured accessories</h1>
				<div class="row">
					<div class="col-3">
						<div class="card h-100 bg-transparent text-light border-0">
							<img class="h-100" src="./resource/img/product-pages/acc-1.png" alt="">
							<div class="card-body">
								<div class="text-danger">
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
								</div>
								<p>KriziaWare MK857 RGB Gaming Keyboard<br>$499.95</p>
								<a class="btn btn-danger rounded-pill w-50 p-1" href="./resource/product-pages/accessory1.php">View</a>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card h-100 bg-transparent text-light border-0">
							<img class="h-100" src="./resource/img/product-pages/acc-2.jpg" alt="">
							<div class="card-body">
								<div class="text-danger">
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
								</div>
								<p>KriziaWare Genius Bluetooth Speaker<br>$1299.95</p>
								<a class="btn btn-danger rounded-pill w-50 p-1" href="./resource/product-pages/accessory2.php">View</a>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card h-100 bg-transparent text-light border-0">
							<img class="h-100" src="./resource/img/product-pages/acc-3.jpg" alt="">
							<div class="card-body">
								<div class="text-danger">
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
								</div>
								<p>KriziaWare Atmos X-23<br>$2499.95</p>
								<a class="btn btn-danger rounded-pill w-50 p-1" href="./resource/product-pages/accessory3.php">View</a>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card h-100 bg-transparent text-light border-0">
							<img class="h-100" src="./resource/img/prod2.jpg" alt="">
							<div class="card-body">
								<div class="text-danger">
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
									<span><i class='bx bxs-star'></i></span>
								</div>
								<p>KriziaWare Gaming Mouse<br>$485.95</p>
								<a class="btn btn-danger rounded-pill w-50 p-1" href="./resource/product-pages/accessory4.php">View</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="py-5" id="sec-3">
			<div class="container-fluid pt-5 text-light">
				<div class="row text-center pt-4">
					<div class="col">
						<span class="fs-3">Don't miss the long awaited</span>
						<h1 class="display-3">Mid Year Sale</h1>
						<a class="btn btn-outline-danger rounded-pill w-25 fs-3 my-3" href="laptop.php">Go Now!</a>
					</div>
				</div>
			</div>
		</section>

		<footer class="row-fluid bg-body-tertiary border-top py-3">
			<div class="container d-flex justify-content-center align-content-center">
				<div class="col-sm-6 col-md-4 col-lg-5">
					<small class="copyright">Copyright &copy; KriziaWare. <strong>All Rights Reserved 2023</strong></small>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-5">
					<small class="membs">Group 4: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup Jr, Emman Siva</small>
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