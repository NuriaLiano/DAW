<?php
function getConexion(){
    $localhost="localhost";
    $usuario="root";
    $contrase�a="";
    $bbdd="dwes_03_funicular";
    
    $conexion = new mysqli($localhost, $usuario , $contrase�a, $bbdd);
    $info=mysqli_get_server_info($conexion);
    
    if(!$conexion){
        echo "error $conexion->connect_errno";
    }else{
        //echo "Conexion correcta a base de datos dwes_01_nba ".$info;
        return $conexion;
    }
}




?>
