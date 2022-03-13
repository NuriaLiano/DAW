<?php

include_once 'includes/BaseDatos.class.php';

class Login
{
    
    protected $usuario;
    
    protected $password;
    
    
    
    public function __construct($usuario, $pass)
    {
        $this->usuario = $usuario;
        $this->password = $pass;
       
    }

    public function getFoto()
    {
        return $this->foto;
    }
    
 
    public function getUsuario()
    {
        return $this->usuario;
    }
    

    public function getPassword()
    {
        return $this->password;
    }
    
   
  
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    
   public static function autenticar()
    {
        $listaUsuarios = [];
        
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
        $resultado = $conexion->query("SELECT usuario, password, foto FROM usuarios");
        
        while ($usuarios = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaUsuarios, $usuarios);
        }
        
        return $listaUsuarios;
    }
    
   
      
    
}

?>