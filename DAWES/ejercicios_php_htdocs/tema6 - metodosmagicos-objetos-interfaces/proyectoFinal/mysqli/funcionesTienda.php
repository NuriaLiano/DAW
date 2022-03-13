<?php
require_once 'getConexion.php';

function autenticar($nombre_usuario, $hash_password)
{
    $resultado = false;

    $conexion = getConexionMySQLi("dwes_04_tienda");
    $consulta = $conexion->stmt_init();

    // BINDING CONSULTA
    $consulta->prepare('SELECT password FROM usuarios WHERE usuario = ?');
    $consulta->bind_param('s', $nombre_usuario);
    $consulta->execute();
    $consulta->bind_result($password);

    // VOLCAMOS EL RESULTADO EN UN ARRAY
    while ($consulta->fetch()) {
        if ($password == $hash_password) {
            $resultado = true;
            break;
        }
    }

    // CERRAMOS CONEXIÓN
    $consulta->close();

    return $resultado;
}

function registrar($nombre_usuario, $hash_password)
{
    $resultado = false;

    $conexion = getConexionMySQLi("dwes_04_tienda");
    $consulta = $conexion->stmt_init();

    // BINDING INSERCIÓN
    $consulta->prepare('INSERT INTO usuarios (usuario, password) VALUES (?, ?)');
    $consulta->bind_param('ss', $nombre_usuario, $hash_password);
    $consulta->execute();

    // COMPROBACIÓN
    $numero_usuarios_registrados = $consulta->affected_rows;
    if ($numero_usuarios_registrados == 1) {
        $resultado = true;
    }

    // CERRAMOS CONEXIÓN
    $consulta->close();

    return $resultado;
}

function obtener_productos()
{
    $conexion = getConexionMySQLi("dwes_04_tienda");
    $consulta = $conexion->stmt_init();

    // BINDING CONSULTA
    $consulta->prepare("SELECT p.codigo, p.nombre, p.descripcion, p.precio, f.nombre FROM productos p INNER JOIN familias f ON p.familia = f.codigo");
    $consulta->execute();
    $consulta->bind_result($codigo, $nombre, $descripcion, $precio, $familia);

    // VOLCAMOS EL RESULTADO EN UN ARRAY
    $resultado = [];
    while ($consulta->fetch()) {
        $resultado[$codigo] = [
            "nombre" => $nombre,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "familia" => $familia
        ];
    }

    // CERRAMOS CONEXIÓN
    $consulta->close();

    return $resultado;
}

function obtener_precio($codigo_producto, $unidades)
{
    $conexion = getConexionMySQLi("dwes_04_tienda");
    $consulta = $conexion->stmt_init();

    // BINDING CONSULTA
    $consulta->prepare("SELECT p.nombre, p.precio * ? FROM productos p WHERE p.codigo = ?");
    $consulta->bind_param('is', $unidades, $codigo_producto);
    $consulta->execute();
    $consulta->bind_result($nombre, $precio);

    // VOLCAMOS EL RESULTADO EN UN ARRAY
    $resultado = [];
    while ($consulta->fetch()) {
        $resultado[$codigo_producto] = [
            "nombre" => $nombre,
            "precio" => $precio
        ];
    }

    // CERRAMOS CONEXIÓN
    $consulta->close();

    return $resultado;
}
