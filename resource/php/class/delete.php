<?php
class delete extends config {
	public $id;

	public function __construct($id) {
		$this->id = $id;
	}

	public function delUsr() {
		$con = $this->con();
		$sql = "DELETE FROM `tbl_user` WHERE `u_id` = '$this->id'";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function delOrd() {
		$con = $this->con();
		$sql = "DELETE FROM `tbl_order` WHERE `o_id` = '$this->id'";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function delItm() {
		$con = $this->con();
		$sql = "DELETE FROM `tbl_item` WHERE `i_id` = '$this->id'";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
?>