<?php
    class editStuff extends config {
        public $id;
        public function __construct($id) {
            $this->id = $id;
        }

        public function editType() {
            $con = $this->con();
            // ung case statement ginamit ko dito kasi mas madali intindihin kesa if else
            // bale case when (condition) then (result) idugtong mo lang ung when sa dulo ng then para gumawa ng parang elseif statement
            $sql = "UPDATE `tbl_user` SET `u_type` = CASE WHEN `u_type` = '1' THEN '0' WHEN `u_type` = '0' THEN '1' END WHERE `u_id` ='$this->id'";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function editStatusO() {
            $con = $this->con();
            $sql = "UPDATE `tbl_order` SET `o_status` = '1' WHERE `o_id` = '$this->id'";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
        
        public function editStatusP() {
            $con = $this->con();
            $sql = "UPDATE `tbl_order` SET `o_status` = '2' WHERE `o_id` = '$this->id'";
            $data = $con->prepare($sql);
    
            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
        
        public function editStatusT() {
            $con = $this->con();
            $sql = "UPDATE `tbl_order` SET `o_status` = '3' WHERE `o_id` = '$this->id'";
            $data = $con->prepare($sql);
    
            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
        
        public function editStatusD() {
            $con = $this->con();
            $sql = "UPDATE `tbl_order` SET `o_status` = '4', `o_received` = NOW() WHERE `o_id` = '$this->id'";
            $data = $con->prepare($sql);
    
            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
