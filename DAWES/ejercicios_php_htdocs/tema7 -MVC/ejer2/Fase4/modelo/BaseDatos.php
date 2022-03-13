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
    
   
    
}
?>