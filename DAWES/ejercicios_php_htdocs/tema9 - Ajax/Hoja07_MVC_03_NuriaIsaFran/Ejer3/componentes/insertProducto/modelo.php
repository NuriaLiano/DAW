<?php 

function obtenerFamilias()
{
    $listaFamilias = [];
    
    $bbdd = new BD();
    
    $conexion = $bbdd->conexionPDO();
    
    $resultado = $conexion->query("SELECT codigo, nombre FROM familias");
    
    while ($familia = $resultado->fetch(PDO::FETCH_OBJ)) {
        array_push($listaFamilias, $familia);
    }
    
    return $listaFamilias;
}

function insertarProducto($cod, $nombre, $descrip, $precio, $familia)
{
    $todoBien = false;
    
    $bbdd = new BD();
    
    $conexion = $bbdd->conexionPDO();
    
    $conexion->beginTransaction();
    
    $insertProducto = $conexion->prepare('INSERT INTO productos (codigo, nombre, descripcion, precio, familia) VALUES (?,?,?,?,?)');
    $insertProducto->bindParam(1, $cod, PDO::PARAM_STR);
    $insertProducto->bindParam(2, $nombre, PDO::PARAM_STR);
    $insertProducto->bindParam(3, $descrip, PDO::PARAM_STR);
    $insertProducto->bindParam(4, $precio, PDO::PARAM_STR);
    $insertProducto->bindParam(5, $familia, PDO::PARAM_STR);
    
    $insertProducto->execute();
    $numeroProductosInsertados = $insertProducto->rowCount();
    
    
    
    if ($numeroProductosInsertados == 1) {
        $conexion->commit();
        echo"Los cambios se han hecho correctamente";
        $todoBien = true;
    } else {
        $conexion->rollback();
        echo "Error";
    }
    
    unset($conexion);
    
    return $todoBien;
}
?>