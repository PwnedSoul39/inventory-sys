<?php
    class view extends config {

        public function viewUser() {
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_user` ORDER BY `u_id` ASC";
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
                            <td class="text-center">'.$data['u_id'].'</td>
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
        }

        public function viewInventory() {
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_inventory`";
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
                        </tr>
                    </thead>
                    <tbody>
            ';

            foreach ($result as $data) {
                echo '
                        <tr>
                            <td class="text-center font-weight-bold">'.$data['i_id'].'</td>
                            <td>'.$data['i_name'].'</td>
                            <td class="text-center">'.$data['i_type'].'</td>
                            <td class="text-center">'.$data['i_brand'].'</td>
                            <td class="text-center">'.$data['i_price'].'</td>
                            <td class="text-center">'.$data['i_qty'].'</td>
                        </tr>
                ';
            }

            echo '
                        <tr>
                            <form id="inventory_form">
                                <td class="text-center font-weight-bold">
                                    #
                                </td>
                                <td>
                                    <input class="form-control" type="text" required>
                                </td>
                                <td>
                                    <select class="custom-select" required>
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
                                    <input class="form-control" type="text" required>
                                </td>
                                <td>
                                    <input class="form-control" type="number" required>
                                </td>
                                <td>
                                    <input class="form-control" type="number" value="1" required>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            ';
        }
        
        public function viewOrder() {
            $con = $this->con();
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
                        <td class="text-center font-weight-bold">'.$data['o_id'].'</td>
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
                                    Status
                                </button>
                                <div class="dropdown-menu">';

                                if ($data['o_status'] == 1) {
                                    echo '
                                        <a class="dropdown-item disabled" href="#">Ordered</a>
                                        <a class="dropdown-item" href="">Packed</a>
                                        <a class="dropdown-item" href="">In Transit</a>
                                        <a class="dropdown-item" href="">Delivered</a>
                                    ';
                                } elseif ($data['o_status'] == 2) {
                                    echo '
                                        <a class="dropdown-item" href="">Ordered</a>
                                        <a class="dropdown-item disabled" href="#">Packed</a>
                                        <a class="dropdown-item" href="">In Transit</a>
                                        <a class="dropdown-item" href="">Delivered</a>
                                    ';
                                } elseif ($data['o_status'] == 3) {
                                    echo '
                                        <a class="dropdown-item" href="">Ordered</a>
                                        <a class="dropdown-item" href="">Packed</a>
                                        <a class="dropdown-item disabled" href="#">In Transit</a>
                                        <a class="dropdown-item" href="">Delivered</a>
                                    ';
                                } else {
                                    echo '
                                        <a class="dropdown-item" href="">Ordered</a>
                                        <a class="dropdown-item" href="">Packed</a>
                                        <a class="dropdown-item" href="">In Transit</a>
                                        <a class="dropdown-item disabled" href="#">Delivered</a>
                                    ';
                                }
                echo '
                                </div>
                            </div>
                            <div class="my-3">
                                <a class="btn btn-danger" href="">Delete Order</a>
                            </div>
                        </td>
                    </tr>
                ';
            }

            echo '
                    </tbody>
                </table>
            ';
        }
    }
?>