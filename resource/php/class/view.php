<?php
    class view extends config {

        public function viewUser() {
            // DB Connect
            $con = $this->con();

            // How many items per page
            $items = 5;
            
            // Page Counter
            $query = "SELECT * FROM `tbl_user`";
            $counter = $con->prepare($query);
            $counter->execute();
            $num_rows = $counter->rowCount();

            // Resulting Data
            $pages = ceil($num_rows/$items);

            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }


            $start_limit = ($page-1) * $items;
            $sql = "SELECT * FROM `tbl_user` LIMIT $start_limit, $items";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            echo '
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>Date Joined</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
            ';

            foreach ($result as $data) {
                echo '
                        <tr>
                            <td class="text-center font-weight-bold"> U-'.$data['u_id'].'</td>
                            <td>'.$data['u_uname'].'</td>
                            <td>'.$data['u_lname'].'</td>
                            <td>'.$data['u_fname'].'</td>
                            <td>'.$data['u_email'].'</td>
                            <td class="text-center">'.$data['u_date_joined'].'</td>
                            <td class="text-center">
                    ';
                    if ( $data['u_uname'] == $_SESSION['user']) {
                        echo '
                            <a class="btn btn-primary disabled" href="#">
                                <i class="fa-solid fa-hourglass-start"></i> Currently using this account
                            </a>
                        ';
                    } else {
                        echo '<a class="btn btn-primary" href="user.php?update='.$data['u_id'].'">';
                                if ($data['u_type'] == 1 ) {
                                    echo '<i class="fa-solid fa-user-pen"></i> Edit to User';
                                } else {
                                    echo '<i class="fa-solid fa-user-pen"></i> Edit to Admin';
                                }
            
                        echo  '</a>
                            <a class="btn btn-danger" href="user.php?delete='.$data['u_id'].'">
                                <i class="fa-solid fa-user-xmark"></i> Delete User
                            </a>
                        </td>
                    </tr>
                            ';
                    }
            }

            echo '
                    </tbody>
                </table>
            ';

            echo '
                <small class="text-info">Page '.$page.' of '.$pages.'</small>
                <nav class="mt-4 d-flex justify-content-center">
                    <ul class="pagination">';
            
                if ($page == 1) {
                    echo '
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                    ';
                } else {
                    echo '
                        <li class="page-item">
                            <a class="page-link" href="?page='.($page-1).'">Previous</a>
                        </li>
                    ';
                }
    
                for ($i = 1; $i <= $pages; $i++) {
                    echo '
                        <li class="page-item">
                            <a class="page-link" href="?page='.$i.'">'.$i.'</a>
                        </li>
                    ';
                }
                
                if ($page == $pages) {
                    echo '
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    ';
                } else {
                    echo '
                                <li class="page-item">
                                    <a class="page-link" href="?page='.($page+1).'">Next</a>
                                </li>
                            </ul>
                        </nav>
                    ';
                }
        }

        public function viewInventory() {
            // DB connect
            $con = $this->con();

            // How many items per page
            $items = 5;

            // Page Counter
            $query = "SELECT * FROM `tbl_inventory`";
            $counter = $con->prepare($query);
            $counter->execute();
            $num_rows = $counter->rowCount();
            
            // Resulting Data
            $pages = ceil($num_rows/$items);
            
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }

            
            $start_limit = ($page-1) * $items;
            $sql = "SELECT * FROM `tbl_inventory` LIMIT $start_limit, $items";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            
            echo '
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Item ID</th>
                            <th>Item Name</th>
                            <th>Item Type</th>
                            <th>Item Brand</th>
                            <th>Item Price</th>
                            <th>Item Quantity</th>
                            <th>Item Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
            ';

            foreach ($result as $data) {
                if ($data['i_status'] == 1) {
                    $b = 'Active';
                } elseif ($data['i_status'] == 2) {
                    $b = 'Inactive';
                } else {
                    $b = 'Discounted';
                }
                
                echo '
                        <tr>
                            <td class="text-center font-weight-bold"> I-'.$data['i_id'].'</td>
                            <td>'.$data['i_name'].'</td>
                            <td class="text-center">'.$data['i_type'].'</td>
                            <td class="text-center">'.$data['i_brand'].'</td>
                            <td class="text-center">'.$data['i_price'].'</td>
                            <td class="text-center">'.$data['i_qty'].'</td>
                            <td class="text-center">'.$b.'</td>
                            <td class="text-center">
                                <div class="dropwdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-file-pen"></i> Edit Item
                                    </button> 
                                    <div class="dropdown-menu">';
                                    
                                        if ($data['i_status'] == 1) {
                                            echo '
                                                <a class="dropdown-item disabled" href="#">Active</a>
                                                <a class="dropdown-item" href="inventory.php?inact='.$data['i_id'].'">Inactive</a>
                                                <a class="dropdown-item" href="inventory.php?disc='.$data['i_id'].'">Discounted</a>
                                            ';
                                        } elseif ($data['i_status'] == 2) {
                                            echo '
                                                <a class="dropdown-item" href="inventory.php?act='.$data['i_id'].'">Active</a>
                                                <a class="dropdown-item disabled" href="#">Inactive</a>
                                                <a class="dropdown-item" href="inventory.php?disc='.$data['i_id'].'">Discounted</a>
                                            ';
                                        } else {
                                            echo '
                                                <a class="dropdown-item" href="inventory.php?act='.$data['i_id'].'">Active</a>
                                                <a class="dropdown-item" href="inventory.php?inact='.$data['i_id'].'">Inactive</a>
                                                <a class="dropdown-item disabled" href="#">Discounted</a>
                                            ';  
                                        }

                echo '              </div>
                                </div>
                                <div class="mt-2">
                                    <a class="btn btn-danger" href="inventory.php?remove='.$data['i_id'].'">
                                        <i class="fa-solid fa-trash-can"></i> Delete Item
                                    </a>
                                </div>
                            </td>
                        </tr>
                ';
            }

            echo '
                        <tr>
                            <form method="post">
                                <td class="text-center font-weight-bold">
                                    #
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="iname_box" required>
                                </td>
                                <td>
                                    <select class="custom-select" name="itype_box" required>
                                        <option value="" disabled selected>Choose a type</option>
                                        <option value="Keyboard">Keyboard</option>
                                        <option value="Mouse">Mouse</option>
                                        <option value="Controller">Controller</option>
                                        <option value="HDD">HDD</option>
                                        <option value="SSD">SSD</option>
                                        <option value="RAM">RAM</option>
                                        <option value="Laptop">Laptop</option>
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="ibrand_box" required>
                                </td>
                                <td>
                                    <input class="form-control" type="number" name="iprice_box" required>
                                </td>
                                <td>
                                    <input class="form-control" type="number" name="iqty_box" value="1" required>
                                </td>
                                <td>
                                    <select class="custom-select" name="istat_box" required>
                                        <option value="" disabled selected>Choose status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">Discounted</option>
                                    </select>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-primary" type="submit name="item_add_btn">
                                        <i class="fa-solid fa-circle-plus"></i> Add Item
                                    </button>
                                    <button class="btn btn-info" type="reset" name="item_clear_btn">
                                        <i class="fa-solid fa-broom"></i> Clear Item
                                    </button>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            ';
            
            echo '
                <small class="text-info">Page '.$page.' of '.$pages.'</small>
                <nav class="mt-4 d-flex justify-content-center">
                    <ul class="pagination">';
            
                if ($page == 1) {
                    echo '
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                    ';
                } else {
                    echo '
                        <li class="page-item">
                            <a class="page-link" href="?page='.($page-1).'">Previous</a>
                        </li>
                    ';
                }

                for ($i = 1; $i <= $pages; $i++) {
                    echo '
                        <li class="page-item">
                            <a class="page-link" href="?page='.$i.'">'.$i.'</a>
                        </li>
                    ';
                }
                
                if ($page == $pages) {
                    echo '
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    ';
                } else {
                    echo '
                                <li class="page-item">
                                    <a class="page-link" href="?page='.($page+1).'">Next</a>
                                </li>
                            </ul>
                        </nav>
                    ';
                }
        }
        
        public function viewOrder() {
            // DB Connect
            $con = $this->con();

            //How many items per page
            $items = 5;

            // Page Counter
            $query = "SELECT * FROM `tbl_order`";
            $counter = $con->prepare($query);
            $counter->execute();
            $num_rows = $counter->rowCount();

            // Resulting Data
            $pages = ceil($num_rows/$items);

            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }

            $start_limit = ($page-1) * $items;
            $sql = "SELECT * FROM `tbl_order`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            echo '
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Item Name</th>
                            <th>Order Quantity</th>
                            <th>Total Price</th>
                            <th>Order Status</th>
                            <th>Date Ordered</th>
                            <th>Date Received</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
            ';

            foreach ($result as $data) {
                if ($data['o_status'] == 1) {
                    $a = 'Ordered';
                } elseif ($data['o_status'] == 2) {
                    $a = 'Packed';
                } elseif ($data['o_status'] == 3) {
                    $a = 'In Transit';
                } else {
                    $a = 'Delivered';
                }

                echo '
                    <tr>
                        <td class="text-center font-weight-bold"> O-'.$data['o_id'].'</td>
                        <td>'.$data['o_customer'].'</td>
                        <td>'.$data['o_name'].'</td>
                        <td class="text-center">'.$data['o_qty'].'</td>
                        <td class="text-center">'.$data['o_total_price'].'</td>
                        <td class="text-center">'.$a.'</td>
                        <td class="text-center">'.$data['o_date'].'</td>
                        <td class="text-center">'.$data['o_received'].'</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-box"></i> Edit Status
                                </button>
                                <div class="dropdown-menu">';

                                    if ($data['o_status'] == 1) {
                                        echo '
                                            <a class="dropdown-item disabled" href="#">Ordered</a>
                                            <a class="dropdown-item" href="order.php?packed='.$data['o_id'].'">Packed</a>
                                            <a class="dropdown-item" href="order.php?transit='.$data['o_id'].'">In Transit</a>
                                            <a class="dropdown-item" href="order.php?delivered='.$data['o_id'].'">Delivered</a>
                                        ';
                                    } elseif ($data['o_status'] == 2) {
                                        echo '
                                            <a class="dropdown-item" href="order.php?ordered='.$data['o_id'].'">Ordered</a>
                                            <a class="dropdown-item disabled" href="#">Packed</a>
                                            <a class="dropdown-item" href="order.php?transit='.$data['o_id'].'">In Transit</a>
                                            <a class="dropdown-item" href="order.php?delivered='.$data['o_id'].'">Delivered</a>
                                        ';
                                    } elseif ($data['o_status'] == 3) {
                                        echo '
                                            <a class="dropdown-item" href="order.php?ordered='.$data['o_id'].'">Ordered</a>
                                            <a class="dropdown-item" href="order.php?packed='.$data['o_id'].'">Packed</a>
                                            <a class="dropdown-item disabled" href="#">In Transit</a>
                                            <a class="dropdown-item" href="order.php?delivered='.$data['o_id'].'">Delivered</a>
                                        ';
                                    } else {
                                        echo '
                                            <a class="dropdown-item" href="order.php?ordered='.$data['o_id'].'">Ordered</a>
                                            <a class="dropdown-item" href="order.php?packed='.$data['o_id'].'">Packed</a>
                                            <a class="dropdown-item" href="order.php?transit='.$data['o_id'].'">In Transit</a>
                                            <a class="dropdown-item disabled" href="#">Delivered</a>
                                        ';
                                    }
                echo '
                                </div>
                            </div>
                            <div class="mt-2">
                                <a class="btn btn-danger" href="order.php?obl='.$data['o_id'].'">
                                    <i class="fa-solid fa-trash-can"></i> Delete Order
                                </a>
                            </div>
                        </td>
                    </tr>
                ';
            }

            echo '
                    </tbody>
                </table>
            ';
            echo '
                <small class="text-info">Page '.$page.' of '.$pages.'</small>
                <nav class="mt-4 d-flex justify-content-center">
                    <ul class="pagination">';
            
                if ($page == 1) {
                    echo '
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                    ';
                } else {
                    echo '
                        <li class="page-item">
                            <a class="page-link" href="?page='.($page-1).'">Previous</a>
                        </li>
                    ';
                }
    
                for ($i = 1; $i <= $pages; $i++) {
                    echo '
                        <li class="page-item">
                            <a class="page-link" href="?page='.$i.'">'.$i.'</a>
                        </li>
                    ';
                }
                
                if ($page == $pages) {
                    echo '
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    ';
                } else {
                    echo '
                                <li class="page-item">
                                    <a class="page-link" href="?page='.($page+1).'">Next</a>
                                </li>
                            </ul>
                        </nav>
                    ';
                }            
        }

        public function viewCountInv() {
            $con = $this->con();
            $sql = "SELECT SUM(`i_qty`) FROM `tbl_inventory`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchColumn();

            echo $result;
        }

        public function viewCountUser() {
            $con = $this->con();
            $sql = "SELECT COUNT(`u_id`) FROM `tbl_user`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchColumn();

            echo $result;
        }

        public function viewCountOrder() {
            $con = $this->con();
            $sql = "SELECT COUNT(`o_id`) FROM `tbl_order`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchColumn();

            echo $result;
        }
    }
?>
