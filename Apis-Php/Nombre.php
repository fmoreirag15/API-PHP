<?php
    include_once 'apiExamen.php';    
    $api = new apiExamen();
    header('Access-Control-Allow-Origin: *');       
    $name = $_GET['name'];        
    $api->getByname($name);
            
?>