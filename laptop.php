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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./resource/css/laptops.css">
		<link rel="icon" type="image/x-icon" href="./resource/img/favicon.ico">
		<title>Laptop | KriziaWare</title>
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
								<ul class="accList dropdown-menu dropdown-menu-end">
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

		<section class="vh-100 carousel slide" data-bs-ride="carousel" id="header">
			<div class="container-fluid h-100 d-flex align-items center carousel-inner px-0">
				<div class="text-center carousel-item active">
					<img class="img-fluid w-100" src="./resource/img/product-pages/caro1.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
						<h2 class="text-capitalize text-light">Ready For a New Era?</h2>
						<h1 class="text-uppercase py-2 fw-bold text-light">New and Improved</h1>
						<a class="btn btn-danger mt-3 text-light rounded-pill w-25 text-uppercase" href="#">shop now</a>
					</div>
				</div>
				<div class="text-center carousel-item">
					<img class="img-fluid w-100" src="./resource/img/product-pages/caro2.jpg" alt="">
					<div class="carousel-caption d-none d-md-block">
						<h2 class="text-capitalize text-light">Get Some Deals Now</h2>
						<h1 class="text-uppercase py-2 fw-bold text-light">new season</h1>
						<a class="btn btn-danger mt-3 text-light rounded-pill w-25 text-uppercase" href="#">buy now</a>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
				<span class="text-info carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</section>

		<section class="py-5" id="collection">
			<div class="below">
				<div class="title text-center">
					<h2 class="position-relative text-light d-inline-block">Check These Out!</h2>
				</div>
				<div class="row g-0">
					<div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group btn-group">
						<button class="btn btn-danger m2 text-light active-filter-btn" data-filter="*">All</button>
						<button class="btn btn-danger m2 text-light" data-filter=".best">Best Sellers</button>
						<button class="btn btn-danger m2 text-light" data-filter=".featured">Featured</button>
						<button class="btn btn-danger m2 text-light" data-filter=".new">New Arrival</button>
					</div>
					<div class="collection-list mt-2 row gx-0 gy-3">
						<div class="col-md-6 col-lg-4 col-xl-4 p-2 best">
							<div class="collection-img position-relative">
								<a href="./resource/product-pages/laptop1.php">
									<img class="w-100" src="./resource/img/product-pages/laptop1.png" alt="">
								</a>
								<span class="position-absolute bg-danger text-light d-flex align-items-center justify-content-center">Sale</span>
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<!-- HAAHAHAHHAHAHAH -->
									<span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span>
								</div>
								<p class="text-capitalize text-light my-1">KriziaWare V2 Boosted R2 Gaming Laptop</p>
								<span class="text-capitalize fw-bold text-danger my-1">-31%</span>
								<span class="fw-bold text-light">$1,999.98</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4 p-2">
							<div class="collection-img position-relative">
								<a href="./resource/product-pages/laptop2.php">
									<img class="w-100" src="./resource/img/product-pages/laptop2.png" alt="">
								</a>
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<!-- HAAHAHAHHAHAHAH -->
									<span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span>
								</div>
								<p class="text-capitalize text-light my-1">KriziaWare Gigabyte XE4</p>
								<span class="fw-bold text-light">$2350</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4 p-2 best">
							<div class="collection-img position-relative">
								<a href="./resource/product-pages/laptop3.php">
									<img class="w-100" src="./resource/img/product-pages/laptop3.png" alt="">
								</a>
								<span class="position-absolute bg-danger text-light d-flex align-items-center justify-content-center">Sale</span>
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<!-- HAAHAHAHHAHAHAH -->
									<span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span>
								</div>
								<p class="text-capitalize text-light my-1">KriziaWare Zephyrus</p>
								<span class="text-capitalize fw-bold text-danger my-1">-$550</span>
								<span class="fw-bold text-light">$1,100</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4 p-2 featured">
							<div class="collection-img position-relative">
								<a href="./resource/product-pages/laptop4.php">
									<img class="w-100" src="./resource/img/product-pages/laptop4.png" alt="">
								</a>
								<span class="position-absolute bg-danger text-light d-flex align-items-center justify-content-center">Sale</span>
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<!-- HAAHAHAHHAHAHAH -->
									<span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span>
								</div>
								<p class="text-capitalize text-light my-1">KriziaWare Velociraptor R5</p>
								<span class="text-capitalize fw-bold text-danger my-1">-$300</span>
								<span class="fw-bold text-light">$1,200</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4 p-2 new">
							<div class="collection-img position-relative">
								<a href="./resource/product-pages/laptop5.php">
									<img class="w-100" src="./resource/img/product-pages/laptop5.png" alt="">
								</a>
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<span class="fw-bold text-light">No Reviews Yet</span>
								</div>
								<p class="text-capitalize text-light my-1">KriziaWare NP6271J (CLEVO NP70RNJS) Gaming Laptop</p>
								<span class="fw-bold text-light">$1,119.00</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4 p-2 featured">
							<div class="collection-img position-relative">
								<a href="./resource/product-pages/laptop6.php">
									<img class="w-100" src="./resource/img/product-pages/laptop6.png" alt="">
								</a>
								<span class="position-absolute bg-danger text-light d-flex align-items-center justify-content-center">Sale</span>
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<!-- HAAHAHAHHAHAHAH -->
									<span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span>
								</div>
								<p class="text-capitalize text-light my-1">KriziaDell G16 16</p>
								<span class="text-capitalize fw-bold text-danger my-1">-35%</span>
								<span class="fw-bold text-light">$849.99</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4 p-2">
							<div class="collection-img position-relative">
								<a href="./resource/product-pages/laptop7.php">
									<img class="w-100" src="./resource/img/product-pages/laptop7.png" alt="">
								</a>
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<!-- HAAHAHAHHAHAHAH -->
									<span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span>
								</div>
								<p class="text-capitalize text-light my-1">KriziaWare Razer Sword 4 QHD+</p>
								<span class="fw-bold text-light">$3,599.98</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 col-xl-4 p-2 best">
							<div class="collection-img position-relative">
								<a href="./resource/product-pages/laptop8.php">
									<img class="w-100" src="./resource/img/product-pages/laptop8.png" alt="">
								</a>
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<!-- HAAHAHAHHAHAHAH -->
									<span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span><span class="text-danger"><i class="fas fa-star"></i></span>
								</div>
								<p class="text-capitalize text-light my-1">KriziaWare Ford Thin 9SEXR-838</p>
								<span class="fw-bold text-light">$999</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="py-5" id="offers">
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
					<div class="offers-content">
						<span class="text-light">Discount Up To 40%</span>
						<h2 class="mt-2 mb-4 text-light">Grand Sale Offer!</h2>
						<a class="btn btn-outline-danger rounded-pill w-25 p-1 text-light" href="#">Go Now!</a>
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

	<!-- JQuery -->
	<script src="./resource/js/jquery-3.6.0.js"></script>
	
	<!-- Bootstrap Dependencies -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

	<!-- Isotope -->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

	<!-- Own Script -->
	<script src="./resource/js/laptops.js"></script>
	</body>
</html>