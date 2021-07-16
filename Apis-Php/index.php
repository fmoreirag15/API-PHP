<?php
    include_once 'apiExamen.php';
    
    $api = new apiExamen();
    header('Access-Control-Allow-Origin: *');
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(is_numeric($id)){
            $api->getById($id);
        }else{
            $api->error('El id es incorrecto');
        }
    }else{
        $api->getAll();
    }
    

     
?>