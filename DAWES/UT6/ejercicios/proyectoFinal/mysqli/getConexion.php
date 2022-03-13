<?php

/**
 * Función que devuelve una conexión MySQL
 *
 * @param string $base_de_datos Base de datos a la que nos queremos conectar
 * @param string $servidor Servidor que corre la instancia de MySQL (localhost por defecto)
 * @param string $usuario Usuario de la base de datos (root por defecto)
 * @param string $password Contraseña de la base de datos (vacía por defecto)
 * @param integer $puerto Puerto de MySQL (3306 por defecto)
 *
 * @return mysqli Instancia de la base de datos
 */
function getConexionMySQLi($base_de_datos, $servidor = "localhost", $usuario = "root", $password = "", $puerto = 3306)
{
    $conexion = new mysqli($servidor, $usuario, $password, $base_de_datos, $puerto);
    $conexion->set_charset("utf8");
    $error = $conexion->connect_errno;
    if ($error != null) {
        print "<p>Se ha producido el error: $conexion->connect_error.</p>";
        exit();
    }

    return $conexion;
}
