<?php
    include_once 'apiExamen.php';    
    $api = new apiExamen();
    header('Access-Control-Allow-Origin: *');       
    $DNI = $_GET['DNI'];        
    $api->getByDNI($DNI);
            
?>