<?php

class IndexModel extends Model {
	public $sql;
	private $id;
	private $fullname;
	private $address;
	private $prioritize;

	public function setData($id, $fullname, $address, $prioritize ){
		$this->id = $id;
		$this->fullname = $fullname;
		$this->address = $address;
		$this->prioritize = $prioritize;
	}
	public function addStudent(){

		$this->sql = "INSERT INTO `manage_student_students`(`id`,`fullname`,`address`,`prioritize`) VALUES ('$this->id', '$this->fullname', '$this->address', '$this->prioritize')";

		if($this->conn->exec($this->sql)){
			return true;
		}else{
			return false;
		}
	}

	public function editStudent()
	{
		$this->sql = "UPDATE `manage_student_students` SET `fullname` = '$this->fullname',`address` = '$this->address', `prioritize` = '$this->prioritize' WHERE `id` = '$this->id'";

		if($this->conn->exec($this->sql)){
			return true;
		}else{
			return false;
		}
	}

	public function getOneStudent($row, $condition){
		$this->sql = "SELECT * FROM `$row` WHERE $condition";
	    $stmt = $this->conn->prepare($this->sql); 
	    $stmt->setFetchMode(PDO::FETCH_OBJ);
	      $stmt->execute();
	      while($row = $stmt->fetch()){
	        $data[] = $row;
	      }
	    if(!empty($data)){

	      return $data[0];
	    }else{
	    	return null;
	    }
	}

}