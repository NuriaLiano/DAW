<?php

require_once "conexionPDO.php";

function llegada()
{
    $todoBien = true;
    $conexion = getConexionPDO("dwes_03_funicular");
    $conexion->beginTransaction();
    $resultado = $conexion->prepare('DELETE FROM pasajeros');
    if ($resultado->execute() != true) {
        $todoBien = false;
    }
    $resultado = $conexion->prepare("UPDATE plazas SET reservada=0");
    if ($resultado->execute() != true) {
        $conexion->commit();
        $todoBien = false;
    }
    if ($todoBien) {
        $conexion->commit();
        return true;
    } else {
        $conexion->rollBack();
        return false;
    }
};

function getAsiento()
{
    $conexion = getConexionPDO("dwes_03_funicular");
    $resultado = $conexion->query('SELECT numero, precio FROM plazas WHERE reservada=0');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        $usuarios[] = array("numero" => $objetoDatos["numero"], "precio" => $objetoDatos["precio"]);
        $objetoDatos = $resultado->fetch();
    }
    return $usuarios;
};


function addPasajero($dni, $nombre, $numero_plaza)
{
    $todoBien = true;
    $conexion = getConexionPDO("dwes_03_funicular");
    $conexion->beginTransaction();
    $resultado = $conexion->prepare('INSERT INTO pasajeros (dni, nombre, numero_plaza, sexo)VALUES (?,?,?,"-")');
    $resultado->bindParam(1, $dni);
    $resultado->bindParam(2, $nombre);
    $resultado->bindParam(3, $numero_plaza);
    if ($resultado->execute() != true) {
        $todoBien = false;
    }
    $resultado = $conexion->prepare("UPDATE plazas SET reservada=1 WHERE numero=?");
    $resultado->bindParam(1, $numero_plaza);
    if ($resultado->execute() != true) {
        $conexion->commit();
        $todoBien = false;
    }
    if ($todoBien) {
        $conexion->commit();
        return true;
    } else {
        $conexion->rollBack();
        return false;
    }
};

function actualizarPrecio()
{
    $todoBien = true;
    $conexion = getConexionPDO("dwes_03_funicular");
    $conexion->beginTransaction();
    $resultado = $conexion->prepare("UPDATE plazas SET precio=? WHERE numero=?");
    $resultado->bindParam(1, $precio);
    $resultado->bindParam(2, $numero_plaza);
    if ($resultado->execute() != true) {
        $conexion->commit();
        $todoBien = false;
    }
    if ($todoBien) {
        $conexion->commit();
        return true;
    } else {
        $conexion->rollBack();
        return false;
    }
}

function usuarioCorrecto($usuario, $contrase??a)
{
    $conexion = getConexionPDO("dwes_03_funicular");
    $resultado = $conexion->prepare('SELECT usuario, contrase??a FROM usuarios WHERE usuario=? and contrase??a=?');
    $resultado->bindParam(1, $usuario);
    $resultado->bindParam(2, $contrase??a);
    if ($resultado->execute()) {
        while ($objetoDatos = $resultado->fetch()) {
            $usuarios[] = array("usuario" => $objetoDatos["usuario"], "contrase??a" => $objetoDatos["contrase??a"]);
        }
    }
    return count($usuarios);
}

function addUsuario($usuario, $contrase??a)
{
    $conexion = getConexionPDO("dwes_03_funicular");
    $resultado = $conexion->prepare('INSERT INTO usuarios (usuario, contrase??a)VALUES (?,?)');
    $resultado->bindParam(1, $usuario);
    $resultado->bindParam(2, $contrase??a);
    if ($resultado->execute()) {
        return true;
    } else {
        return false;
    }
}

function contrase??aCorrecta($contrase??a, $contrase??a2)
{
    if ($contrase??a === $contrase??a2) {
        return true;
    }else{
        return false;
    }
}

/*function usuarioCorrecto($usuario, $contrase??a)
{
    $conexion = getConexionPDO("dwes_03_funicular");
    $resultado = $conexion->query('SELECT usuario, contrase??a FROM usuarios WHERE usuario=? AND contrase??a=?');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        $usuarios[] = array("usuario" => $objetoDatos["usuario"], "contrase??a" => $objetoDatos["contrase??a"]);
        $encriptada=md5($contrase??a);
        $resultado->bindParam('ss',$usuario,$encriptada);
        $resultado->execute();
        //$resultado->bind_result($num);
        $objetoDatos = $resultado->fetch();
    }
    if (count($usuarios)==1) {
        return true;
    }
}*/