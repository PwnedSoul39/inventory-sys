<?php
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../resource/css/accessory.css">
        <title>Accessory</title>
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
                        <a class="nav-link" href="./accessory.php">
                            <i class="fa-solid fa-table-list"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./keyboard.php">
                        <i class="fa-solid fa-keyboard"></i>Keyboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./cable.php">
                        <i class="fa-sharp fa-light fa-ethernet"></i>Cables
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./lptp.php">
                        <i class="fa-solid fa-battery-full"></i>Charger
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./mice.php">
                        <i class="fa-solid fa-computer-mouse"></i>Mouse
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./usb.php">
                        <i class="fa-solid fa-usb-drive"></i>USB
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-transparent dropdown-toggle text-muted" type="button" data-toggle="dropdown" aria-expanded="false">
                            <?php
                                echo '<i class="fa-solid fa-user"></i>';
                            ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right bg-dark mt-1">
                            <a class="dropdown-item text-muted" href="./account.php">View Account</a>
                            <a class="dropdown-item text-muted" href="#">Log-out</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="section">
        <div class="container">
		<div class="jumbotron d-flex flex-column justify-content-center align-items-center text-white text-center text-md-left" id="banner">
			<h1>Welcome to The Accessory Page</h1>
			<h3>Pick in one of the Following Categories and Choose what your heart desires.</h3>
		</div>
        <div class="row mt-5 d-none d-md-block">
		<div class="col-md-6 mx-auto">
			<div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
				<ol class="carousel-indicators">
					<li class="active" data-target="#carouselExampleCaptions" data-slide-t0="0"></li>
					<li data-target="#carouselExampleCaptions" data-slide-t0="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-t0="2"></li>
					<li data-target="#carouselExampleCaptions" data-slide-t0="3"></li>
					<li data-target="#carouselExampleCaptions" data-slide-t0="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
                        <a href="./keyboard.php">
						<img class="d-block w-100" src="https://wallpapers.com/images/featured/lpsw7sus4web2y8i.jpg" alt=". . .">
						<div class="carousel-caption d-none d-md-block"></a>
							<h5>KEYBOARDS</h5>

						</div>
					</div>
					<div class="carousel-item">
                    <a href="./lptp.php">
						<img class="d-block w-100" src="https://thumbs.dreamstime.com/b/asus-republic-gamers-laptop-charger-manila-philippines-ph-july-223028526.jpg" alt=". . .">
						<div class="carousel-caption d-none d-md-block"></a>
							<h5>LAPTOP CHARGER</h5>
						
						</div>
					</div>
					<div class="carousel-item">
                    <a href="./usb.php">
						<img class="d-block w-100" src="https://thumbs.dreamstime.com/b/usb-key-black-scan-disk-isoalted-white-close-up-open-usb-key-scan-disk-close-up-isolated-white-113168270.jpg" alt=". . .">
						<div class="carousel-caption d-none d-md-block color-black"></a>
							<h5>USB</h5>
						
						</div>
					</div>
					<div class="carousel-item">
                    <a href="./mice.php">
						<img class="d-block w-100" src="https://thumbs.dreamstime.com/b/wired-computer-mouse-light-blue-background-top-view-space-text-166645922.jpg" alt=". . .">
						<div class="carousel-caption d-none d-md-block" ></a>
							<h5>LAPTOP MICE</h5>
							
						</div>
					</div>
					<div class="carousel-item">
                    <a href="./cable.php">
						<img class="d-block w-100" src="https://thumbs.dreamstime.com/b/ethernet-cable-plug-3288198.jpg" alt="5th sample image">
                        <div class="carousel-caption d-none d-md-block" >
                        <h5>CABLES</h5>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</section>
    </body>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>