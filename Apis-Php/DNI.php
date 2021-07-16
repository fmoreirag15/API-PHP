<?php
    include_once 'apiMonedas.php';    
    $api = new apiMonedas();
    header('Access-Control-Allow-Origin: *');       
    $DNI = $_GET['DNI'];        
    $api->getByDNI($DNI);
            
?>