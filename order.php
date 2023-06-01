<?php
    require_once 'resource/php/init.php';
    $view = new view();
    session_start();
    logIn();
    logLockUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Orders</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="./resource/css/order.css">
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
            <div class="row mx-auto w-50">
                <div class="col">
                    <?php
                        orderMsg();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto">
                    <?php
                        $view->viewOrder();
                    ?>
                </div>
            </div>
        </div>
    </body>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>
