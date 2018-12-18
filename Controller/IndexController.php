<?php

class IndexController extends Controller{
    
    public function index(){
       require_once 'Model/IndexModel.php';
        $this->model = new IndexModel;
        $data = $this->model->getAll('manage_student_students');
        $this->view->data = $data;
        $this->view->render('index');
    }
    
    public function insert(){
        require_once 'Model/IndexModel.php';
       $this->view->render('add');
    }
    
    public function setinsert(){
      require_once 'Model/IndexModel.php';
      $this->model = new IndexModel;
      $this->model->setData($_POST['id'], $_POST['fullname'], $_POST['address'], $_POST['prioritize']);
      $data = $this->model->addStudent();

      if($data){
        header('location: index.php?controller=index&action=index');
      }else {
        echo "Thêm thất bại";
      }
    }

    public function remove(){
      require_once 'Model/IndexModel.php';
      $this->model = new IndexModel;
      $id = htmlentities($_GET['id']);
      if(is_numeric($id) != true){
        header('location:index.php?controller=index&action=index');
      }else{
        $result = $this->model->removeFromCondition('manage_student_students','id='.$id);
        header('location:index.php?controller=index&action=index');
        

      }
    }

    public function edit(){
     require_once 'Model/IndexModel.php';
     $this->model = new IndexModel;
     $data = $this->model->getOneStudent('manage_student_students','id='.$_GET['id']);
      $this->view->data = $data;
      $this->view->render('edit');
    }

    public function setEdit()
    {
       require_once 'Model/IndexModel.php';
       $this->model = new IndexModel;

       $this->model->setData($_POST['id'], $_POST['fullname'], $_POST['address'], $_POST['prioritize']);

       $result = $this->model->editStudent();

       header("location:index.php?controller=index&action=index");
    }

    public function search()
    {
      $id = $_POST['id'];
      require_once 'Model/IndexModel.php';
      $this->model = new IndexModel;
      $data = $this->model->getOneStudent('manage_student_students','id = ' . $id);
      if(!empty($data)){
        $this->view->data = $data;
        $this->view->render('search');
      }else {
        echo '<h1 class="text-center" style="color:red;">Không tìm thấy bản ghi nào phù hợp</h1>';
        echo '<a href="index.php">Quay về trang chủ</a>';
      }
      
    }

    

}