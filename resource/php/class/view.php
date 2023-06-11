<?php
class view extends config {
	public function viewCountItm() {
		$con = $this->con();
		$sql = "SELECT * FROM `tbl_item`";
		$data = $con->prepare($sql);
		$data->execute();
		$result = $data->rowCount();

		echo $result;
	}

	public function viewCountUsr() {
		$con = $this->con();
		$sql = "SELECT * FROM `tbl_user`";
		$data = $con->prepare($sql);
		$data->execute();
		$result = $data->rowCount();

		echo $result;
	}

	public function viewCountOrd() {
		$con = $this->con();
		$sql = "SELECT * FROM `tbl_order`";
		$data = $con->prepare($sql);
		$data->execute();
		$result = $data->rowCount();

		echo $result;
	}
}
?>