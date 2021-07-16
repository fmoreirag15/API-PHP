<?php

    include_once 'apiExamen.php';
    
    $api = new apiExamen();
    $nombre = '';
    $error = '';

    if(isset($_POST['Nombre'])){       
            $item = array(                
                "Nombre" => $_POST['Nombre'],
                "Apellido" => $_POST['Apellido'],
                "FechaNacimiento" => $_POST['FechaNacimiento'],
                "DNI" => $_POST['DNI'],
                "Genero" => $_POST['Genero'],
                "Leucocitos" => $_POST['Leucocitos'],
                "Hemoglobina" => $_POST['Hemoglobina'],
                "Hematocrito" => $_POST['Hematocrito'],
                "Hematies" => $_POST['Hematies'],
                "VCM" => $_POST['VCM'],
                "HCM" => $_POST['HCM'],
                "CHCM" => $_POST['CHCM'],
                "RDWCV" => $_POST['RDWCV'],
                "Linfocitos" => $_POST['Linfocitos'],
                "Monocitos" => $_POST['Monocitos'],
                "Eosinofilos" =>$_POST['Eosinofilos'],
                "Basofilos" => $_POST['Basofilos'],
                "VPM" => $_POST['VPM'],
                "Plaquetas" => $_POST['Plaquetas'],
                "Diagnosticos" => $_POST['Diagnosticos'],
            );
            $api->add($item);
    }else{
        $api->error('Error al llamar a la API');
    }
?>