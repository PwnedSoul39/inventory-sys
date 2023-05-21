<?php
    class insertItem extends config {
        public $name;
        public $type;
        public $brand;
        public $price;
        public $qty;
        public $status;

        public function __construct($name,$type,$brand,$price,$qty,$status) {
            $this->name = $name;
            $this->type = $type;
            $this->brand = $brand;
            $this->price = $price;
            $this->qty = $qty;
            $this->status = $status;
        }

        public function addItem() {
            $con = $this->con();
            $sql = "INSERT INTO `tbl_inventory` (`i_name`,`i_type`,`i_brand`,`i_price`,`i_qty`,`i_status`) VALUES ('$this->name','$this->type','$this->brand', $this->price, $this->qty,$this->status)";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>