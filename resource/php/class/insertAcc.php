<?php
    class insertAcc extends config {
        public $lname;
        public $fname;
        public $email;
        public $pass;
        public $join;

        public function __construct($lname, $fname, $email, $pass, $join) {            
            $this->lname = $lname;
            $this->fname = $fname;
            $this->email = $email;
            $this->pass = $pass;
            $this->join = $join;
        }

        public function addAcc() {
            $con = $this->con();
            $sql = "INSERT INTO `tbl_user` (`u_lname`,`u_fname`,`u_email`,`u_pass`,`u_date_joined`) VALUES ('$this->lname','$this->fname','$this->email','$this->pass','$this->join')";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>