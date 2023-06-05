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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./resource/css/product.css">
        <title>KriziaWare | Products</title>
    </head>
    <body data-bs-theme="dark">
        <header>
            <div class="container-fluid px-0">
                <nav class="nav-dash navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navList" aria-controls="navList" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navList">
                        <ul class="navbar-nav ps-2 me-auto"> 
                            <li class="nav-item"><a class="nav-link text-white link-secondary" href="home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-white link-secondary" href="home.php#products">Products</a></li>
                            <li class="nav-item"><a class="nav-link text-white link-secondary" href="home.php#aboutus">About Us</a></li>
                            <li class="nav-item dropdown">
                                <button class="nav-link text-white link-secondary dropdown-toggle text-uppercase" data-bs-toggle="dropdown" aria-expanded="false">
                                    Account
                                </button>
                                <ul class="dropdown-menu dropdown-menu-center bg-dark">
                                    <li class="dropdown-item disabled text-center text-white h5"><?php echo $_SESSION['user']; ?></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-white link-secondary" href="account.php">View Profile</a></li>
                                    <li><a class="dropdown-item text-white link-secondary" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex me-3" role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <input class="btn btn-secondary ms-2 me-3" type="submit" value="Go">
                        </form>
                    </div>
                </nav>
            </div>
        </header>
        <a href ="./accessory.php">
            <img src="resource/img/product.png" class="rounded float-left" alt="...">
        </a>
        
        <!-- Boostrap Dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>
</html>