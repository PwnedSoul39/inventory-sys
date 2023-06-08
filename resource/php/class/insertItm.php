<?php
class insertItm extends config {
	public $iname;
	public $itype;
	public $ibrand;
	public $iprice;
	public $iqty;
	public $istatus;
	public $added;

	public function __construct($iname,$itype,$ibrand,$iprice,$iqty,$istatus,$added) {
		$this->iname = $iname;
		$this->itype = $itype;
		$this->ibrand = $ibrand;
		$this->iprice = $iprice;
		$this->iqty = $iqty;
		$this->istatus = $istatus;
		$this->added = $added;
	}

	public function addItm() {
		$con = $this->con();
		$sql = "INSERT INTO `tbl_item` (`i_name`,`i_type`,`i_brand`,`i_price`,`i_qty`,`i_status`,`i_added`) VALUES ('$this->iname','$this->itype','$this->ibrand',$this->iprice,$this->iqty,'$this->istatus','$this->added')";
		$data = $con->prepare($sql);

		if ($data->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
?>