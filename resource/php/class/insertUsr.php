<?php
class insertUsr extends config {
	public $uname;
	public $umail;
	public $upass;
	public $utype;
	public $ujoin;

	public function __construct($uname,$umail,$upass,$utype,$ujoin) {
		$this->uname = $uname;
		$this->umail = $umail;
		$this->upass = $upass;
		$this->utype = $utype;
		$this->ujoin = $ujoin;
	}
	
	public function addUsr() {
		$con = $this->con();
		$sql = "INSERT INTO `tbl_user` (`u_user`,`u_email`,`u_pass`,`u_type`,`u_join`) VALUES ('$this->uname','$this->umail','$this->upass','$this->utype','$this->ujoin')";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
?>