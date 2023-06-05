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
        <link rel="stylesheet" type="text/css" href="./resource/css/account.css">
        <title>KriziaWare | Profile</title>
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
                            <li class="nav-item"><a class="nav-link text-white link-secondary" href="home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-white link-secondary" href="home.php#products">Products</a></li>
                            <li class="nav-item"><a class="nav-link text-white link-secondary" href="home.php#aboutus">About Us</a></li>
                            <li class="nav-item dropdown">
                                <button class="nav-link text-white link-secondary dropdown-toggle text-uppercase" data-bs-toggle="dropdown" aria-expanded="false">
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

        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="card border border-light p-5 shadow rounded" style="background-color: #1c1c1c;">
                        <div class="card-body">
                            <h3 class="h2 card-title text-center text-white">Account Information</h5>
                            <?php
                            echo '
                                <h5 class="fw-normal text-muted"><span class="text-white fw-bold">Username: </span>'.$_SESSION['user'].'</h3>
                                <h5 class="fw-normal text-muted"><span class="text-white fw-bold">Email Address: </span>'.$_SESSION['user_mail'].'</h3>
                                <h5 class="fw-normal text-muted"><span class="text-white fw-bold">Date Joined: </span>'.$_SESSION['user_join'].'</h5>
                            ';
                            echo UserType($_SESSION['user_level']);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <form class="border border-light p-5 shadow rounded" method="post" style="background-color: #1c1c1c;">
                        <?php newPassMsg(); ?>
                        <h3 class="card-title text-center text-white">Change Password</h3>
                        <div class="mt-4 mb-4">
                            <label class="form-label" for="edit_input">New Password</label>
                            <input class="form-control" type="password" name="pass_editbox" id="edit_input" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="confirm_input">Confirm New Password</label>
                            <input class="form-control" type="password" name="confirm_pass_editbox" id="confirm_input" required>
                        </div>
                        <div class="text-center">
                            <input class="btn btn-success rounded-pill" type="submit" name="edit_btn" value="Update Password">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="row-fluid fixed-bottom text-white py-3" style="background-color:#1c1c1c;">
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
    </body>
</html>