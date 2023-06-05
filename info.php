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
        <div class="container">
            <div class="wrapper mt-5">
                <div class="row">
                    <div class="col-6 col-sm-4">
                        <img src="https://c4.wallpaperflare.com/wallpaper/651/727/590/gaming-setup-steelseries-keyboards-headphones-mouse-pad-hd-wallpaper-preview.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-6 col-sm-8">
                        <div class="item-desc">
                            <h3>Gaming Keyboard And Mouse Combo Bundle Rainbow LED Game Equipment USB Wired PC Laptop T-WOLF TF200.</h3>
                                <div class="likes-wrapper">
                                    <div class="stars">
                                        <div class="starla">
                                            <i class="fa-solid fa-star" style="color: #ffd152;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd152;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd152;"></i>
                                            <i class="fa-solid fa-star" style="color: #ffd152;"></i>
                                            <i class="fa-regular fa-star" style="color: #ffd333;"></i>
                                        </div>
                                        <p class="ratings">458 Ratings</p>
                                    </div>
                                    <div class="heart">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="item-desc-2">
                                <h3>₱ 340</h3>
                                <span>₱ 240</span>
                            </div>
                            <hr />
                            <div class="quantity">
                                <p class="title-quan">Quantity</p>
                                <button type="button" class="btn btn-add btn-primary"><i class="fa-solid fa-plus"></i></button>
                                <h4 class="number">1</h4>
                                <button type="button" class="btn btn-minus btn-primary"><i
                                    class="fa-solid fa-minus"></i></button>
                                </div>
                            <div class="buttons">
                                <div class="button-left">
                                    <form class="mb-2" action="" method="">
                                        <input class="btn btn-cart mr-5 btn-secondary mx-auto text-light" name="" style="font-size: .875rem;" type="submit" value="Add to Cart">
                                    </form>
                                </div>
                                <div>
                                    <form class="mb-2" action="" method="">
                                        <input class="btn btn-buy btn-danger mx-auto text-light" name="" style="font-size: .875rem;" type="submit" value="Buy Now">
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>