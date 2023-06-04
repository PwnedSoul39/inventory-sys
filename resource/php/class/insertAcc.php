<?php
class insertAcc extends config {
    public $lname;
    public $fname;
    public $uname;
    public $email;
    public $pass;
    public $type;
    public $join;
  
    public function __construct($lname,$fname,$uname,$email,$pass,$type,$join) {
      $this->lname = $lname;
      $this->fname = $fname;
      $this->uname = $uname;
      $this->email = $email;
      $this->pass = $pass;
      $this->type = $type;
      $this->join = $join;
    }
  
    public function addAcc() {
      $con = $this->con();
      $sql = "INSERT INTO `tbl_user` (`u_lname`,`u_fname`,`u_uname`, `u_email`,`u_pass`, `u_type`,`u_date_joined`) VALUES ('$this->lname','$this->fname','$this->uname','$this->email','$this->pass','$this->type','$this->join')";
      $data = $con->prepare($sql);
  
      if ($data->execute()) {
        return true;
      } else {
        return false;
      }
    }
}
?>