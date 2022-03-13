<?php

function getConexionPDO($bbdd)
{
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $conexion = new PDO('mysql:host=localhost;dbname=' . $bbdd, 'root', '', $opciones);
    return $conexion;
}

function addLibro($titulo, $año_edicion, $precio, $fecha_adquisicion)
{
    $conexion = getConexionPDO("dwes_02_libros");
    $resultado = $conexion->prepare('INSERT INTO libros (titulo, año_edicion, precio, fecha_adquisicion)VALUES (?,?,?,?)');
    $resultado->bindParam(1, $titulo);
    $resultado->bindParam(2, $año_edicion);
    $resultado->bindParam(3, $precio);
    $resultado->bindParam(4, $fecha_adquisicion);
    if ($resultado->execute()) {
        return true;
    } else {
        return false;
    }
};


function getLibro()
{

    $conexion = getConexionPDO("dwes_02_libros");
    $resultado = $conexion->query('SELECT id, titulo, año_edicion, precio, fecha_adquisicion FROM libros');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        $libros[] = array("id" => $objetoDatos["id"], "titulo" => $objetoDatos["titulo"], "año_edicion" => $objetoDatos["año_edicion"], "precio" => $objetoDatos["precio"], "fecha_adquisicion" => $objetoDatos["fecha_adquisicion"]);
        $objetoDatos = $resultado->fetch();
    }
    return $libros;
}

function borrarLibro($id)
{
    $conexion = getConexionPDO("dwes_02_libros");
    $registros = $conexion->prepare('DELETE FROM libros WHERE id=?');
    $registros->bindValue(1, $id);
    if ($registros->execute()) {
        return true;
    } else {
        return false;
    }
}
