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
    <link rel="stylesheet" type="text/css"  href="./resource/css/pc.css">
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
  </head>
  <body>

    <!-- IBAHIN NIYO NA LANG 'TO PLES OR AYUSIN IF DI NIYO BET HAHAHAHAHAHA -->

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

    <!-- front page -->
    <section id="section1">
      <div class="container-fluid">
        <h1 class="text-center text-light">Welcome to PC Section</h1>
        <p class="text-center text-light">where the realm of limitless possibilities awaits, empowering you with unrivaled power, precision, and boundless opportunities for creativity and gaming.</p>
      </div>
    </section>
    <!-- end of front page -->

    <!-- products section -->
    <section id="section2">
      <div class="container-fluid">
        <h1 class="text-light text-center pt-5">FEATURED PC PRODUCTS</h1>
        <div class="row">
          <div class="col-4 text-center">
            <div class="card mt-5 border-0">
              <img src="./resource/img/desktop1.jpg">
            </div>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <p class="text-light">KriziaWare QuantumForce Phoenix<br>$2,999</p>
            <a href="./pc1.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
          </div>
          <div class="col-4 text-center">
            <div class="card mt-5 border-0">
              <img src="./resource/img/system-unit.jpg">
            </div>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <p class="text-light">KriziaWare Vanguard R15<br>$1,550</p>
            <a href="./pc2.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
          </div>
          <div class="col-4 text-center">
            <div class="card mt-5 border-0">
              <img src="./resource/img/monitor.png">
            </div>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <p class="text-light">KriziaWare AuroraTech Gaming Monitor<br>$1,100</p>
            <a href="./pc3.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
          </div>
        </div>

        <div class="row">
          <div class="col-4 text-center">
            <div class="card border-0">
              <img src="./resource/img/system-unit2.jpg">
            </div>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <p class="text-light">KriziaWare Nova V2<br>$2,430</p>
            <a href="./pc4.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
          </div>
          <div class="col-4 text-center">
            <div class="card border-0">
              <img src="./resource/img/monitor2.jpg">
            </div>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <p class="text-light">KriziaWare Seraph<br>$780</p>
            <a href="./pc5.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
          </div>
          <div class="col-4 text-center">
            <div class="card border-0">
              <img src="./resource/img/system-unit1.png">
            </div>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <p class="text-light">KriziaWare V5 J16<br>$990</p>
            <a href="./pc6.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
          </div>
        </div>

        <div class="row">
          <div class="col-4 text-center">
            <div class="card border-0">
              <img src="./resource/img/monitor1.jpg">
            </div>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <p class="text-light">KriziaWare Xtreme 11<br>$1,000</p>
            <a href="./pc7.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
          </div>
          <div class="col-4 text-center">
            <div class="card border-0">
              <img src="./resource/img/system-unit3.png">
            </div>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <span><i class='bx bxs-star'></i></span>
            <p class="text-light">KriziaWare MegaByte Nova<br>$1,895</p>
            <a href="./pc8.php"><button class="btn btn-submit" type="submit" name="button">View</button></a>
          </div>
        </div>
      </div>
    </section>
    <!-- end of products section -->

    <!-- section 3 -->
    <section id="section3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 text-center">
            <div class="card">
              <i class="fa-solid fa-computer text-light"></i>
              <h3 class="text-light pt-3">Best PC</h3>
              <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-4 text-center">
            <div class="card">
              <i class='bx bx-check-shield text-light'></i>
              <h3 class="text-light pt-3">Best Warranty</h3>
              <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-4 text-center">
            <div class="card">
              <i class='bx bx-like text-light'></i>
              <h3 class="text-light pt-3">Trusted By Companies</h3>
              <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of section 3 -->

    <!-- section 4 -->
    <section id="section4">
      <video class="bg-vid" autoplay loop muted plays-inline>
        <source src="./resource/img/bg-vid1.mp4" type="video/mp4">
      </video>
      <div class="overlay">
        <div class="card">
          <h2 class="text-light">Experience Unparalleled Performance with our PCs</h2>
          <p class="text-light">Introducing our innovative computer, redefining performance with cutting-edge technology, seamless multitasking, and stunning visuals for professionals and creative enthusiasts.</p>
        </div>
      </div>
    </section>
    <!-- end of section 4 -->

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
