<?php 
    function getConexion() {
        //utlizar el constructor y metodos de poo
        $conexion = new mysqli ('localhost', 'root', 'usuarioalumno123', 'dwes_03_funicular');
        $conexion -> set_charset("utf-8");
        $error = $conexion -> connect_errno;
        if ($error != null) {
            print("<p>Se ha producido un error: $conexion -> connect_errno </p>");
            exit();
        }else{
            print ("La conexion ha funcionado");
        }
        
        return $conexion;
    }
    
//getConexion();
?>