<?php

function getConnexion()
{
    $conexion = new mysqli('localhost', 'root', 'usuarioalumno123', 'dwes_04_tienda');
    $conexion->set_charset("utf-8");
    $error = $conexion->connect_errno;

    if ($error != null) {
        print "<p> Se ha producido el error: $conexion->connect_error.</p>";
        exit();
    } else {
        //print "hola, te has conectado correctamente";
    }
    return $conexion;
}
?>
