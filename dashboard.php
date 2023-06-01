<?php
	require_once './resource/php/init.php';
	session_start();
	logIn();
    logLockUser();
    $view = new view();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <meta charset="UTF-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		  <title>Admin Dashboard</title>
		  <link rel="stylesheet" type="text/css"  href="./resource/css/adm_dashboard.css">
		  <script src="https://kit.fontawesome.com/9622798f89.js"></script>
		  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		  <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
		  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
	</head>
	<body>
		<nav class="nav-dash navbar navbar-expand-lg">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link text-white active" aria-current="page" href="dashboard.php">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							See more
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="user.php">Users</a></li>
								<li><a class="dropdown-item" href="order.php">Orders</a></li>
								<li><a class="dropdown-item" href="inventory.php">Inventory</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="logout.php">Logout</a></li>
								<li class="dropdown">
										<button class="btn btn-transparent dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												<?php
														echo '
																<i class="fa-solid fa-user"></i> '.$_SESSION['user'].'
														';
												?>
										</button>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right bg-dark mt-1">
												<a class="dropdown-item text-muted" href="./logout.php">Log-out</a>
										</div>
								</li>
							</ul>
						</li>
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-light" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
		<!-- Card ICONs -->
		<div class="cont container" data-aos="zoom-out" data-aos-duration="3000">
				<div class="row">
					<div class="cont col-md-4">
						<div class="card-deck text-center mt">
							<div class="cater card ">
								<div class="card-body">
									<h5 class="card-title h1">
										<?php
										$view->viewCountUser();
										?>
									</h5>
									<p class="user font-weight-bold card-text">Users</p>
									<img class="dash-img mx-auto" src="./resource/img/user.png" alt="SADGE">
								</div>
							</div>
						</div>
					</div>

					<div class="cont col-md-4">
						<div class="core card text-center">
							<div class="card-body">
								<h5 class="card-title h1">
									<?php
									$view->viewCountInv();
									?>
								</h5>
								<p class="user font-weight-bold card-text">Items</p>
								<img class="dash-img mx-auto" src="./resource/img/item.png" alt="SADGE">
							</div>
						</div>
					</div>

					<div class="cont col-md-4">
						<div class="core1 card text-center">
							<div class="card-body">
								<h5 class="card-title h1">
									<?php
									$view->viewCountOrder();
									?>
								</h5>
								<p class="user font-weight-bold card-text">Orders</p>
								<img class="dash-img mx-auto" src="./resource/img/order.png" alt="SADGE">
							</div>
						</div>
					</div>
				</div>
			</div>

	<!-- Boostrap -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
	AOS.init();
	</script>
</body>
</html>
