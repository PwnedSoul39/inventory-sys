<?php
    class config {
        private $user = 'root';
        private $pass = '';
        public $pdo = null;

        public function con() {
            try {
                $this->pdo = new PDO('mysql:host=localhost:3307;dbname=db_inventory_sys',$this->user, $this->pass);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
            return $this->pdo;
        }
    }
?>
