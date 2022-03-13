<?php

require_once "conexionPDO.php";




function getComercio()
{
    $conexion = getConexionPDO("dwes_examen_202011");
    $resultado = $conexion->query('SELECT nombre FROM comercios');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        $comercios[] = array("nombre" => $objetoDatos["nombre"]);
        $objetoDatos = $resultado->fetch();
    }
    return $comercios;
};


function comercioVenta()
{

    $conexion = getConexionPDO("dwes_examen_202011");
    $resultado = $conexion->query('SELECT id_comercio ,nombre, imagen, count(nombre)as ventas
     FROM registros_ventas inner join comercios on id_comercio=id group by id_comercio order by ventas desc limit 1');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        $comercio = array("nombre" => $objetoDatos["nombre"], "ventas" => $objetoDatos["ventas"], "imagen" => $objetoDatos["imagen"]);
        $objetoDatos = $resultado->fetch();
    }
    return $comercio;
}

function getCliente()
{
    $conexion = getConexionPDO("dwes_examen_202011");
    $resultado = $conexion->query('SELECT nombre, apellidos FROM clientes');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        $clientes[] = array("nombre" => $objetoDatos["nombre"], "apellidos" => $objetoDatos["apellidos"]);
        $objetoDatos = $resultado->fetch();
    }
    return $clientes;
};

/*function getVentas()
{
    $conexion = getConexionPDO("dwes_examen_202011");
    $resultado = $conexion->query('SELECT clientes.nombre, clientes.apellidos, 
    registros_ventas.importe,registros_ventas.fecha FROM clientes INNER JOIN 
    registros_ventas ON clientes.id=registros_ventas.id_cliente INNER JOIN comercios ON
    registros_ventas.id_comercio=comercios.id WHERE comercio.nombre="pizzeria');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        $ventas[] = array(
            "nombre" => $objetoDatos["clientes.nombre"],
            "apellidos" => $objetoDatos["clientes.apellidos"],
            "importe" => $objetoDatos["registros_ventas.importe"],
            "fecha" => $objetoDatos["registros_ventas.fecha"],
        );
        $objetoDatos = $resultado->fetch();
    }
    return $ventas;
};
*/


function addCompra($id_cliente, $id_comercio, $fecha, $importe)
{
    $conexion = getConexionPDO("dwes_examen_202011");
    $conexion->beginTransaction();
    try {
        $sql = "INSERT INTO registros_ventas (id_cliente, id_comercio, fecha , importe)
                    VALUES (?, ?, ?, ?);";
        $insert = $conexion->prepare($sql);
        $insert->bindParam(1, $id_cliente);
        $insert->bindParam(2, $id_comercio);
        $insert->bindParam(3, $fecha);
        $insert->bindParam(4, $importe);

        if ($insert->execute() == false) {
            throw new Exception("Error al insertar la compra");
        }
        $conexion->commit();
        unset($conexion);
        return true;
    } catch (Exception $e) {
        $conexion->rollBack();
        unset($conexion);
        return false;
    }
}
