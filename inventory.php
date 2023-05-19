<?php
    require_once 'resource/php/init.php';
    $view = new view();
    session_start();
    logIn();
    logPageCheck();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="./resource/css/inventory.css">
        <title>KriziaWare Inventory</title>
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
                        <a class="nav-link" href="./dashboard.php">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./product.php">
                            <i class="fa-solid fa-toolbox"></i> Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./order.php">
                            <i class="fa-solid fa-truck"></i> Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-clipboard-list"></i> Inventory
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
                            <a class="dropdown-item text-muted" href="./logout.php">Log-out</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Card ICONs -->
        <div class="container mt-5">
            <div class="card-deck text-center mt-3">
                <div class="card bg-info">
                    <div class="card-body">
                        <h5 class="card-title h1">
                            <?php
                                 
                            ?>
                        </h5>
                        <p class="card-text">Users</p>
                    </div>
                    <img class="dash-img mx-auto mb-4" src="./resource/img/user.png" alt="SADGE">
                </div>
                <div class="card bg-success">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            
                            ?>
                        </h5>
                        <p class="card-text">Items</p>
                    </div>
                    <img class="dash-img mx-auto mb-4" src="./resource/img/item.png" alt="SADGE">
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                 
                            ?>
                        </h5>
                        <p class="card-text">Orders</p>
                    </div>
                    <img class="dash-img mx-auto mb-4" src="./resource/img/order.png" alt="SADGE">
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <button class="btn btn-primary rounded-pill mx-auto my-4" type="button" data-toggle="modal" data-target="#additem_form">Add Item</button>
            </div>
            <div class="modal fade" id="additem_form" data-backdrop="static" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Item Form</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="form-group">
                                    <label for="">Item Name</label>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" type="text" name="" id="">
                                        <option value="" disabled selected>Choose Item Type</option>
                                        <option value="Keyboard">Keyboard</option>
                                        <option value="Mouse">Mouse</option>
                                        <option value="Controller">Controller</option>
                                        <option value="HDD">HDD</option>
                                        <option value="SSD">SSD</option>
                                        <option value="RAM">RAM</option>
                                        <option value="Laptop">Laptop</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Item Brand</label>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Item Price</label>
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Item Quantity</label>
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary rounded-pill" type="submit" name="a_item">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid w-75 mt-5" style="overflow: hidden;">
            <div class="row" style="height:47.4vh; overflow-y: scroll">
                <?php
                    $view->viewInventory();
                ?>
            </div>
        </div>
    </body>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>