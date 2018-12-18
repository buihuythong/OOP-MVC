<?php
require_once 'Model.php';

class Model implements Base_Model {
	public $conn;
	 
	public function __construct() {
	 try {
			$this->conn = new PDO("mysql:host=localhost;dbname=".Config::$database_name,Config::$database_user,Config::$database_pass);
			$this->conn->exec('set names utf8');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
				echo "Connection failed: " . $e->getMessage();
		}
	}

	public function getAll($row){
		$this->sql = "SELECT * FROM `$row`";
		$stmt = $this->conn->prepare($this->sql); 
		$stmt->setFetchMode(PDO::FETCH_OBJ);
		$stmt->execute();
		while($row = $stmt->fetch()){
			$data[] = $row;
		}
		return $data;


	}

	public function getRowFromCodition($row, $conditon){
		$this->sql = "SELECT * FROM `$row` WHERE $conditon";
		$stmt = $this->conn->prepare($this->sql); 
		$stmt->setFetchMode(PDO::FETCH_OBJ);
			$stmt->execute();
			$data = array();
			while($row = $stmt->fetch()){
				$data[] = $row;
			}
			return count($data);
	}

	public function removeFromCondition($row,$conditon){
		$this->sql = "DELETE FROM `$row` WHERE $conditon";
		$stmt = $this->conn->prepare($this->sql);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
