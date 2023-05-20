<?php
    class deleteUser extends config {
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
    }
?>