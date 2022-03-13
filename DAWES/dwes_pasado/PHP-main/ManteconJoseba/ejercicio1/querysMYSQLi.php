<?php
require_once "conexionMYSQLi.php";

function clienteGasto()
{
    $conexion = getConexionMYSQLi();
    $consulta = ('SELECT sum(importe) as importe, id_cliente, nombre, apellidos, imagen FROM registros_ventas
    INNER JOIN clientes ON id_cliente=id ORDER BY importe desc limit 1');
    if ($resultado = $conexion->query($consulta)) {
        while ($cliente = $resultado->fetch_array()) {
            $clientes = array(
                "importe" => $cliente["importe"], "id_cliente" => $cliente["id_cliente"],
                "nombre" => $cliente["nombre"], "apellidos" => $cliente["apellidos"], "imagen" => $cliente["imagen"]
            );
        }
        $resultado->close();
    }
    $conexion->close();
    return $clientes;
}
