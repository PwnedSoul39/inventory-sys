<?php
    class validate extends config {
        public function verifyPass($text, $hash) {
            // I used this function instead of openssl_decrypt method
            return password_verify($text, $hash);
        }

        public function sanitizeMail($mail) {
            return filter_var($mail, FILTER_SANITIZE_EMAIL);
        }

        public function validLogin($lmail, $lpass) {
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_user` WHERE `u_email` = '$lmail'";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($result as $data) {
                $verify_mail = $this->sanitizeMail($lmail);
                $verify_pass = $this->verifyPass($lpass, $data['u_pass']);

                if ($verify_pass == $data['u_pass'] && $verify_mail == $data['u_email']) {
                    header('location:dashboard.php');
                }
            }
        } 
    }
?>