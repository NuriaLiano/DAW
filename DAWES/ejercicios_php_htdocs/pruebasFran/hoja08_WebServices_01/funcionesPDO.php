<?php 
require_once 'conexionPDO.php';

function getEquiposPDO() {
    
    $listaEquipos = [];
    
    $conexion = conexionPDO();
    
    $resultado = $conexion->query('SELECT nombre, ciudad, conferencia, division FROM equipos');

    
    
    while ($equipos = $resultado->fetch(PDO::FETCH_OBJ))
    {  
        array_push($listaEquipos, $equipos);
        
    }
    
    return $listaEquipos;
}


function jugadoresPorEquipoPDO($equipo)
{
    $listaJugadores = [];
    
    $conexion = conexionPDO();
    
    $resultado = $conexion->query("SELECT codigo,nombre,procedencia,altura,peso,posicion,nombre_equipo FROM jugadores WHERE nombre_equipo='$equipo'");
    
    while ($equipos = $resultado->fetch(PDO::FETCH_OBJ))
    {
        array_push($listaJugadores, $equipos);
        
    }
   
    return $listaJugadores;
}


function modificarPesoJugadoresPDO($peso, $id)
{
    $conexion = conexionPDO();
    
    $consulta = "UPDATE jugadores SET jugadores.peso = :peso WHERE codigo = :id";
    
    $sql = $conexion->prepare($consulta);
    
    $sql->bindParam(':peso',$peso);
    
    $sql->bindParam(':id',$id);
    
    $sql->execute();
    
    unset($conexion);
    
}

function traspasoPDO($nombreBorrar,$id,$nombre,$procedencia,$altura,$peso,$posicion,$nombreEquipo) {
    
    
    $todoBien = false;
    $conexion = conexionPDO();
    
    $conexion->beginTransaction();
    
    
    $deleteEstadisticas = $conexion->prepare('DELETE FROM estadisticas WHERE jugador = ?');
    $deleteEstadisticas->bind_param('i', $id);
    $deleteEstadisticas->execute();
    
    
    $deleteJugador = $conexion->prepare('DELETE FROM jugadores WHERE nombre = ?');
    $deleteJugador->bind_param('s', $nombreBorrar);
    $deleteJugador->execute();
    $numeroJugadoresBorrados = $deleteJugador->affected_rows;
    
    
    $insertJugador = $conexion->prepare('INSERT INTO jugadores (codigo, nombre, procedencia, altura, peso, posicion, nombre_equipo) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $insertJugador->bind_param('issddss', $id, $nombre, $procedencia, $altura, $peso, $posicion, $nombreEquipo);
    $insertJugador->execute();
    $numeroJugadoresInsertados = $insertJugador->affected_rows;
    
    
    if (($numeroJugadoresBorrados == $numeroJugadoresInsertados) && ($numeroJugadoresBorrados == 1)) {
        $conexion->commit();
        $todoBien = true;
    } else {
        $conexion->rollback();
    }
    
    return $todoBien;
}


function idJugadorPDO($nombre) {
    
    $codigo = [];
    
    $conexion = conexionPDO();
    
    $resultado = $conexion->query("SELECT codigo FROM jugadores WHERE jugadores.nombre='$nombre'");
    
    
    while ($equipos = $resultado->fetch(PDO::FETCH_OBJ))
    {
        array_push($codigo, $equipos);
        
    }
    
    return $codigo;
    
    unset($conexion);
}

?>