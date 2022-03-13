<?php

function getConexion()
{
    $opciones = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );
    $conexion = new PDO('mysql:host=localhost;dbname=dwes_05_mapa', 'root', '', $opciones);
    
    return $conexion;
    unset($conexion);

}

function getLocalizaciones() {
    $listadoUbicaciones = [];
    $conexion=getConexion();
    $resultado = $conexion->query('SELECT * FROM localizaciones');
    while ($local = $resultado->fetch(PDO::FETCH_ASSOC)) {
        array_push($listadoUbicaciones, $local);
    }
    return $listadoUbicaciones;
}
?>