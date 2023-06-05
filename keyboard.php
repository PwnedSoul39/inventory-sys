<?php
require_once './resource/php/init.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9622798f89.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="keyboard.css">
        <title>Dashboard</title>
    </head>
    <body>
        <header class="row-fluid">
            <nav class="nav-dash navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            See more
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                                <li class="nav-item dropdown">
                                    <button class="btn btn-transparent dropdown-toggle nav-link" type="button"
                                    data-toggle="dropdown" aria-expanded="false">
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
        </header>
        
        <main>
            <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="https://c4.wallpaperflare.com/wallpaper/651/727/590/gaming-setup-steelseries-keyboards-headphones-mouse-pad-hd-wallpaper-preview.jpg"
                            class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="clearfix mb-3">
                                    <span class="float-end price-hp">5.76&dollar;</span>
                                </div>
                                <div class="text-wrapper">
                                    <h5 class="card-title">Gaming Keyboard And Mouse Combo Bundle Rainbow LED Game Equipment USB Wired PC Laptop T-WOLF TF200.</h5>
                                    </div>
                                    <div class="text-center my-4">
                                        <a href="info.php" class="btn btn-secondary">Check offer</a>
                                    </div>
                                    <div class="clearfix mb-1">
                                        <span class="float-start"><i class="far fa-question-circle"></i></span>
                                        <span class="float-end"><i class="fas fa-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 shadow-sm">
                                <img src="https://c0.wallpaperflare.com/preview/316/361/238/black-logitech-g-series-gaming-mouse-on-red-surface.jpg"
                                class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="clearfix mb-3">
                                        <span class="float-end price-hp">3.56-16.98&dollar;</span>
                                    </div>
                                    <div class="text-wrapper">
                                        <h5 class="card-title">[Wired Mouse] Black Logitech G-series Gaming Mouse</h5>
                                    </div>
                                    <div class="text-center d-grid gap-2 my-4">
                                        <a href="#" class="btn btn-secondary">Check offer</a>
                                    </div>
                                    <div class="clearfix mb-1">
                                        <span class="float-start"><i class="far fa-question-circle"></i></span>
                                        <span class="float-end"><i class="fas fa-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 shadow-sm">
                                <img src="https://wallpapercave.com/wp/wp7670500.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="clearfix mb-3">
                                        <span class="float-end price-hp">3.88&dollar;</span>
                                        <span class="float-end"><a href="#" class="small text-muted">Reviews</a></span>
                                    </div>
                                    <div class="text-wrapper">
                                        <h5 class="card-title">U disk USB Flash Drive 2GB 4GB 8GB 16GB 32GB 64GB.</h5>
                                    </div>
                                    <div class="text-center my-4">
                                        <a href="#" class="btn btn-secondary">Check offer</a>
                                    </div>
                                    <div class="clearfix mb-1">
                                        <span class="float-start"><i class="far fa-question-circle"></i></span>
                                        <span class="float-end"><i class="fas fa-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 shadow-sm">
                                <img src="charger.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="clearfix mb-3">
                                        <span class="float-end price-hp">8.93.-17.87&dollar;</span>
                                        <span class="float-end"><a class="text-muted small" href="#">Reviews</a></span>
                                    </div>
                                    <div class="text-wrapper">
                                        <h5 class="card-title">HP Laptop Charger Adapter Elitebook 210 G1 250 G3 250 G4 250 G5 255 G4 255 G5 255 G6 355 G2 455 G3</h5>
                                        </div>
                                        <div class="text-center my-4">
                                            <a href="#" class="btn btn-secondary">Check offer</a>
                                        </div>
                                        <div class="clearfix mb-1">
                                            <span class="float-start"><i class="far fa-question-circle"></i></span>
                                            <span class="float-end"><i class="fas fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>