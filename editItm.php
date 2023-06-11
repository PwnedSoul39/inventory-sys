<?php
require_once './resource/php/init.php';
session_start();
logCombo();

$id = $_GET['id'];
$page = $_GET['page'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./resource/css/main.css">
		<link rel="icon" type="image/x-icon" href="./resource/img/favicon.ico">
		<title>Edit Item | KriziaWare</title>
	</head>
	<body data-bs-theme="dark" style="overflow-x:hidden;">
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
						<ul class="navList navbar-nav me-auto">
							<li class="nav-item">
								<a class="nav-link link-body-emphasis fw-bolder" href="dashboard.php">Dashboard</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="user.php?page=1">User</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="inventory.php?page=1">Inventory</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="order.php?page=1">Order</a>
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
		
		<section id="full-edit">
			<div class="container-fluid py-5">
				<div class="row pt-5 d-flex justify-content-center align-content-center">
					<div class="col">
						<div class="card bg-body-secondary p-5 text-body-emphasis">
							<h3 class="card-title text-center acc-title">Edit Order</h3>
							<h5 class="my-2 text-center">Editing Item No. <?php echo $id; ?></h5>
							<div class="card-body">
								<?php fullItm($id,$page); ?>
								<form method="post">
									<div class="row">
										<div class="col">
											<div class="form-floating">
												<input class="form-control" type="text" placeholder="Woah" name="finm_box" id="fi_input1" required>
												<label for="fi_input1">Item Name</label>
											</div>
										</div>
										<div class="col">
											<div class="form-floating">
												<select class="form-select" name="fitp_box" id="fi_input2" required>
													<option value="" disabled selected>Choose a Type</option>
													<option value="Keyboard">Keyboard</option>
													<option value="Mouse">Mouse</option>
													<option value="Controller">Controller</option>
													<option value="HDD">HDD</option>
													<option value="SSD">SSD</option>
													<option value="RAM">RAM</option>
													<option value="Laptop">Laptop</option>
													<option value="Desktop">Desktop</option>
												</select>
												<label for="fi_input2">Item Type</label>
											</div>
										</div>
										<div class="col">
											<div class="form-floating">
												<input class="form-control" type="text" placeholder="Woah" name="fibd_box" id="fi_input3" required>
												<label for="fi_input3">Item Brand</label>
											</div>
										</div>
										<div class="col">
											<div class="form-floating">
												<input class="form-control" type="number" placeholder="Woah" name="fipr_box" id="fi_input4" required>
												<label for="fi_input4">Item Price</label>
											</div>
										</div>
										<div class="col">
											<div class="form-floating">
												<input class="form-control" type="number" placeholder="Woah" name="fiqt_box" id="fi_input5" required>
												<label for="fi_input5">Item Quantity</label>
											</div>
										</div>
										<div class="col">
											<div class="form-floating">
												<select class="form-select" name="fist_box" id="fi_input6">
													<option value="" disabled selected>Choose a Status</option>
													<option value="1">Active</option>
													<option value="2">Sold Out</option>
													<option value="3">On Discount</option>
												</select>
												<label for="fi_input6">Item Status</label>
											</div>
										</div>
										<div class="col">
											<div class="form-floating">
												<input class="form-control" type="datetime-local" name="fidt_box" id="fi_input7" required>
												<label for="fi_input7">Date Added</label>
											</div>
										</div>
										<div class="col text-center">
											<input class="btn btn-primary w-100 p-1 my-2" type="submit" name="fi_upd" value="Update Item">
										</div>
									</div>
								</form>
							</div>
						</div>
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
	</body>
</html>