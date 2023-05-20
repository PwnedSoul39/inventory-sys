<?php
    require_once 'resource/php/init.php';
    session_start();
    logIn();
    logLockAdmin();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="./resource/css/account.css">
        <title>Account</title>
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
                        <a class="nav-link" href="./home.php">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./product.php">
                            <i class="fa-solid fa-cart-shopping"></i> Products
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-transparent dropdown-toggle nav-link" type="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right bg-dark mt-1">
                            <a class="dropdown-item text-muted" href="./account.php">View Account</a>
                            <a class="dropdown-item text-muted" href="./logout.php">Log-out</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="container-fluid mt-5">
            <div class="card w-50 mx-auto">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md">
                        <?php
                            echo '
                                <h3 class="h2 card-title my-0">'.$_SESSION['user_f'].'</h3>
                                <h4 class="text-muted">'.$_SESSION['user_mail'].'</h4>
                            ';
                        ?>
                        </div>
                        <div class="col-md-4">
                            <?php
                                echo '
                                <p class="font-weight-bold">Date Joined:
                                    <span class="text-muted">'.$_SESSION['user_join'].'</span>
                                </p>
                                ';
                            ?>
                            <?php
                                if ($_SESSION['user_level'] == 1) {
                                    echo '
                                    <p class="font-weight-bold">Account Type:
                                        <span class="text-muted">Administrator</span>
                                    </p>
                                    ';
                                } else {
                                    echo '
                                        <p class="font-weight-bold"> Account Type:
                                            <span class="text-muted">User</span>
                                        </p>
                                    ';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary rounded-pill" href="./edit_acc.php">Change Password</a>
                    </div>
                </div>
            </div>
        </main>
    </body>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>