<?php
    class BD {
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
        
        public function getLocalizaciones() {
            $listadoUbicaciones = [];
            $conexion = $this->getConexion();
            $resultado = $conexion->query('SELECT * FROM localizaciones');
            while ($local = $resultado->fetch(PDO::FETCH_OBJ)) {
                array_push($listadoUbicaciones, $local);
            }
            return $listadoUbicaciones;
        }


    }
?>