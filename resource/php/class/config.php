<?php
class config {
	private $user = 'root';
	private $pass = '';
	public $pdo = null;

	public function con() {
		try {
			$this->pdo = new PDO('mysql:host=localhost;dbname=db_inventory',$this->user, $this->pass);
		} catch (PDOException $e) {
			die($e->getMessage());
		} return $this->pdo;
	}
}
?>