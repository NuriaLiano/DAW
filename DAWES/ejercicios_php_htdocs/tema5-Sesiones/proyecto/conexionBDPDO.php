<?php

function getConnexion()
{
    $opciones = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );
    $conexion = new PDO('mysql:host=localhost;dbname=dwes_04_tienda', 'root', '', $opciones);
    
    return $conexion;
    unset($conexion);

}
?>
