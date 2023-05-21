<?php
    class insertItem extends config {
        public $iname;
        public $itype;
        public $ibrand;
        public $iprice;
        public $iqty;
        public $istatus;

        public function __construct($iname,$itype,$ibrand,$iprice,$iqty,$istatus) {
            $this->iname = $iname;
            $this->itype = $itype;
            $this->ibrand = $ibrand;
            $this->iprice = $iprice;
            $this->iqty = $iqty;
            $this->istatus = $istatus;
        }

        public function addItem() {
            $con = $this->con();
            $sql = "INSERT INTO `tbl_inventory` (`i_name`,`i_type`,`i_brand`,`i_price`,`i_qty`,`i_status`) VALUES ('$this->iname','$this->itype','$this->ibrand', $this->iprice, $this->iqty,$this->istatus)";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>