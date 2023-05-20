<?php
    class editPass extends config {
        public $new_pass;
        public $user;
        
        public function __construct($new_pass) {
            $this->new_pass = $new_pass;
            $this->user = $user = $_SESSION['user'];
        }

        public function editPassword() {
            $con = $this->con();
            $sql = "UPDATE `tbl_user` SET `u_pass` = '$this->new_pass' WHERE `u_uname` = '$this->user'";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>