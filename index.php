<?php
require_once 'resource/php/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./resource/css/index.css">
  <title>KriziaWare Login</title>
</head>
<body>
  <!--
  NOTE: Pwede nyong baguhin tong mga to tinest ko lng mga webpage
-->
<header class="row-fluid">
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <span class="navbar-brand mr-auto">KriziaWare</span>
  <ul class="navbar-nav">

</ul>
</nav> -->
</header>
<section class="login">
  <main class="container pt-3">
    <div class="row p-3">
      <div class="col-md-4 mx-auto card">
        <?php
        echo '<div class="pt-4">';
        loginMsg();
        echo '</div>';
        ?>
        <h1 class="log text-center">Login</h1>
        <form class="form login-form" method="post">
          <div class="form-group grpform">
            <label for="log_input_mail">Email/Username</label>
            <input class="form-control" type="text" name="email_logbox" id="log_input_mail">
          </div>
          <div class="form-group pb-2">
            <label for="log_input_pass">Password</label>
            <input class="form-control" type="password" name="pass_logbox" id="log_input_pass">
          </div>
          <div class="form-group text-center">
            <button class="btn btn-clue rounded-pill" type="submit" name="log_btn">Login</button>
            <div class="text-center mt-5">
              <small class="reg">Don't have an account?</small> <br>
              <a href="./register.php">Register Now</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
</section>

<footer class="row-fluid bg-dark text-white fixed-bottom">
  <div class="container d-flex justify-content-between">
    <div class="col">
      <small>Copyright &copy;Westview University</small> <br>
      <small>All Rights Reserved 2023</small>
    </div>
    <div class="col">
      <small>Group 4: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup Jr, Emman Siva.</small>
    </div>
  </div>
</footer>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
