<?php

class ScoreModel extends Model {

	private $score1;
	private $score2;
	private $score3;
	private $class_id;
	private $students_id;

	public function setData($score1, $score2, $score3, $class_id, $students_id){
		$this->score1 = $score1;
		$this->score2 = $score2;
		$this->score3 = $score3;
		$this->class_id = $class_id;
		$this->students_id = $students_id;
	}

	public function addScore(){

		$data = $this->getRowFromCodition('manage_student_score','students_id='.$this->students_id);

		if($data == 0){
			$this->sql = "INSERT INTO `manage_student_score`(`score1`,`score2`,`score3`, `class_id`, `students_id`) VALUES ('$this->score1', '$this->score2', '$this->score3', '$this->class_id', '$this->students_id')";
		}else{
			$this->sql = "UPDATE `manage_student_score` SET `score1`='$this->score1',`score2`='$this->score2',`score3`='$this->score3',`class_id` ='$this->class_id' WHERE `students_id` = '$this->students_id'";
		}
		
		if($this->conn->exec($this->sql)){
			return true;
		}else{
			return false;
		}
	}

	public function getOneScore($row, $condition){
		$this->sql = "SELECT * FROM `$row` WHERE $condition";
	    $stmt = $this->conn->prepare($this->sql); 
	    $stmt->setFetchMode(PDO::FETCH_OBJ);
	      $stmt->execute();
	      while($row = $stmt->fetch()){
	        $data[] = $row;
	      }
	      if(!empty($data[0])){
	      	 return $data[0];
	      	}else{
	      		return null;
	      	}
	     
	}

}