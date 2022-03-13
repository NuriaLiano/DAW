<?php

function registrar($nombre_usuario, $hash_password, $foto)
{
    $todoBien = false;

    $bbdd = new BD();

    $conexion = $bbdd->conexionPDO();

    $conexion->beginTransaction();

    $insertUsuario = $conexion->prepare('INSERT INTO usuarios (usuario, password, foto) VALUES (?,?,?)');
    $insertUsuario->bindParam(1, $nombre_usuario, PDO::PARAM_STR);
    $insertUsuario->bindParam(2, $hash_password, PDO::PARAM_STR);
    $insertUsuario->bindParam(3, $foto, PDO::PARAM_STR);

    $insertUsuario->execute();
    $numeroUsuariosInsertados = $insertUsuario->rowCount();

    if ($numeroUsuariosInsertados == 1) {
        $conexion->commit();
        echo "Los cambios se han hecho correctamente";
        $todoBien = true;
    } else {
        $conexion->rollback();
        echo "Error";
    }

    unset($conexion);

    return $todoBien;
}

?>