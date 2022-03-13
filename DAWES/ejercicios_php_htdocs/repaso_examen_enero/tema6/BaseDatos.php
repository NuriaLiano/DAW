<?php
    class conexionDB{
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
            //echo "la conexion funciona";
            return $conexion;
        }
    }

    //$conexion = new conexionDB("localhost", "root", "", "dwes_supermercado");
    //$conexion->getConexion();

    //METOS DE ACCESO A LA BASE DE DATOS
    function getProductos (){
        $conexion = new conexionDB("localhost", "root", "", "dwes_supermercado");
        $db = $conexion->getConexion();

        $resultado = $db->query('SELECT * FROM productos');
        $arrayProductos = $resultado->fetch();
        return $arrayProductos;



    }







?>