<?php
include 'conexionBD.php';

function getEquipos(){
    
    $dwes = getConexion();
    
    $equipos = $dwes -> query("select nombre from equipos")->fetchAll();
    
    $dwes->close();
    
    return $equipos;
    
}

function getJugadores($equipo){
    $dwes = getConexion();
    
    $jugadores = $dwes->query("SELECT * FROM `jugadores` where nombre_equipo = '" . $equipo . "'")->fetchAll();
    
    $dwes->close();
    return $jugadores;
}

function getPosicion(){
    $dwes = getConexion();
    
    $posicion = $dwes->query("select DISTINCT posicion from jugadores")->fetchAll();
    
    $dwes->close();
    return $posicion;
}

function cambioJugador($equipo_elegido,$jugador_elegido,$nombre_nuevo,$procedencia,$altura,$peso,$posicion){
    
    $dwes = getConexion();
    
    
    $success = true;
    
    try{
        
        $dwes->beginTransaction();
        
        $preparedStatement = $dwes->exec("DELETE from estadisticas where jugador = (select codigo from jugadores where nombre = '$jugador_elegido')");
        
        $preparedStatement = $dwes->exec("DELETE from jugadores where nombre = '$jugador_elegido'");
        
        $dwes->exec("INSERT INTO jugadores(nombre,procedencia,altura,peso,posicion,nombre_equipo) VALUES ('".$nombre_nuevo."', '".$procedencia."', '".$altura."', '".$peso."', '".$posicion."' ,'".$equipo_elegido."')");
        
        $dwes->commit();
        
    }catch(Exception $e) {
        
        if($dwes->inTransaction()){
            $dwes->rollback();
        }
        $success = false;
    }
    $dwes = null;
    
    $dwes->close();
    return $success;
}

function modificar_peso($array){
    
    
    $dwes = getConexion();
    $success = true;
    try{
        
        $dwes->beginTransaction();
        
        foreach($array as $nombre => $peso){
            
            if($nombre !== 'actualizar') {
                
                $peso_nuevo = floatval($peso);
                
                $dwes->exec("UPDATE `jugadores` set `peso` = '" .$peso_nuevo."' where `nombre` = '".str_replace('_',' ',$nombre)."'");
                
            }
            
        }
        
        $dwes->commit();
        
    }catch(Exception $e) {
        echo $e;
        die();
        if($dwes->inTransaction()){
            $dwes->rollback();
        }
        $success = false;
    }
    $dwes = null;
    
    $dwes->close();
    return $success;    
}

//print (getEquipos());


?>
