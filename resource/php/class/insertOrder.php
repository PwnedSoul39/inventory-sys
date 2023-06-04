<?php
class insertOrder extends config {
    public $ocus;
    public $oname;
    public $oqty;
    public $oprice;
    public $ostatus;
    public $odate;
    public $oreceive;

    public function __construct($ocus,$oname,$oqty,$oprice,$ostatus,$odate,$oreceive) {
        $this->ocus = $ocus;
        $this->oname = $oname;
        $this->oqty = $oqty;
        $this->oprice = $oprice;
        $this->ostatus = $ostatus;
        $this->odate = $odate;
        $this->oreceive = $oreceive;
    }

    public function addOrder() {
        $con = $this->con();
        $sql = "INSERT INTO `tbl_order` ";
        $data = $con->prepare($sql);
        
        if ($data->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>