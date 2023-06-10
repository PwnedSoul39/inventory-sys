<?php
require_once './resource/php/init.php';
session_start();
logCombo();

$view = new view();
$config = new config();
$con = $config->con();

$query = "SELECT * FROM `tbl_order`";
$count = $con->prepare($query);
$count->execute();
$rows = $count->rowCount();

$items = 10;
$pages = ceil($rows/$items);

if (!isset($_GET['page'])) {
	$page = 1;
} else {
	$page = $_GET['page'];
}

$start = ($page-1) * $items;
$sql = "SELECT * FROM `tbl_order` LIMIT $start, $items";
$data = $con->prepare($sql);
$data->execute();
$result = $data->fetchAll(PDO::FETCH_ASSOC);
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
		<title>Order | Dashboard</title>
	</head>
	<body data-bs-theme="dark">
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
								<a class="nav-link link-body-emphasis" href="dashboard.php">Dashboard</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="user.php?page=1">User</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis" href="inventory.php?page=1">Inventory</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis fw-bolder" href="order.php?page=1">Order</a>
							</li>
							<li class="nav-item dropdown">
								<button class="acc_btn nav-link link-body-emphasis dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Account</button>
								<ul class="accList dropdown-menu dropdown-menu-end text-center">
									<li><a class="h5 text-center link-body-emphasis dropdown-item disabled" href="#"><?php echo $_SESSION['username']; ?></a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="link-body-emphasis dropdown-item" href="account.php">Account Detail</a></li>
									<li><a class="link-body-emphasis dropdown-item" href="logout.php">Logout</a></li>
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

		<div class="container pt-2">
			<div class="row">
				<div class="col">
					<?php OrdComboMsg($page); ?>
				</div>
			</div>
		</div>

		<section class="tbl-cont py-5">
			<div class="container-fluid h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-6 col-md-8 col-lg-6 col-xl-5 w-100 table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr class="text-center">
									<th>ID</th>
									<th>Customer Name</th>
									<th>Item Name</th>
									<th>Quantity</th>
									<th>Total Price</th>
									<th>Order Status</th>
									<th>Date Ordered</th>
									<th>Date Received</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($result as $data) {
									echo '
									<tr class="text-center">
										<td>'.$data['o_id'].'</td>
										<td>'.$data['o_cus'].'</td>
										<td>'.$data['o_item'].'</td>
										<td>'.$data['o_qty'].'</td>
										<td>'.$data['o_total'].'</td>
									';
									OrdStatus($data['o_status']);
									echo '
									<td>'.$data['o_order'].'</td>
									<td>'.$data['o_receive'].'</td>
									';
									OrdEdit($data['o_status'],$data['o_id'],$page);
									echo '</tr>';
								}
								?>
								<tr class="ins-form text-center">
									<form method="post">
										<td>#</td>
										<td>
											<div class="form-floating">
												<input class="form-control" type="text" name="ocn_box" placeholder="Customer Name" id="ord_input1" required>
												<label for="ord_input1">Customer Name</label>
											</div>
										</td>
										<td>
											<div class="form-floating">
												<input class="form-control" type="text" name="oin_box" placeholder="Item Name" id="ord_input2" required>
												<label for="ord_input2">Item Name</label>
											</div>
										</td>
										<td>
											<div class="form-floating">
												<input class="form-control" type="number" name="oiq_box" placeholder="Item Quantity" id="ord_input3" required>
												<label for="ord_input3">Item Quantity</label>
											</div>
										</td>
										<td>
											<div class="form-floating">
												<input class="form-control" type="number" name="otp_box" placeholder="Total Price" id="ord_input4" required>
												<label for="ord_input4">Total Price</label>
											</div>
										</td>
										<td>
											<div class="form-floating">
												<select class="form-select" name="oos_box" id="ord_input5" required>
													<option value="" disabled selected>Choose a status</option>
													<option value="1">Ordered</option>
													<option value="2">Packaged</option>
													<option value="3">Shipped</option>
													<option value="4">In Transit</option>
													<option value="5">Delivered</option>
												</select>
												<label for="ord_input5">Order Status</label>
											</div>
										</td>
										<td>
											<div class="form-floating">
												<input class="form-control" type="datetime-local" name="odo_box" placeholder="Date Ordered" id="ord_input6" required>
												<label for="ord_input6">Date Ordered</label>
											</div>
										</td>
										<td>
											<div class="form-floating">
												<input class="form-control" type="datetime-local" name="odr_box" placeholder="Date Received" id="ord_input7">
												<label for="ord_input7">Date Received</label>
											</div>
										</td>
										<td class="text-center">
											<input class="btn btn-primary w-100 p-1 my-2" type="submit" name="ord_add" value="Add Order">
										</td>
									</form>
								</tr>
							</tbody>
						</table>
					</div>
					<?php
					echo '
					<small class="my-3">Page of '.$page.' of '.$pages.'</small>
					<nav class="d-flex justify-content-center align-content-center">
						<ul class="pagination">
					';
					echo PrevPage($page);

					for ($i = 1;$i <= $pages;$i++) {
						if ($i == $page) {
							echo '<li class="page-item"><a class="page-link bg-info link-body-emphasis" href="?page='.$i.'">'.$i.'</a></li>';
						} else {
							echo '<li class="page-item"><a class="page-link link-body-emphasis" href="?page='.$i.'">'.$i.'</a></li>';
						}
					}

					echo NextPage($page,$pages);
					echo '
						</ul>
					</nav>
					';
					?>
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