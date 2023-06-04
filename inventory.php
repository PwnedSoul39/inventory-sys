<?php
require_once './resource/php/init.php';
session_start();
logIn();
logLockUser();

$view = new view();
$db = new config();
$con = $db->con();

$query = "SELECT * FROM `tbl_inventory`";
$count = $con->prepare($query);
$count->execute();
$rows = $count->rowCount();

$items = 5;
$pages = ceil($rows/$items);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$start = ($page-1) * $items;
$sql = "SELECT * FROM `tbl_inventory` LIMIT $start, $items";
$data = $con->prepare($sql);
$data->execute();
$result = $data->fetchAll(PDO::FETCH_ASSOC);
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
        <link rel="stylesheet" type="text/css" href="./resource/css/inventory.css">
        <title>Dashboard | Inventory</title>
    </head>
    <body data-bs-theme="dark">
        <header>
            <div class="container-fluid px-0">
                <nav class="nav-dash navbar navbar-expand-lg">
                    <a class="navbar-brand ms-3" href="home.php"><span>KriziaWare</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navList" aria-controls="navList" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navList">
                        <ul class="navbar-nav ms-auto me-3"> 
                            <li class="nav-item"><a class="nav-link text-white" href="dashboard.php">Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="user.php">User</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="inventory.php">Inventory</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="order.php">Order</a></li>
                            <li class="nav-item dropdown">
                                <button class="nav-link text-white dropdown-toggle text-uppercase" data-bs-toggle="dropdown" aria-expanded="false">
                                    Account
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end bg-dark">
                                    <li class="dropdown-item text-center disabled"><?php echo $_SESSION['user']; ?></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-white" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>     
        <?php
        ItemMsg();
        AdminMsg();
        ?>
        <div class="container-fluid mt-5">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center fw-bold">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($result as $data) {

                        echo '
                            <tr class="text-center">
                                <td>'.$data['i_id'].'</td>
                                <td>'.$data['i_name'].'</td>
                                <td>'.$data['i_type'].'</td>
                                <td>'.$data['i_brand'].'</td>
                                <td>'.$data['i_price'].'</td>
                                <td>'.$data['i_qty'].'</td>
                        ';
                        echo ItemStat($data['i_status']);
                        echo ItemEdit($data['i_status'],$data['i_id']);
                        echo '</tr>';
                    }
                    ?>
                    <tr class="text-center">
                        <form method="post">
                            <td class="fw-bold">#</td>
                            <td><input class="form-control" type="text" name="iname_box" placeholder="Enter Item Name" required></td>
                            <td>
                                <select class="form-select" name="itype_box" required>
                                    <option value="" disabled selected>Choose a type</option>
                                    <option value="Keyboard">Keyboard</option>
                                    <option value="Mouse">Mouse</option>
                                    <option value="Controller">Controller</option>
                                    <option value="HDD">HDD</option>
                                    <option value="SSD">SSD</option>
                                    <option value="RAM">RAM</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="Desktop">Desktop</option>
                                    <option value="Accessories">Accessories</option>
                                </select>
                            </td>
                            <td><input class="form-control" type="text" name="ibrand_box" placeholder="Enter Item Brand" required></td>
                            <td><input class="form-control" type="number" name="iprice_box" placeholder="Enter Item Price" required></td>
                            <td><input class="form-control" type="number" name="iqty_box" placeholder="Enter Item Quantity" required></td>
                            <td>
                                <select class="form-select" name="istatus_box" required>
                                    <option value="" disabled selected>Choose a status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                    <option value="3">Discounted</option>
                                </select>
                            </td>
                            <td>
                                <input class="btn btn-primary" type="submit" value="Add Item" name="item_add">
                                <input class="btn btn-secondary" type="reset" value="Clear Item">
                            </td>
                        </form>
                    </tr>
                </tbody>
            </table>
            <?php
            echo '
                <small class="text-muted">Page '.$page.' of '.$pages.'</small>
                <nav class="d-flex justify-content-center">
                    <ul class="pagination">
            ';
            echo PrevPage($page);

            for ($i = 1; $i <= $pages; $i++) {
                if ($i == $page) {
                    echo '<li class="page-item"><a class="page-link bg-secondary text-white" href="?page='.$i.'">'.$i.'</a></li>';
                } else {
                    echo '<li class="page-item"><a class="page-link text-white" href="?page='.$i.'">'.$i.'</a></li>';
                }
            }
            
            echo NextPage($page, $pages);
            echo '
                    </ul>
                </nav>
            ';
            ?>
        </div>

    <!-- Boostrap Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>
</html>