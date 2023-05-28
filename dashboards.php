<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Inventory System</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="./resource/css/dashboards.css">
  <script src="https://kit.fontawesome.com/9622798f89.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
</head>
<body>
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

    <section class="section1" id="home">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./resource/img/keyboard.jpg" class="d-block w-100" alt="..."
            >
            <!-- <div class=""> -->
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <!-- </div> -->
          </div>
          <div class="carousel-item">
            <img src="./resource/img/motherb.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./resource/img/part.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

  </section>

  <section class="section2" id="products">
    <div class="container">
      <div class="row">
      <h1 class="text-white">Featured Products</h1>
        <div class="col-md-4 col-12 mb-5">
          <a href ="resource/restobar/index.html">
            <img src="./resource/img/lt.jpg" alt=" " class="project-image">
          </a>
        </div>
        <div class="col-md-4 mb-5">
          <a href ="resource/restobar/index.html">
            <img src="./resource/img/desktop.png" alt=" " class="project-image">
          </a>
        </div>

      </div>

    </div>


  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
