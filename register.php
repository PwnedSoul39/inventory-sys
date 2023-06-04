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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./resource/css/register.css">
    <title>KriziaWare Register</title>
    </head>
    
    <body>
    <header class="row-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="title navbar-brand mr-auto" href="./home.php">KriziaWare</a>
    </nav>
    </header>

    <main class="container-fluid mt-5">
    <div class="card container p-3">
        <?php
        insertAccMsg();
        ?>
        <div class="text-center text-white">
        <h1>Register</h1>
        </div>
        <form class="form" method="post">
        <div class="form-group text-white">
            <label for="email_input">Email <span class="text-danger">*</span></label>
            <input class="form-control" type="email" name="email_box" id="email_input" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 text-white">
            <label for="fname_input">First Name <span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="fname_box" id="fname_input" required>
            </div>
            <div class="form-group col-md-6 text-white">
            <label for="lname_input">Last Name <span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="lname_box" id="lname_input" required>
            </div>
        </div>
        <div class="form-group text-white">
            <label for="uname_input">
            Username
            <small class="text-muted">
                (must be between 4-30 characters)
                <span class="text-danger">*</span>
            </small>
            </label>
            <input class="form-control" type="text" name="uname_box" id="uname_input" required>
        </div>
        <div class="form-group text-white">
            <label for="pass_input">
            Password
            <small class="text-muted">
                (must be at least 8-16 characters)
                <span class="text-danger">*</span>
            </small>
            </label>
            <input class="form-control" type="password" name="pass_box" id="pass_input" required>
        </div>
        <div class="form-group pt-3">
            <select class="custom-select" name="type_choice" required>
            <option value="" disabled selected>Choose your account type</option>
            <option value="0">User</option>
            <option value="1">Administrator</option>
            </select>
        </div>
        <div class="text-center">
            <button class="btn rounded-pill mt-3 text-white" type="submit" name="reg_btn">Submit</button>
            <div class="text-center mt-5">
            <small class="text-muted">Already have an account?</small> <br>
            <a class="log" href="./index.php">Login Now</a>
            </div>
        </div>
        </form>
    </div>
    </main>

    <footer class="row-fluid text-muted fixed-bottom">
    <div class="container d-flex justify-content-between">
        <div class="col">
        <small>Copyright &copy;KriziaWare</small> <br>
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
