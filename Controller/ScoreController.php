<?php

class ScoreController extends Controller {
	public function score(){
        $id = htmlentities($_GET['id']);
        if(is_numeric($id) == true){
            require_once 'Model/IndexModel.php';
            require_once 'Model/ScoreModel.php';
            $this->model = new IndexModel;
            $this->modelScore = new ScoreModel;
            $data = $this->model->getOneStudent('manage_student_students','id='. $id);
            $data2 = $this->modelScore->getOneScore('manage_student_score','students_id='.$id);
            $this->view->data = $data;
            $this->view->score = $data2;
            $this->view->render('score');
        }else
        {
            header('location:index.php?controller=index&action=index');
        }
    }

    public function setScore(){
    	$students_id = $_GET['student'];
    	require_once 'Model/ScoreModel.php';
    	$this->model = new ScoreModel;
    	if(isset($_POST['submit'])){
    		$class_id = null;

	    	if($_POST['class'] == 'table1'){
	    		$class_id = 1;
	    	}else if($_POST['class'] == 'table2') {
	    		$class_id = 2;
	    	}else {
	    		$class_id = 3;
	    	}

	    	switch ($class_id) {
	    		case '1':
	    			$score1 = $_POST['score11'];
	    			$score2 = $_POST['score12'];
	    			$score3 = $_POST['score13'];
	    			break;
	    		case '2':
	    			$score1 = $_POST['score21'];
	    			$score2 = $_POST['score22'];
	    			$score3 = $_POST['score23'];
	    			break;
	    		case '3':
	    			$score1 = $_POST['score31'];
	    			$score2 = $_POST['score32'];
	    			$score3 = $_POST['score33'];
	    			break;
	    	}

	    	$this->model->setData($score1, $score2, $score3, $class_id, $students_id);
	    	$data = $this->model->addScore();
	    	if($data) {
	    		header('location:index.php?controller=index&action=index');
	    	}else{
	    		header('location:index.php?controller=score&action=score');
	    	}
    	}
    	
    }

}