<?php
    class editMail extends config {
        public $id;
        public $new_email;

        public function __construct($id,$new_email) {
            $this->id = $id;
            $this->new_email = $new_email;
        }

        public function editEmail() {
            $con = this->con();
            $sql = "UPDATE `tbl_user` SET `u_email` = '$this->new_email' WHERE `u_id` = '$this->id'";
            $data = $connect->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>