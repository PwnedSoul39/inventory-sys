<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="./resource/css/register.css">
        <title>KriziaWare Register</title>
    </head>
    <body>
        <!--
            NOTE: Pwede nyong baguhin tong mga to tinest ko lng mga webpage
         -->
        <header class="row-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <span class="navbar-brand mr-auto">KriziaWare</span>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Login</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="row-fluid mt-5">
            <div class="card container p-3">
                <div class="text-center">
                    <h1>Register</h1>
                </div>
                <form class="form" method="post">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="" placeholder="Enter your email">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">First Name</label>
                            <input class="form-control" type="text" name="" placeholder="Enter your first name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Last Name</label>
                            <input class="form-control" type="text" name="" placeholder="Enter your last name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input class="form-control" type="password" name="" placeholder="Enter your password">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary rounded-pill" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </main>
        <footer class="row-fluid bg-dark text-muted fixed-bottom">
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