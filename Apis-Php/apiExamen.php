<?php

include_once 'examen.php';

class apiExamen{


    function getAll(){
        $pelicula = new examen();
        $peliculas = array();
        $peliculas["items"] = array();

        $res = $pelicula->obtenerExamenN();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item=array(
                    "ID" => $row['ID'],
                    "Nombre" => $row['Nombre'],
                    "Apellido" => $row['Apellido'],
                    "fecha" => $row['FechaNacimiento'],
                    "DNI" => $row['DNI'],
                    "Genero" => $row['Genero'],
                    "Leucocitos" => $row['Leucocitos'],
                    "Hemoglobina" => $row['Hemoglobina'],
                    "Hematocrito" => $row['Hematocrito'],
                    "Hematies" => $row['Hematies'],
                    "VCM" => $row['VCM'],
                    "HCM" => $row['HCM'],
                    "CHCM" => $row['CHCM'],
                    "RDWCV" => $row['RDWCV'],
                    "Linfocitos" => $row['Linfocitos'],
                    "Monocitos" => $row['Monocitos'],
                    "Eosinofilos" => $row['Eosinofilos'],
                    "Basofilos" => $row['Basofilos'],
                    "VPM" => $row['VPM'],
                    "Plaquetas" => $row['Plaquetas'],
                    "Diagnosticos" => $row['Diagnosticos'],
                );
                array_push($peliculas["items"], $item);
            }
        
            echo json_encode($peliculas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function getByname($name){
        $pelicula = new examen();
        $peliculas = array();
        $peliculas["items"] = array();

        $res = $pelicula->obtenerPornombre($name);

        if($res->rowCount() > 0){
            $row = $res->fetch();
        
            $item=array(                                   
                    "Nombre" => $row['Nombre'],
                    "Apellido" => $row['Apellido'],
                    "FechaNacimiento" => $row['FechaNacimiento'],
                    "DNI" => $row['DNI'],
                    "Genero" => $row['Genero'],
                    "Leucocitos" => $row['Leucocitos'],
                    "Hemoglobina" => $row['Hemoglobina'],
                    "Hematocrito" => $row['Hematocrito'],
                    "Hematies" => $row['Hematies'],
                    "VCM" => $row['VCM'],
                    "HCM" => $row['HCM'],
                    "CHCM" => $row['CHCM'],
                    "RDWCV" => $row['RDWCV'],
                    "Linfocitos" => $row['Linfocitos'],
                    "Monocitos" => $row['Monocitos'],
                    "Eosinofilos" => $row['Eosinofilos'],
                    "Basofilos" => $row['Basofilos'],
                    "VPM" => $row['VPM'],
                    "Plaquetas" => $row['Plaquetas'],
                    "Diagnosticos" => $row['Diagnosticos'],
                );
            array_push($peliculas["items"], $item);
            $this->printJSON($peliculas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
    function getByDNI($DNI){
        $pelicula = new examen();
        $peliculas = array();
        $peliculas["items"] = array();

        $res = $pelicula->obtenerDNI($DNI);

        if($res->rowCount() > 0){
            $row = $res->fetch();        
            $item=array(                                   
                    "Nombre" => $row['Nombre'],
                    "Apellido" => $row['Apellido'],
                    "FechaNacimiento" => $row['FechaNacimiento'],
                    "DNI" => $row['DNI'],
                    "Genero" => $row['Genero'],
                    "Leucocitos" => $row['Leucocitos'],
                    "Hemoglobina" => $row['Hemoglobina'],
                    "Hematocrito" => $row['Hematocrito'],
                    "Hematies" => $row['Hematies'],
                    "VCM" => $row['VCM'],
                    "HCM" => $row['HCM'],
                    "CHCM" => $row['CHCM'],
                    "RDWCV" => $row['RDWCV'],
                    "Linfocitos" => $row['Linfocitos'],
                    "Monocitos" => $row['Monocitos'],
                    "Eosinofilos" => $row['Eosinofilos'],
                    "Basofilos" => $row['Basofilos'],
                    "VPM" => $row['VPM'],
                    "Plaquetas" => $row['Plaquetas'],
                    "Diagnosticos" => $row['Diagnosticos'],
                );
            array_push($peliculas["items"], $item);
            $this->printJSON($peliculas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
    function getById($id){
        $pelicula = new examen();
        $peliculas = array();
        $peliculas["items"] = array();

        $res = $pelicula->obtenerExamen($id);

        if($res->rowCount() == 1){
            $row = $res->fetch();
        
            $item=array(                    
                    "Nombre" => $row['Nombre'],
                    "Apellido" => $row['Apellido'],
                    "FechaNacimiento" => $row['FechaNacimiento'],
                    "DNI" => $row['DNI'],
                    "Genero" => $row['Genero'],
                    "Leucocitos" => $row['Leucocitos'],
                    "Hemoglobina" => $row['Hemoglobina'],
                    "Hematocrito" => $row['Hematocrito'],
                    "Hematies" => $row['Hematies'],
                    "VCM" => $row['VCM'],
                    "HCM" => $row['HCM'],
                    "CHCM" => $row['CHCM'],
                    "RDWCV" => $row['RDWCV'],
                    "Linfocitos" => $row['Linfocitos'],
                    "Monocitos" => $row['Monocitos'],
                    "Eosinofilos" => $row['Eosinofilos'],
                    "Basofilos" => $row['Basofilos'],
                    "VPM" => $row['VPM'],
                    "Plaquetas" => $row['Plaquetas'],
                    "Diagnosticos" => $row['Diagnosticos'],
                );
            array_push($peliculas["items"], $item);
            $this->printJSON($peliculas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function add($item){
        $pelicula = new examen();

        $res = $pelicula->nuevaPelicula($item);
        $this->exito('Nueva pelicula registrada');
    }

    function error($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }
  
    function exito($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }


    function printJSON($array){
        echo json_encode($array);
    }
}

?>