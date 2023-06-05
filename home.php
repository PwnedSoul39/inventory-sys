<?php
require_once './resource/php/init.php';
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
        <script src="https://kit.fontawesome.com/9622798f89.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <link rel="stylesheet" type="text/css" href="./resource/css/home.css">
        <title>KriziaWare | Home</title>
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
                            <li class="nav-item"><a class="nav-link text-white link-secondary" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-white link-secondary" href="#products">Products</a></li>
                            <li class="nav-item"><a class="nav-link text-white link-secondary" href="#aboutus">About Us</a></li>
                            <li class="nav-item dropdown">
                                <button class="nav-link text-white dropdown-toggle link-secondary text-uppercase" data-bs-toggle="dropdown" aria-expanded="false">
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
        
        <main>
            <section class="section1" id="home">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./resource/img/keyboard.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Keyboard</h5>
                                <p class="text-white">Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./resource/img/motherb.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Motherboard</h5>
                                <p class="text-white">Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./resource/img/part.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Computer Parts</h5>
                                <p class="text-white">Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </section>

            <section class="section2" id="products">
                <div class="container">
                    <div class="row">
                    <h1 class="text-white featured-text" data-aos="fade-up" data-aos-duration="3000">Featured Products</h1>
                    <div class="col-md-4 centre">
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <a href="#">
                                <img class="object-fit-cover brdr" src="./resource/img/lt.jpg" alt=" " class="project-image" data-aos="fade-up" data-aos-duration="3000">
                            </a>
                        </div>
                        <a class="btn btn-submit" data-aos="fade-up" data-aos-duration="3000" type="submit" name="button" href="#">See more</a>
                    </div>
                    <div class="col-md-4 centre">
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <a href="#">
                                <img class="object-fit-cover brdr" src="./resource/img/desktop.png" alt=" " class="project-image" data-aos="fade-up" data-aos-duration="3000">
                            </a>
                        </div>
                        <a class="btn btn-submit" data-aos="fade-up" data-aos-duration="3000" type="submit" name="button" href="#">See more</a>
                    </div>
                    <div class="col-md-4 centre">
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <a href="#">
                                <img class="object-fit-cover brdr" src="./resource/img/mouse.png" alt=" " class="project-image" data-aos="fade-up" data-aos-duration="3000">
                            </a>
                        </div>
                        <a class="btn btn-submit" data-aos="fade-up" data-aos-duration="3000" type="submit" name="button" href="#">See more</a>
                    </div>
                    </div>
                </div>
            </section>

            <section class="section3" id="aboutus">
                <div class="container" data-aos="fade-up" data-aos-duration="3000">
                    <div class="row">
                        <h1 class="about text-white featured-text" data-aos="fade-up" data-aos-duration="3000">About Us</h1>
                        <div class="about-text">
                            <p class="text-white feature-txt" data-aos="fade-up" data-aos-duration="3000">
                                At Inventory Gadgets, we take great pride in offering our clients the newest <br>and most cutting-edge technological <br> solutions. We serve IT enthusiasts, professionals, and regular consumers alike with a wide selection of gadgets and equipment.<br> To guarantee that we only offer the most dependable, high-quality products from reputable <br> manufacturers, our inventory is meticulously chosen.
                                <br> <br>
                                We continually update our inventory to reflect the newest releases <br>and cutting-edge technologies in an effort to stay ahead of the curve. We are dedicated <br>to assisting our customers in locating the ideal technology to fulfill their demands <br> and improve their digital lifestyles. Our staff is informed and pleasant.
                            </p>
                        </div>
                        <div class="loc col-md-6" data-aos="fade-right" data-aos-duration="3000">
                            <i class="fa-solid fa-location-dot text-white"></i>
                            <span class="text-white">Lot 19 Block 1, St.Paul Village, Sumapang Matanda, Malolos Bulacan </span>
                        </div>
                        <div class="icons col-md-6" data-aos="fade-left" data-aos-duration="3000">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <div class="facebook">
                                        <i class="fa-brands fa-facebook"></i>
                                        <h4 class="icon">Facebook</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                        <h4 class="icon">Instagram</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="twitter">
                                        <i class="fa-brands fa-twitter"></i>
                                        <h4 class="icon">Twitter</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="row-fluid text-white py-3" style="background-color:#1c1c1c;">
            <div class="container d-flex justify-content-between">
                <div class="col">
                    <small>Copyright &copy; KriziaWare. <strong>All Rights Reserved 2023</strong></small>
                </div>
                <div class="col">
                    <small>Group 4: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup Jr, Emman Siva</small>
                </div>
            </div>
        </footer>
    <!-- Boostrap Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- Animations -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    </body>
</html>