<?php
    function getConexion(){
        $conexion = new mysqli("localhost", "root", "", "dwes_01_nba");
        $conexion->set_charset("utf8");
        $error = $conexion->connect_errno;  
        if ($error != null){
            print "<p>Se ha producido el error: $conexion->connect_error.</p>";
            exit();
        }
        else {
            return $conexion; 
            echo "La conexion con MYSQLI funciona correctamente";
        }
        
    }   

    function getConexionPDO(){
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $conexion = new PDO('mysql:host=localhost;dbname=dwes_01_nba', 'root','' , $opciones);
        echo "La conexion con PDO funciona correctamente";
        return $conexion;
        unset($conexion); 

    }





?>
