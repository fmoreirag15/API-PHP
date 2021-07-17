<?php

include_once 'db.php';

class examen extends DB{
    
    function obtenerExamenN(){        
        $query = $this->connect()->query('SELECT * FROM examenes');
        return $query;
    }

    function obtenerExamen($id){
        $query = $this->connect()->prepare('SELECT * FROM examenes WHERE ID = :id');
        $query->execute(['id' => $id]);
        return $query;
    }

    function obtenerPornombre($nombre){
        $query = $this->connect()->prepare('SELECT `Nombre`, 
        `Apellido`, `FechaNacimiento`, `DNI`, `Genero`, `Leucocitos`, 
        `Hemoglobina`, `Hematocrito`, `Hematies`, `VCM`, `HCM`, `CHCM`,
         `RDWCV`, `Linfocitos`, `Monocitos`, `Eosinofilos`, `Basofilos`,
          `VPM`, `Plaquetas`, `Diagnosticos` FROM examenes WHERE Nombre= :name ');
        $query->execute(['name' => $nombre]);
        return $query;
    }

    function obtenerDNI($DNI){
        $query = $this->connect()->prepare('SELECT `Nombre`, 
        `Apellido`, `FechaNacimiento`, `DNI`, `Genero`, `Leucocitos`, 
        `Hemoglobina`, `Hematocrito`, `Hematies`, `VCM`, `HCM`, `CHCM`,
         `RDWCV`, `Linfocitos`, `Monocitos`, `Eosinofilos`, `Basofilos`,
          `VPM`, `Plaquetas`, `Diagnosticos` FROM examenes WHERE DNI= :id ');
        $query->execute(['id' => $DNI]);
        return $query;
    }

    function nuevoExamen($examen){
        $query = $this->connect()->prepare(
        'INSERT INTO `examenes`(`Nombre`, `Apellido`, `FechaNacimiento`, `DNI`, `Genero`, `Leucocitos`, `Hemoglobina`, `Hematocrito`, `Hematies`, `VCM`, `HCM`, `CHCM`, `RDWCV`, `Linfocitos`, `Monocitos`, `Eosinofilos`, `Basofilos`, `VPM`, `Plaquetas`, `Diagnosticos`) VALUES ( :Nombre, :Apellido, :FechaNacimiento, :DNI, :Genero, :Leucocitos, :Hemoglobina, :Hematocrito, :Hematies, :VCM, :HCM, :CHCM, :RDWCV, :Linfocitos, :Monocitos, :Eosinofilos, :Basofilos, :VPM, :Plaquetas, :Diagnosticos)');        
        $query->execute(['Nombre' => $examen['Nombre'],
                         'Apellido' => $examen['Apellido'],
                         'FechaNacimiento' => $examen['FechaNacimiento'],
                         'DNI' => $examen['DNI'],'Genero' => $examen['Genero'],
                         'Leucocitos' => $examen['Leucocitos'],'Hemoglobina' => $examen['Hemoglobina'],
                                    'Hematocrito' => $examen['Hematocrito'],
                                    'Hematies' => $examen['Hematies'],
                                    'VCM' => $examen['VCM'],
                                    'HCM' => $examen['HCM'],
                                    'CHCM' => $examen['CHCM'],
                                    'RDWCV' => $examen['RDWCV'],
                                    'Linfocitos' => $examen['Linfocitos'],
                                    'Monocitos' => $examen['Monocitos'],
                                    'Eosinofilos' => $examen['Eosinofilos'],
                                    'Basofilos' => $examen['Basofilos'],
                                    'VPM' => $examen['VPM'],'Plaquetas' => $examen['Plaquetas'],
                                    'Diagnosticos' => $examen['Diagnosticos']]);
        return $query;
    }
}

?>