<?php
require_once 'resource/php/init.php';
$view = new view();
session_start();
logIn();
logLockUser();
?>
<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <title>Inventory</title>
      <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
      <link href="vendor/css/all.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css"  href="./resource/css/inventory.css">
      <script src="https://kit.fontawesome.com/9622798f89.js"></script>
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--
            NOTE: Pwede nyong baguhin tong mga to tinest ko lng mga webpage
        -->
        <nav class="nav-dash navbar navbar-expand-lg ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link text-white active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#products">Products</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  See more
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Users</a></li>
                    <li><a class="dropdown-item" href="#">Orders</a></li>
                    <li><a class="dropdown-item" href="#">Inventory</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
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
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>

        <div class="container-fluid mt-3">
            <div class="row mx-auto w-50 pt-4">
                <div class="col">
                    <?php
                        insertItemMsg();
                        itemMsg();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto">
                    <?php
                        $view->viewInventory();
                    ?>
                </div>
            </div>
=======
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="./resource/css/inventory.css">
  <title>Inventory</title>
</head>
<body>
  <!--
  NOTE: Pwede nyong baguhin tong mga to tinest ko lng mga webpage
-->
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
>>>>>>> 8f1e59bc2bcda795a246c0ec7b75bd00e8c44e70
        </div>
      </li>
    </ul>
  </nav>
</header>
<div class="container-fluid mt-3">
  <div class="row mx-auto w-50">
    <div class="col">
      <?php
      insertItemMsg();
      itemMsg();
      ?>
    </div>
  </div>
  <div class="row">
    <div class="mx-auto">
      <?php
      $view->viewInventory();
      ?>
    </div>
  </div>
</div>
</body>

<<<<<<< HEAD
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
=======
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
>>>>>>> 8f1e59bc2bcda795a246c0ec7b75bd00e8c44e70
</html>
