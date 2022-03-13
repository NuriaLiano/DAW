<?php

class BD
{
    private $conexion;
    
    private $host = "localhost";
    private $base = "dwes_04_tienda";
    private $usuario = "root";
    private $contra = "";
    
    
    function __construct()
    {
        $this->conexion = new PDO("mysql:host={$this->host}; dbname={$this->base}"
        , $this->usuario, $this->contra,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    
    
    function conexionPDO()
    {
        
        return $this->conexion;
    }
    
   
    
}
?>