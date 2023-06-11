<?php
require_once '../php/init.php';
session_start();
logIn();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css"  href="../css/pc1.css">
		<link rel="icon" type="image/x-icon" href="../img/favicon.ico">
		<title>Desktop | KriziaWare</title>
	</head>
	<body data-bs-theme="dark">

		<!-- start of navbar -->
		<header>
			<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow">
				<div class="container-fluid">
					<a class="navbar-brand" href="../../home.php">
						<img class="logo-img img-fluid" src="../img/logo.png" alt="LOGO">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navStuff" aria-controls="navStuff" aria-expanded="false" aria-label="Toggle Navbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navStuff">
						<ul class="navList navbar-nav me-auto">
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="../../home.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis fw-bolder" href="../../home.php#product">Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="../../home.php#about">About Us</a>
							</li>
							<li class="nav-item dropdown">
								<button class="acc_btn nav-link link-body-emphasis dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Account</button>
								<ul class="accList dropdown-menu dropdown-menu-end text-center">
									<li><a class="h5 text-center link-body-emphasis dropdown-item disabled" href="#"><?php echo $_SESSION['username']; ?></a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="text-center link-body-emphasis dropdown-item" href="../../account.php">Account Detail</a></li>
									<li><a class="text-center link-body-emphasis dropdown-item" href="../../logout.php">Logout</a></li>
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
		<!-- end of navbar -->

		<!-- section 1 -->
		<section id="section1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<img class="img" src="../img/product-pages/system-unit3.png" alt="">

						<div class="row prod-img">
							<h4 class="text-light pb-3">Related Products</h4>
							<div class="col">
								<a href="./pc6.php"><img class="img-rel" src="../img/product-pages/system-unit1.png" alt=""></a>
							</div>
							<div class="col">
								<a href="./pc4.php"><img class="img-rel" src="../img/product-pages/system-unit2.jpg" alt=""></a>
							</div>
							<div class="col">
								<a href="./pc1.php"><img class="img-rel" src="../img/product-pages/desktop1.jpg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h1 class="text-light pt-2">KriziaWare MegaByte Nova</h1>
						<p class="text-light specs">AMD Ryzen 9 5900X | RTX 3080 | 32GB DDR4 3600MHz</p>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<h3 class="text-light">$1,895</h3>

						<div class="text-light">
							<h4 class="text-light pt-2">SPECIFICATIONS</h4>
							<h5>Processor: AMD Ryzen 9 5900X</h5>
							<h5>Graphics Card: NVIDIA GeForce RTX 3080</h5>
							<h5>RAM: 32GB DDR4 3600MHz</h5>
							<h5>Storage: 1TB NVMe SSD</h5>
							<h5>Motherboard: ATX form factor</h5>
						</div>

						<p class="text-light pt-3">Tax included. Shipping calculated at checkout.</p>
						<hr class="text-light">
						<i class='bx bxs-circle'></i>
						<span class="text-light">Available<br></span>
						<button class="btn btn-submit text-light" type="submit" name="button">Add to Cart</button>
						<button class="btn btn-submit text-light" type="submit" name="button">Buy Now</button>
					</div>
				</div>
			</div>
		</section>
		<!-- end of section 1 -->

		<!-- footer -->
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
		<!-- end of footer -->

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
	</body>
</html>
