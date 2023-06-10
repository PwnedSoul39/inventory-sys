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
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/accessory.css">
		<link rel="icon" type="image/x-icon" href="../img/favicon.ico">
		<title>Accessory | KriziaWare</title>
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
									<li class="link-body-emphasis dropdown-item text-center">
										<div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" role="switch" id="theme_switch">
											<label class="form-check-label" for="theme_switch">Dark Mode</label>
										</div>
									</li>
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

		<section class="py-5" id="item-sec">
			<div class="container-fluid text-light">
				<div class="row">
					<div class="col-md-6">
						<img class="img-fluid" src="../img/product-pages/acc-1.png" alt="">

						<div class="row">
							<h4 class="py-3">Related Products</h4>
							<div class="col">
								<a href="accessory2.php">
									<img class="img-fluid h-100 img-rel" src="../img/product-pages/acc-2.jpg" alt="">
								</a>
							</div>
							<div class="col">
								<a href="accessory3.php">
									<img class="img-fluid h-100 img-rel" src="../img/product-pages/acc-3.jpg" alt="">
								</a>
							</div>
							<div class="col">
								<a href="accessory4.php">
									<img class="img-fluid h-100 img-rel" src="../img/product-pages/acc-4.jpg" alt="">
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h1 class="display-3 py-2">KriziaWare MK857 RGB Gaming Keyboard</h1>
						<div class="text-danger fs-2 pb-4">
							<span><i class='bx bxs-star'></i></span>
							<span><i class='bx bxs-star'></i></span>
							<span><i class='bx bxs-star'></i></span>
							<span><i class='bx bxs-star'></i></span>
							<span><i class='bx bxs-star'></i></span>
						</div>
						<h3 class="display-4">$499.95</h3>
						<p class="fs-4">
							Take command like never before with our gaming keyboard, a masterpiece of precision and style. The keys respond with unwavering accuracy, empowering you to lead your team to glory. Embrace the authority bestowed upon you and become the fearless commander that the gaming world bows to.
						</p>
						
						<p class="pt-3">Tax included. Shipping calculated at checkout.</p>
						<hr class="text-light">
						<a class="btn btn-danger w-100 my-2" href="">Add to Cart</a>
						<a class="btn btn-danger w-100 my-2" href="">Buy Now</a>
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