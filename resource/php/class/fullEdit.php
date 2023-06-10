<?php
class fullEdit extends config {
	public function fullEditItm($id,$name,$type,$brand,$price,$qty,$status,$added) {
		$con = $this->con();
		$sql = "UPDATE `tbl_item` SET `i_name` = '$name', `i_type` = '$type', `i_brand` = '$brand', `i_price` = $price, `i_qty` = $qty, `i_status` = $status, `i_added` = '$added' WHERE `i_id` = '$id'";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function fullEditOrd($id,$cname,$iname,$qty,$total,$status,$order,$receive) {
		$con = $this->con();
		
		if ($status < 5) {
			$sql = "UPDATE `tbl_order` SET `o_cus` = '$cname' ,`o_item` = '$iname' ,`o_qty` = $qty ,`o_total` = $total ,`o_status` = $status ,`o_order` = '$order' ,`o_receive` = '' WHERE `o_id` = '$id'";
		} else {
			$sql = "UPDATE `tbl_order` SET `o_cus` = '$cname' ,`o_item` = '$iname' ,`o_qty` = $qty ,`o_total` = $total ,`o_status` = $status ,`o_order` = '$order' ,`o_receive` = '$receive' WHERE `o_id` = '$id'";
		}
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
?>