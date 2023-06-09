<?php
class edit extends config {
	public $id;
	public $stat;

	public function __construct($id,$stat) {
		$this->id = $id;
		$this->stat = $stat;
	}

	public function editUsrType() {
		$con = $this->con();
		$sql = "UPDATE `tbl_user` SET `u_type` = CASE WHEN `u_type` = '1' THEN '0' WHEN `u_type` = '0' THEN '1' END WHERE `u_id` = '$this->id'";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function editOrdStatus() {
		$con = $this->con();

		if ($this->stat == 5) {
			$sql = "UPDATE `tbl_order` SET `o_status` = '$this->stat', `o_receive` = NOW() WHERE `o_id` = '$this->id'";
		} else {
			$sql = "UPDATE `tbl_order` SET `o_status` = '$this->stat' WHERE `o_id` = '$this->id'";
		}

		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function editItmStatus() {
		$con = $this->con();
		$sql = "UPDATE `tbl_item` SET `i_status` = '$this->stat' WHERE `i_id` = '$this->id'";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function editPass() {
		$con = $this->con();
		$sql = "UPDATE `tbl_user` SET `u_pass` = '$this->stat' WHERE `u_user` = '$this->id'";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
?>