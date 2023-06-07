<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KriziaWare</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- custom css -->
    <link rel = "stylesheet" href = "products.css">
</head>
<body>


    <!-- Navbar -->
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

    <!-- Navbar -->
    <!-- Product -->
    <section class="container main my-5 pt-5">
      <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
          <img class="img-fluid w-100 pb-1" src="img/laptop1.png" alt="">
          <h6 class="text-light">Related Products:</h6>
          <div class="small-img">
            <div class="small-img-col">
              <a href="laptop4.php"><img src = "img/laptop4.png" width="100%" class = "small-img" alt=""></a>
            </div>
            <div class="small-img-col">
              <a href="laptop6.php"><img src = "img/laptop6.png" width="100%" class = "small-img" alt=""></a>
            </div>
            <div class="small-img-col">
              <a href="laptop7.php"><img src = "img/laptop7.png" width="100%" class = "small-img" alt=""></a>
            </div>
          </div>
        </div>

    <div class="col-lg-6 col-md-12 col-12">
      <h3 class="text-light">KriziaWare V2 Boosted R2 Gaming Laptop</h3>
      <div class = "rating">
        <span class = "text-danger"><i class = "fas fa-star"></i></span>
        <span class = "text-danger"><i class = "fas fa-star"></i></span>
        <span class = "text-danger"><i class = "fas fa-star"></i></span>
        <span class = "text-danger"><i class = "fas fa-star"></i></span>
        <span class = "text-danger"><i class = "fas fa-star"></i></span>
      </div>
      <div class="number">
      <span class="text-capitalize fw-bold text-danger my-1">-31%</span>
       <span class = "fw-bold text-light"> $1,999.98</span>
     </div>
     <div class="buttons">
       <button class="buy-btn">Buy Now</button>
       <button class="buy-btn">Add to Cart</button>
     </div>
     <h5 class="text-light mt-2 mb-2">Product Details</h5>
     <p class="text-light">The sleek and powerful KriziaWare V2 Boosted R2 Gaming Laptop features a slim aluminum chassis, providing both durability and style. Its high-resolution display brings visuals to life, while the latest Intel Core i7 processor ensures smooth multitasking and fast performance. With ample storage and a backlit keyboard, it's perfect for productivity and entertainment on the go.</p>
     <span class="text-light">
       Processor: Intel Core i7 11000HS<br>
       GPU: NVIDIA GeForce RTX 3060<br>
       RAM: 16GB DDR4<br>
       Storage: 1TB NVMe SSD<br>
       Display: 14-inch QHD (2560 x 1440) 120Hz<br>
     </span>
    </div>
  </div>
    </section>

    <!-- footer -->
    <footer class="row-fluid text-white">
                <div class="container d-flex justify-content-between">
                    <div class="col">
                        <small>All Rights Reserved 2023</small>
                    </div>
                    <div class="col">
                        <small>Group 4: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup Jr, Emman Siva.</small>
                    </div>
                </div>
            </footer>
    <!-- footer -->

    <script src = "js/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src = "js/index.js"></script>
      </body>
    </html>
