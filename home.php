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
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
		<link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./resource/css/home.css">
		<link rel="icon" type="image/x-icon" href="./resource/img/favicon.ico">
		<title>Home | KriziaWare</title>
	</head>
	<body data-bs-theme="dark" style="overflow-x: hidden;">
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
								<a class="nav-link link-body-emphasis fw-bolder" href="#home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="#product">Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="#about">About Us</a>
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

		<main>
			<section class="container-fluid mb-5" id="home">
				<div class="row">
					<div class="col px-0">
						<div class="carousel slide" data-bs-slide="carousel" id="prod_caro">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<a href="pc.php">
										<img class="d-block w-100" src="./resource/img/prod1.jpg" alt="PRODUCT1">
									</a>
								</div>
								<div class="carousel-item">
									<a href="accessory.php">
										<img class="d-block w-100" src="./resource/img/prod2.jpg" alt="PRODUCT2">
									</a>
								</div>
								<div class="carousel-item">
									<a href="laptop.php">
										<img class="d-block w-100" src="./resource/img/prod3.jpg" alt="PRODUCT3">
									</a>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#prod_caro" data-bs-slide="prev">
									<span class="text-info carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#prod_caro" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="container-fluid mt-5 mb-5 d-flex justify-content-center align-items-center" id="product">
				<div class="row pt-5">
					<h1 class="home-title text-center text-body-emphasis" data-aos="fade-down" data-aos-duration="2000">Featured Products</h1>
					<div class="row row-cols-1 row-cols-md-4 g-3">
						<div class="col-sm-4 col-md-4">
							<div class="prod_card card h-100 bg-transparent" data-aos="fade-right" data-aos-duration="2000">
								<a class="img-thumbnail" href="accessory.php">
									<img class="card-img-top img-fluid" src="./resource/img/product-pages/augh3.jpg" alt="FPROD1">
								</a>
								<div class="card-body">
									<h5 class="text-center">Accessories</h5>
									<div class="prod-btn text-center">
										<a class="btn btn-outline-light w-50 p-1" href="accessory.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">See More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="prod_card card h-100 bg-transparent" data-aos="zoom-in" data-aos-duration="2000">
								<a class="img-thumbnail" href="laptop.php">
									<img class="card-img-top img-fluid" src="./resource/img/product-pages/laptop2.png" alt="FPROD2">
								</a>
								<div class="card-body">
									<h5 class="text-center">Laptops</h5>
									<div class="prod-btn text-center">
										<a class="btn btn-outline-light w-50 p-1" href="laptop.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">See More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="prod_card card h-100 bg-transparent" data-aos="fade-left" data-aos-duration="2000">
								<a class="img-thumbnail" href="pc.php">
									<img class="card-img-top img-fluid" src="./resource/img/product-pages/desktop1.jpg" alt="FPROD3">
								</a>
								<div class="card-body">
									<h5 class="text-center">Desktops</h5>
									<div class="prod-btn text-center">
										<a class="btn btn-outline-light w-50 p-1" href="pc.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">See More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="container-fluid d-flex align-items-center mt-4" id="about">
				<div class="row">
					<div class="col">
						<h1 class="home-title text-center text-light" data-aos="fade-down" data-aos-duration="2000">About Us</h1>
						<div class="my-3 lead text-light">
							<p class="abt-text" data-aos="zoom-in" data-aos-duration="3000">
								At Inventory Gadgets, we take great pride in offering our clients the newest and most cutting-edge technological solutions. We serve IT enthusiasts, professionals, and regular consumers alike with a wide selection of gadgets and equipment To guarantee that we only offer the most dependable, high-quality products from reputable manufacturers, our inventory is meticulously chosen.
							</p>
							<p class="abt-text" data-aos="zoom-in" data-aos-duration="3000">
								We continually update our inventory to reflect the newest releases and cutting-edge technologies in an effort to stay ahead of the curve. We are dedicated to assist our customers in locating the ideal technology to fulfill their demands and improve their digital lifestyles. Our staff is informed and pleasant.
							</p>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col" data-aos="fade-up" data-aos-duration="2000">
							<h3 class="address text-center text-light">Lot 19 Block 1, St. Paul Village, Sumapang Matanda, Malolos, Bulacan</h3>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col">
							<ul class="list-inline text-center text-light">
								<li class="list-inline-item" data-aos="fade-right" data-aos-duration="2000">
									<a class="nav-link link-light mx-2" href="https://facebook.com" target="_blank">
										<svg class="soclink" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
									</a>
								</li>
								<li class="list-inline-item" data-aos="fade-down" data-aos-duration="2000">
									<a class="nav-link link-light mx-2" href="https://instagram.com" target="_blank">
										<svg class="soclink" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
									</a>
								</li>
								<li class="list-inline-item" data-aos="fade-left" data-aos-duration="2000">
									<a class="nav-link link-light mx-2" href="https://twitter.com" target="_blank">
										<svg class="soclink" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</main>

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

	<!-- AOS Dependencies -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>AOS.init();</script>
	</body>
</html>