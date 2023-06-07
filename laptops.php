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
    <link rel = "stylesheet" href = "laptops.css">
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
    <!-- Landing Page -->
    <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
      <div class = "container h-100 d-flex align-items-center carousel-inner">
          <div class = "text-center carousel-item active">
              <h2 class = "text-capitalize text-white">Ready For a New Era?</h2>
              <h1 class = "text-uppercase py-2 fw-bold text-white">New and Improved</h1>
              <a href = "#" class = "btn mt-3 text-white text-uppercase">shop now</a>
          </div>
          <div class = "text-center carousel-item">
              <h2 class = "text-capitalize text-white">Get Some Deals Now</h2>
              <h1 class = "text-uppercase py-2 fw-bold text-white">new season</h1>
              <a href = "#" class = "btn mt-3 text-white text-uppercase">buy now</a>
          </div>
      </div>

      <button class = "carousel-control-prev" type = "button" data-bs-target="#header" data-bs-slide = "prev">
          <span class = "carousel-control-prev-icon"></span>
      </button>
      <button class = "carousel-control-next" type = "button" data-bs-target="#header" data-bs-slide = "next">
          <span class = "carousel-control-next-icon"></span>
      </button>
  </header>
    <!-- Landing Page -->


  <!-- Products -->
  <section id = "collection" class = "py-5">
      <div class = "below">
          <div class = "title text-center">
              <h2 class = "position-relative text-light d-inline-block">Check These Out!</h2>
          </div>

          <div class = "row g-0">
   <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
    <button type = "button" class = "btn m-2 text-light active-filter-btn" data-filter = "*">All</button>
    <button type = "button" class = "btn m-2 text-light" data-filter = ".best">Best Sellers</button>
    <button type = "button" class = "btn m-2 text-light" data-filter = ".featured">Featured</button>
    <button type = "button" class = "btn m-2 text-light" data-filter = ".new">New Arrival</button>
  </div>

  <div class = "collection-list mt-2 row gx-0 gy-3">
     <div class = "col-md-6 col-lg-4 col-xl-4 p-2 best">
       <div class = "collection-img position-relative">
         <a href="laptop1.php"><img src = "img/laptop1.png" class = "w-100"></a>
           <span class = "position-absolute bg-danger text-white d-flex align-items-center justify-content-center">sale</span>
         </div>
         <div class = "text-center">
           <div class = "rating mt-3">
             <span class = "text-danger"><i class = "fas fa-star"></i></span>
             <span class = "text-danger"><i class = "fas fa-star"></i></span>
             <span class = "text-danger"><i class = "fas fa-star"></i></span>
             <span class = "text-danger"><i class = "fas fa-star"></i></span>
             <span class = "text-danger"><i class = "fas fa-star"></i></span>
           </div>
             <p class = "text-capitalize text-light my-1">KriziaWare V2 Boosted R2 Gaming Laptop</p>
             <span class="text-capitalize fw-bold text-danger my-1">-31%</span>
              <span class = "fw-bold text-light"> $1,999.98</span>
         </div>
      </div>

      <div class = "col-md-6 col-lg-4 col-xl-4 p-2">
        <div class = "collection-img position-relative">
          <a href="laptop2.php"><img src = "img/laptop2.png" class = "w-100"></a>
          </div>
          <div class = "text-center">
            <div class = "rating mt-3">
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
            </div>
              <p class = "text-capitalize text-light my-1">KriziaWare Gigabyte XE4</p>
               <span class = "fw-bold text-light"> $2350</span>
          </div>
        </div>

      <div class = "col-md-6 col-lg-4 col-xl-4 p-2 best">
        <div class = "collection-img position-relative">
        <a href="laptop3.php"><img src = "img/laptop3.png" class = "w-100"></a>
            <span class = "position-absolute bg-danger text-white d-flex align-items-center justify-content-center">sale</span>
          </div>
          <div class = "text-center">
            <div class = "rating mt-3">
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
            </div>
              <p class = "text-capitalize text-light my-1">KriziaWare Zephyrus R5</p>
              <span class="text-capitalize fw-bold text-danger my-1">-$550</span>
               <span class = "fw-bold text-light">$1,100</span>
          </div>
          </div>

      <div class = "col-md-6 col-lg-4 col-xl-4 p-2 featured">
        <div class = "collection-img position-relative">
          <a href="laptop4.php"><img src = "img/laptop4.png" class = "w-100"></a>
            <span class = "position-absolute bg-danger text-white d-flex align-items-center justify-content-center">sale</span>
          </div>
          <div class = "text-center">
            <div class = "rating mt-3">
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
            </div>
              <p class = "text-capitalize text-light my-1">KriziaWare Velociraptor R5</p>
              <span class="text-capitalize fw-bold text-danger my-1">-$300</span>
               <span class = "fw-bold text-light"> $1,200</span>
          </div>
          </div>

      <div class = "col-md-6 col-lg-4 col-xl-4 p-2 new">
        <div class = "collection-img position-relative">
          <a href="laptop5.php"><img src = "img/laptop5.png" class = "w-100"></a>
          </div>
          <div class = "text-center">
            <div class = "rating mt-3">
              <span class = "fw-bold text-light"> No Reviews Yet</span>
            </div>
              <p class = "text-capitalize text-light my-1">KriziaWare NP6271J (CLEVO NP70RNJS) GAMING LAPTOP</p>
               <span class = "fw-bold text-light"> $1,119.00</span>
          </div>
          </div>

      <div class = "col-md-6 col-lg-4 col-xl-4 p-2 featured">
        <div class = "collection-img position-relative">
          <a href="laptop6.php"><img src = "img/laptop6.png" class = "w-100"></a>
            <span class = "position-absolute bg-danger text-white d-flex align-items-center justify-content-center">sale</span>
          </div>
          <div class = "text-center">
            <div class = "rating mt-3">
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
            </div>
              <p class = "text-capitalize text-light my-1">KriziaDell G16 16</p>
              <span class="text-capitalize fw-bold text-danger my-1">-35%</span>
               <span class = "fw-bold text-light"> $849.99</span>
          </div>
          </div>

      <div class = "col-md-6 col-lg-4 col-xl-4 p-2">
        <div class = "collection-img position-relative">
          <a href="laptop7.php"><img src = "img/laptop7.png" class = "w-100"></a>
          </div>
          <div class = "text-center">
            <div class = "rating mt-3">
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
            </div>
              <p class = "text-capitalize text-light my-1">KriziaWare Razer sword 4 QHD+</p>
               <span class = "fw-bold text-light"> $3,599.99</span>
          </div>
          </div>

      <div class = "col-md-6 col-lg-4 col-xl-4 p-2 best">
        <div class = "collection-img position-relative">
          <a href="laptop8.php"><img src = "img/laptop8.png" class = "w-100"></a>
          </div>
          <div class = "text-center">
            <div class = "rating mt-3">
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
              <span class = "text-danger"><i class = "fas fa-star"></i></span>
            </div>
              <p class = "text-capitalize text-light my-1">KriziaWare Ford Thin 9SEXR-838</p>
               <span class = "fw-bold text-light"> $999</span>
          </div>
          </div>
    <!-- Products -->
    <!-- Advertisement -->
    <section id = "offers" class = "py-5">
          <div class = "container">
              <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                  <div class = "offers-content">
                      <span class = "text-white">Discount Up To 40%</span>
                      <h2 class = "mt-2 mb-4 text-white">Grand Sale Offer!</h2>
                      <a href = "#" class = "btn text-white">Go now!</a>
                  </div>
              </div>
          </div>
      </section>
    <!-- Advertisement -->


    <!-- footer -->
    <footer class="row-fluid  text-white">
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
<script src = "js/laptops.js"></script>
  </body>
</html>
