<?php
require_once './resource/php/init.php';
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
		<link rel="stylesheet" type="text/css"  href="./resource/css/pc.css">
		<link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="./resource/img/favicon.ico">
		<title>Desktop | KriziaWare</title>
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
								<a class="nav-link link-body-emphasis fw-bolder" href="#">Products</a>
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

		<section id="section1">
			<div class="container-fluid">
				<h1 class="text-center text-light">Welcome to PC Section</h1>
				<p class="text-center text-light">where the realm of limitless possibilities awaits, empowering you with unrivaled power, precision, and boundless opportunities for creativity and gaming.</p>
			</div>
		</section>

		<section id="section2">
			<div class="container-fluid">
				<h1 class="text-light text-center pt-5">FEATURED PC PRODUCTS</h1>
				<div class="row">
					<div class="col-4 text-center">
						<div class="card mt-5 border-0">
							<img src="./resource/img/product-pages/desktop1.jpg">
						</div>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<p class="text-light">KriziaWare QuantumForce Phoenix<br>$2,999</p>
						<a href="./resource/product-pages/pc1.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
					</div>
					<div class="col-4 text-center">
						<div class="card mt-5 border-0">
							<img src="./resource/img/product-pages/system-unit.jpg">
						</div>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<p class="text-light">KriziaWare Vanguard R15<br>$1,550</p>
						<a href="./resource/product-pages/pc2.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
					</div>
					<div class="col-4 text-center">
						<div class="card mt-5 border-0">
							<img src="./resource/img/product-pages/monitor.png">
						</div>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<p class="text-light">KriziaWare AuroraTech Gaming Monitor<br>$1,100</p>
						<a href="./resource/product-pages/pc3.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
					</div>
				</div>

				<div class="row">
					<div class="col-4 text-center">
						<div class="card border-0">
							<img src="./resource/img/product-pages/system-unit2.jpg">
						</div>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<p class="text-light">KriziaWare Nova V2<br>$2,430</p>
						<a href="./resource/product-pages/pc4.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
					</div>
					<div class="col-4 text-center">
						<div class="card border-0">
							<img src="./resource/img/product-pages/monitor2.jpg">
						</div>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<p class="text-light">KriziaWare Seraph<br>$780</p>
						<a href="./resource/product-pages/pc5.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
					</div>
					<div class="col-4 text-center">
						<div class="card border-0">
							<img src="./resource/img/product-pages/system-unit1.png">
						</div>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<p class="text-light">KriziaWare V5 J16<br>$990</p>
						<a href="./resource/product-pages/pc6.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
					</div>
				</div>

				<div class="row">
					<div class="col-4 text-center">
						<div class="card border-0">
							<img src="./resource/img/product-pages/monitor1.jpg">
						</div>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<p class="text-light">KriziaWare Xtreme 11<br>$1,000</p>
						<a href="./resource/product-pages/pc7.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
					</div>
					<div class="col-4 text-center">
						<div class="card border-0">
							<img src="./resource/img/product-pages/system-unit3.png">
						</div>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<span><i class='bx bxs-star'></i></span>
						<p class="text-light">KriziaWare MegaByte Nova<br>$1,895</p>
						<a href="./resource/product-pages/pc8.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
					</div>
				</div>
			</div>
		</section>
		<!-- end of products section -->

		<!-- section 3 -->
		<section id="section3">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4 text-center">
						<div class="card">
							<i class="fa-solid fa-computer text-light"></i>
							<h3 class="text-light pt-3">Best PC</h3>
							<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="col-4 text-center">
						<div class="card">
							<i class='bx bx-check-shield text-light'></i>
							<h3 class="text-light pt-3">Best Warranty</h3>
							<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="col-4 text-center">
						<div class="card">
							<i class='bx bx-like text-light'></i>
							<h3 class="text-light pt-3">Trusted By Companies</h3>
							<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end of section 3 -->

		<!-- section 4 -->
		<section id="section4">
			<video class="bg-vid" autoplay loop muted plays-inline>
				<source src="./resource/img/product-pages/bg-vid1.mp4" type="video/mp4">
			</video>
			<div class="overlay">
				<div class="card rounded">
					<h2 class="text-light">Experience Unparalleled Performance with our PCs</h2>
					<p class="text-light">Introducing our innovative computer, redefining performance with cutting-edge technology, seamless multitasking, and stunning visuals for professionals and creative enthusiasts.</p>
				</div>
			</div>
		</section>
		<!-- end of section 4 -->

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


		<!-- Boostrap Dependencies -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
	</body>
</html>
