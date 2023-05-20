<?php
    class view extends config {

        public function viewUser() {
            $con = $this->con();
            $sql = "SELECT `u_id`,`u_uname`, `u_date_joined` FROM `tbl_user` ORDER BY `u_id` ASC";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            echo '
                <table class="tale table-striped table-bordered">
                    <thead class="sticky-top bg-light text-dark">
                        <tr>
                            <th class="text-center">User ID</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Date Joined</th>
                        </tr>
                    </thead>
                    <tbody>
            ';

            foreach ($result as $data) {
                echo '
                    <tr>
                        <td class="text-center">'.$data['u_id'].'</td>
                        <td>'.$data['u_uname'].'</td>
                        <td>'.$data['u_date_joined'].'</td>
                    </tr>
                ';
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
                        <tr>
                            <th class="text-center">Item ID</th>
                            <th class="text-center">Item Name</th>
                            <th class="text-center">Item Type</th>
                            <th class="text-center">Item Brand</th>
                            <th class="text-center">Item Price</th>
                            <th class="text-center">Item Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
            ';

            foreach ($result as $data) {
                echo '
                    <tr>
                        <td class="text-center">'.$data['i_id'].'</td>
                        <td>'.$data['i_name'].'</td>
                        <td class="text-center">'.$data['i_type'].'</td>
                        <td class="text-center">'.$data['i_brand'].'</td>
                        <td class="text-center">'.$data['i_price'].'</td>
                        <td class="text-center">'.$data['i_qty'].'</td>
                    </tr>
                ';
            }

            echo '
                    </tbody>
                </table>
            ';
        }

        public function countProduct() {

        }

        public function viewProduct() {

        }

        public function countOrder() {

        }

        public function viewOrder() {

        }
    }
?>