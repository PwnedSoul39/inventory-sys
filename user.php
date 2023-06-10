<?php
require_once './resource/php/init.php';
session_start();
logCombo();

$view = new view();
$config = new config();
$con = $config->con();

$query = "SELECT * FROM `tbl_user`";
$count = $con->prepare($query);
$count->execute();
$rows = $count->rowCount();

$items = 12;
$pages = ceil($rows/$items);

if (!isset($_GET['page'])) {
	$page = 1;
} else {
	$page = $_GET['page'];
}

$start = ($page-1) * $items;
$sql = "SELECT * FROM `tbl_user` LIMIT $start, $items";
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
		<title>User | Dashboard</title>
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
								<a class="nav-link link-body-emphasis active" href="dashboard.php">Dashboard</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-body-emphasis fw-bolder" href="user.php?page=1">User</a>
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
					<?php UsrComboMsg(); ?>
				</div>
			</div>
		</div>
		
		<section class="tbl-cont py-5">
			<div class="container-fluid h-100">
				<div class="row d-flex justify-content-center justify-content-sm-center align-items-center align-items-sm-center h-100">
					<div class="col-6 col-md-8 col-lg-6 col-xl-5 w-100 table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr class="text-center">
									<th>ID</th>
									<th>Username</th>
									<th>Email</th>
									<th>Account Type</th>
									<th>Date Joined</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($result as $data) {
									echo '
									<tr class="text-center">
									<td>'.$data['u_id'].'</td>
									<td>'.$data['u_user'].'</td>
									<td>'.$data['u_email'].'</td>
									';
									UsrType($data['u_type']);
									echo '<td>'.$data['u_join'].'</td>';
									UsrEdit($data['u_user'],$_SESSION['username'],$data['u_type'],$data['u_id']);
									echo '</tr>';
								}
								?>
							</tbody>
						</table>
					</div>
					<?php
					echo '
					<small class="my-3">Page of '.$page.' of '.$pages.'</small>
					<nav class="d-flex justify-content-center justify-content-sm-center">
					<ul class="pagination">	
					';
					PrevPage($page);
					
					for ($i = 1;$i <= $pages;$i++) {
						if ($i ==  $page) {
							echo '<li class="page-item"><a class="page-link bg-info link-body-emphasis" href="?page='.$i.'">'.$i.'</a></li>';
						} else {
							echo '<li class="page-item"><a class="page-link link-body-emphasis" href="?page='.$i.'">'.$i.'</a></li>';
						}
					}
					
					NextPage($page,$pages);
					echo '
					</ul>
					</nav>
					';
					?>
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
		
	<!-- Bootstrap Dependencies -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
	</body>
</html>