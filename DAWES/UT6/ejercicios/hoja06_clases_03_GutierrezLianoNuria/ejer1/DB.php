<?php

class db {
    protected $localhost, $usuario, $password, $bbdd;
    
    function __construct($localhost, $usuario, $password, $bbdd) {
        $this->localhost = $localhost;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->bbdd = $bbdd;
    }
    
    function getConexion() {
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );
        $conexion = new PDO('mysql:host=' . $this->localhost . '; dbname=' . $this->bbdd, $this->usuario, $this->password, $opciones);
        return $conexion;
    }
    
    public function getProductos() {
        $listadoProductos = [];
        $conexion = $this->getConexion();
        $resultado = $conexion->query('SELECT codigo, precio, nombre, categoria FROM productos');
        while ($productos = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listadoProductos, $productos);
        }
        return $listadoProductos;
    }
    
    public function getCategorias() {
        $conexion = $this->getConexion();
        $listaCat = [];
        $resultado = $conexion->query('SELECT id, nombre FROM categoria');
        while ($categorias = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaCat, $categorias);
        }
        return $listaCat;
    }
    
    function getCategoriaAlimentacion($c) {
        $conexion = $this->getConexion();
        $listaProd = [];
        $resultado = $conexion->query("SELECT codigo, precio, nombre, categoria, mesCaducidad,
        anioCaducidad FROM productos INNER JOIN alimentacion ON productos.codigo = alimentacion.id
        WHERE categoria = '$c' ");
        while ($producto = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaProd, $producto);
        }
        return $listaProd;
    }
    
    function getCategoriaElectronica($c) {
        $conexion = $this->getConexion();
        $listaProd = [];
        $resultado = $conexion->query("SELECT codigo, precio, nombre, categoria,plazoGarantia
        FROM productos INNER JOIN electronica ON productos.codigo = electronica.id WHERE categoria = '$c' ");
        while ($productos = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaProd, $productos);
        }
        return $listaProd;
    }
}
?>