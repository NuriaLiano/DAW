<?php 

function insertarComentarios($id, $usu, $producto, $coment)
{
    $todoBien = false;
    
    $bbdd = new BD();
    
    $conexion = $bbdd->conexionPDO();
    
    $conexion->beginTransaction();
    
    $insertProducto = $conexion->prepare('INSERT INTO comentarios (id, usu, product, comentario) VALUES (?,?,?,?)');
    $insertProducto->bindParam(1, $id, PDO::PARAM_STR);
    $insertProducto->bindParam(2, $usu, PDO::PARAM_STR);
    $insertProducto->bindParam(3, $producto, PDO::PARAM_STR);
    $insertProducto->bindParam(4, $coment, PDO::PARAM_STR);
    
    
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