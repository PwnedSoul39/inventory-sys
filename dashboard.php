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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9622798f89.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <link rel="stylesheet" type="text/css" href="./resource/css/dashboard.css">
        <title>Dashboard</title>
    </head>
    <body data-bs-theme="dark" style="overflow-x:hidden;">
        <header>
            <div class="container-fluid px-0">
                <nav class="nav-dash navbar navbar-expand-lg">
                    <a class="navbar-brand ms-3" href="home.php"><span>KriziaWare</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navList" aria-controls="navList" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navList">
                        <ul class="navbar-nav ms-auto me-3"> 
                            <li class="nav-item"><a class="nav-link text-white" href="dashboard.php">Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="user.php">User</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="inventory.php">Inventory</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="order.php">Order</a></li>
                            <li class="nav-item dropdown">
                                <button class="nav-link text-white dropdown-toggle text-uppercase" data-bs-toggle="dropdown" aria-expanded="false">
                                    Account
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-dark">
                                    <li class="dropdown-item text-center disabled"><?php echo $_SESSION['user']; ?></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-white" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="cont container-fluid" data-aos="zoom-out" data-aos-duration="3000">
            <div class="row d-flex justify-content-center">
                <div class="cont col-md-3">
                    <div class="core card text-center">
                        <div class="card-body">
                            <h5 class="h1 card-title text-dark">
                                <?php
                                $view->viewCountUser();
                                ?>
                            </h5>
                            <p class="user fw-bold card-text text-dark">Users</p>
                            <img class="dash-img mx-auto" src="./resource/img/user.png" alt="SADGE">
                        </div>
                    </div>
                </div>
                <div class="cont col-md-3">
                    <div class="core card text-center">
                        <div class="card-body">
                            <h5 class="h1 card-title text-dark">
                                <?php
                                $view->viewCountInv();
                                ?>
                            </h5>
                            <p class="user fw-bold card-text text-dark">Items</p>
                            <img class="dash-img mx-auto" src="./resource/img/item.png" alt="SADGE">
                        </div>
                    </div>
                </div>
                <div class="cont col-md-3">
                    <div class="core card text-center">
                        <div class="card-body">
                            <h5 class="h1 card-title text-dark">
                                <?php
                                $view->viewCountOrder();
                                ?>
                            </h5>
                            <p class="user fw-bold card-text text-dark">Orders</p>
                            <img class="dash-img mx-auto" src="./resource/img/order.png" alt="SADGE">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Boostrap Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- Animations -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    </body>
</html>