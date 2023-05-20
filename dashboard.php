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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="./resource/css/adm_dashboard.css">
		<title>Admin Dashboard</title>
	</head>
	<body>
    <header class="row-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                <span class="navbar-brand mr-auto">KriziaWare</span>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard.php">
                            <i class="fa-solid fa-table-columns"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user.php">
                            <i class="fa-solid fa-users"></i> Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./order.php">
                            <i class="fa-solid fa-truck"></i> Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./inventory.php">
                            <i class="fa-solid fa-clipboard-list"></i> Inventory
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-transparent dropdown-toggle nav-link" type="button" data-toggle="dropdown" aria-expanded="false">
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
            </nav>
        </header>
		<!-- Card ICONs -->
        <div class="container mt-5">
            <div class="card-deck text-center mt-3">
                <div class="card bg-info">
                    <div class="card-body">
                        <h5 class="card-title h1">
                            <?php
                                 $view->viewCountUser();
                            ?>
                        </h5>
                        <p class="font-weight-bold card-text">Users</p>
                        <img class="dash-img mx-auto" src="./resource/img/user.png" alt="SADGE">
                    </div>
                </div>
                <div class="card bg-success">
                    <div class="card-body">
                        <h5 class="card-title h1">
                            <?php
                                $view->viewCountInv();
                            ?>
                        </h5>
                        <p class="font-weight-bold card-text">Items</p>
                        <img class="dash-img mx-auto" src="./resource/img/item.png" alt="SADGE">
                    </div>
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title h1">
                            <?php
                                $view->viewCountOrder(); 
                            ?>
                        </h5>
                        <p class="font-weight-bold card-text">Orders</p>
                        <img class="dash-img mx-auto" src="./resource/img/order.png" alt="SADGE">
                    </div>
                </div>
            </div>
        </div>
	</body>
	
	<!-- Boostrap -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>
