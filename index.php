<?php

    require_once 'Lib/Base_Controller.php';
    require_once 'Lib/Base_Model.php';
    require_once 'Lib/Base_View.php';
    require_once 'Lib/Model.php';
    require_once 'config.php';

    $controllerURL = isset($_GET['controller']) ? $_GET['controller'] : "index";
    $actionURL = isset($_GET['action']) ? $_GET['action'] : "index";
    
    
    $file = "Controller/".ucfirst($controllerURL)."Controller.php";

    if(file_exists($file))
    {
       require_once "{$file}";
       $controller = ucfirst($controllerURL)."Controller";
       $c = new $controller();
       $action = strtolower($actionURL);
       $c->$action();
    }else 
    {
        echo "File không tồn tại";
    }