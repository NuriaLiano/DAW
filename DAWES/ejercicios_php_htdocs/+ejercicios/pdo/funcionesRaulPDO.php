<?php

function getConexionPDO()
{
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $conexion = new PDO('mysql:host=localhost;dbname=dwes_02_libros', 'root', '', $opciones);
    return $conexion;
}

function insertarLibro($datosLibros) {
    $consulta = false;
    $conexion = getConexionPDO();
    $sql = "INSERT INTO libros (titulo,ano_edicion,precio,fecha_adquisicion) VALUES (?,?,?,?)";
    
    $resultado= $conexion->prepare($sql);
    
    if($resultado->execute($datosLibros)) {
        $consulta = true;
    };
    return $consulta;
    
}

function mostrarLibros()
{
    $conexion = getConexionPDO();
    $resultado = $conexion->query('SELECT * FROM libros');
    $libros = [];
    while ($libro = $resultado->fetch()) {
        $libros[] = [
            'ejemplar' => $libro['ejemplar'], 
            'titulo' => $libro['titulo'],
            'ano_edicion' => $libro['ano_edicion'],
            'precio' => $libro['precio'], 
            'fecha_adquisicion' => $libro['fecha_adquisicion']
        ];
    }
    
    unset($conexion);
    return $libros;
}

function borrarLibros($ejemplar)
{
    $conexion = getConexionPDO();
    $conexion->exec("DELETE FROM libros WHERE ejemplar = " . $ejemplar);
    unset($conexion);
}
