<?php
class insertOrd extends config {
	public $oname;
	public $oitm;
	public $oqty;
	public $total;
	public $ostatus;
	public $order;
	public $receive;

	public function __construct($oname,$oitm,$oqty,$total,$ostatus,$order,$receive) {
		$this->oname = $oname;
		$this->oitm = $oitm;
		$this->oqty = $oqty;
		$this->total = $total;
		$this->ostatus = $ostatus;
		$this->order = $order;
		$this->receive = $receive;
	}

	public function addOrd() {
		$con = $this->con();
		$sql = "INSERT INTO `tbl_order` (`o_cus`,`o_item`,`o_qty`, `o_total`,`o_status`,`o_order`, `o_receive`) VALUES ('$this->oname','$this->oitm',$this->oqty, $this->total,'$this->ostatus','$this->order','$this->receive')";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
?>