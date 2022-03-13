<?php

function conexionPDO() {
    
    
    $conexion = new PDO('mysql:host=localhost;dbname=dwes_01_nba', 'root','');
    return $conexion;
}

function getEquiposPDO() {
    
    $equi = [];
    
    $conexion = conexionPDO();
    
    $resultado = $conexion->query('SELECT nombre, ciudad, conferencia, division FROM equipos');
    
    
    
    while ($equipos = $resultado->fetch(PDO::FETCH_OBJ))
    {
        array_push($equi, $equipos);
        
    }
    
    return $equi;
}


function jugadoresPorEquipoPDO($equipo)
{
    $jug = [];
    
    $conexion = conexionPDO();
    
    $resultado = $conexion->query("SELECT codigo,nombre,procedencia,altura,peso,posicion,nombre_equipo FROM jugadores WHERE nombre_equipo='$equipo'");
    
    while ($equipos = $resultado->fetch(PDO::FETCH_OBJ))
    {
        array_push($jug, $equipos);
        
    }
    
    return $jug;
}