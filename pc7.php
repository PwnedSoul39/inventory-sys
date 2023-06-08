<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>

    <title>KriziaWare</title>

    <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="./resource/css/pc1.css">
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
  </head>
  <body>

    <!-- start of navbar -->
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
                            //echo '
                            //    <i class="fa-solid fa-user"></i> '.$_SESSION['user'].'
                            //';
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
    <!-- end of navbar -->

    <!-- section 1 -->
    <section id="section1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <img class="img" src="./resource/img/monitor1.jpg" alt="">

            <div class="row prod-img">
              <h4 class="text-light pb-3">Related Products</h4>
              <div class="col">
                <a href="./pc3.php"><img src="./resource/img/monitor.png" alt=""></a>
              </div>
              <div class="col">
                <a href="./pc4.php"><img src="./resource/img/system-unit2.jpg" alt=""></a>
              </div>
              <div class="col">
                <a href="./pc5.php"><img src="./resource/img/monitor2.jpg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h1 class="text-light pt-2">KriziaWare Xtreme 11</h1>
            <p class="text-light specs">24 inches | 1920 x 1080 pixels | 60Hz</p>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <h3 class="text-light">$1,000</h3>

            <div class="text-light">
              <h4 class="text-light pt-2">SPECIFICATIONS</h4>
              <h5>Display Size: 24 inches</h5>
              <h5>Resolution: 1920 x 1080 pixels (Full HD)</h5>
              <h5>Response Time: 5ms</h5>
              <h5>Refresh Rate: 60Hz</h5>
              <h5>Panel Type: IPS</h5>
            </div>

            <p class="text-light pt-3">Tax included. Shipping calculated at checkout.</p>
            <hr class="text-light">
            <i class='bx bxs-circle'></i>
            <span class="text-light">Available<br></span>
            <button class="btn btn-submit text-light" type="submit" name="button">Add to Cart</button>
            <button class="btn btn-submit text-light" type="submit" name="button">Buy Now</button>
          </div>
        </div>
      </div>
    </section>
    <!-- end of section 1 -->

    <!-- footer -->
    <footer class="row-fluid bg-dark text-muted">
      <div class="container d-flex justify-content-between">
        <div class="col text-light pt-3">
          <small>Copyright &copy;Westview University</small> <br>
          <small>All Rights Reserved 2023</small>
        </div>
        <div class="col text-light pt-3">
          <small>Group 4: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup Jr, Emman Siva.</small>
        </div>
      </div>
    </footer>
    <!-- end of footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>
