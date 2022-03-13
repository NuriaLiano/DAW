<?php

class BD
{

    private $host;

    private $base;

    private $usuario;

    private $contra;

    function __construct($host, $base, $usu, $contra)
    {
        $this->host = $host;
        $this->base = $base;
        $this->usuario = $usu;
        $this->contra = $contra;
    }

    function conexionPDO()
    {
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );
        $conexion = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->base, $this->usuario, $this->contra, $opciones);
        return $conexion;
    }

    function getProductos()
    {
        $listaProductos = [];

        $conexion = $this->conexionPDO();

        $resultado = $conexion->query('SELECT codigo, precio, nombre, categoria FROM producto');

        while ($productos = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaProductos, $productos);
        }

        return $listaProductos;
    }

    function getCategorias()
    {
        $listaCategorias = [];

        $conexion = $this->conexionPDO();

        $resultado = $conexion->query('SELECT id, nombre FROM categoria');

        while ($categorias = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaCategorias, $categorias);
        }

        return $listaCategorias;
    }

    function buscarPorCategoriaAlimentacion($cate)
    {
        $listaProductos = [];

        $conexion = $this->conexionPDO();

        $resultado = $conexion->query("SELECT codigo, precio, nombre, categoria, mesCaducidad, anioCaducidad FROM producto
INNER JOIN alimentacion ON producto.codigo = alimentacion.id
 WHERE categoria = '$cate' ");

        while ($productos = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaProductos, $productos);
        }

        return $listaProductos;
    }

    function buscarPorCategoriaElectronica($cate)
    {
        $listaProductos = [];

        $conexion = $this->conexionPDO();

        $resultado = $conexion->query("SELECT codigo, precio, nombre, categoria,plazoGarantia FROM producto 
INNER JOIN electronica ON producto.codigo = electronica.id
 WHERE categoria = '$cate' ");

        while ($productos = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaProductos, $productos);
        }

        return $listaProductos;
    }
}

?>