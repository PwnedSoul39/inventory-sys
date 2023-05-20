<?php
    class deleteStuff extends config {
        public $id;

        public function __construct($id) {
            $this->id = $id;
        }

        public function delUser() {
            $con = $this->con();
            $sql = "DELETE FROM `tbl_user` WHERE `u_id` = '$this->id'";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function delOrder() {
            $con = $this->con();
            $sql = "DELETE FROM `tbl_order` WHERE `o_id` = '$this->id'";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function delItem() {
            $con = $this->con();
            $sql = "DELETE FROM `tbl_inventory` WHERE `i_id` = '$this->id'";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>