<?php
    class editPass extends config {
        public $id;
        public $new_pass;

        public function __construct($id,$new_pass) {
            $this->id = $id;
            $this->new_pass = $new_pass;
        }

        public function editPassword() {
            $con = this->con();
            $sql = "UPDATE `tbl_user` SET `u_pass` = '$this->new_pass' WHERE `u_id` = '$this->id'";
            $data = $connect->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>