<?php
class view extends config {
    
    public function viewCountInv() {
        $con = $this->con();
        $sql = "SELECT SUM(`i_qty`) FROM `tbl_inventory`";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchColumn();

        echo $result;
    }

    public function viewCountUser() {
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_user`";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->rowCount();

        echo $result;
    }

    public function viewCountOrder() {
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_order`";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->rowCount();

        echo $result;
    }
}
?>
