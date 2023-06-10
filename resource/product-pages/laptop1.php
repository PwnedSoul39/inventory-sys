<?php
require_once '../php/init.php';
session_start();
logIn();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/laptops.css">
		<link rel="icon" type="image/x-icon" href="../img/favicon.ico">
		<title>Laptops | KriziaWare</title>
	</head>
	<body data-bs-theme="dark">
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
								<ul class="accList dropdown-menu dropdown-menu-end">
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

		<section class="container-fluid py-5 mb-4">
			<div class="row d-flex justify-content-center mt-5 py-2">
				<div class="col-lg-5 col-md-12 col-12">
					<img src="../img/product-pages/laptop1.png" alt="" class="rounded img-fluid w-100 pb-1">
					<h4 class="text-light py-3">Related Products</h4>
					<div class="row d-flex justify-content-between">
						<div class="col">
							<a href="laptop4.php">
								<img class="img-rel rounded" src="../img/product-pages/laptop4.png" alt="">
							</a>
						</div>
						<div class="col">
							<a href="laptop6.php">
								<img class="img-rel rounded" src="../img/product-pages/laptop6.png" alt="">
							</a>
						</div>
						<div class="col">
							<a href="laptop7.php">
								<img class="img-rel rounded" src="../img/product-pages/laptop7.png" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-12">
					<h3 class="text-light">KriziaWare V2 Boosted R2 Gaming Laptop</h3>
					<div class="rating">
						<span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span>
					</div>
					<div class="number">
						<span class="text-capitalize fw-bold text-danger my-1">-31%</span>
						<span class="fw-bold text-light">$1,999.98</span>
					</div>
					<div class="buttons my-2">
						<button class="btn btn-danger w-25 rounded-pill p-1">Buy Now</button>
						<button class="btn btn-danger w-25 rounded-pill p-1">Add to Cart</button>
					</div>
					<div class="text-light my-5">
						<h3 class="fw-bolder">Product Details</h3>
						<p class="text-justify lead fs-5">
							The sleek and powerful KriziaWare V2 Boosted R2 Gaming Laptop features a slim aluminum chassis, providing both durability and style. Its high-resolution display brings visuals to life, while the latest Intel Core i7 processor ensures smooth multitasking and fast performance. With ample storage and a backlit keyboard, it's perfect for productivity and entertainment on the go.
						</p>
					</div>
					<div class="specs text-light">
						<h3 class="fw-bolder">Specifications</h3>
						<ul class="list-unstyled fs-5">
							<li><span class="fw-bolder">Processor:</span>&nbsp;Intel Core i7 11000HS</li>
							<li><span class="fw-bolder">GPU:</span>&nbsp;NVIDIA GeForce RTX 3060</li>
							<li><span class="fw-bolder">RAM:</span>&nbsp;16GB DDR4</li>
							<li><span class="fw-bolder">Storage:</span>&nbsp;1TB NVMe SSD</li>
							<li><span class="fw-bolder">Display:</span>&nbsp;14-inch QHD(2560 x 1440) 120Hz</li>
						</ul>
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

	<!-- JQuery -->
	<script src="../js/jquery-3.6.0.js"></script>
	
	<!-- Bootstrap Dependencies -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

	<!-- Isotope -->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

	<!-- Own Script -->
	<script src="../js/laptops.js"></script>
	<script src="../js/theme-toggle.js"></script>
	</body>
</html>