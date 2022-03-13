<?php 

function conexionPDO() {
    
    
    $conexion = new PDO('mysql:host=localhost;dbname=dwes_01_nba', 'root','');
    return $conexion;
}

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