<?php
    class config {
        private $user = 'root';
        private $pass = '';
        public $pdo = null;

        public function con() {
            try {
<<<<<<< Updated upstream
                $this->pdo = new PDO('mysql:host=localhost:3307;dbname=db_inventory_sys',$this->user, $this->pass);
=======
                $this->pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=inventory_sys',$this->user, $this->pass);
>>>>>>> Stashed changes
            } catch (PDOException $e) {
                die($e->getMessage());
            }
            return $this->pdo;
        }
    }
?>