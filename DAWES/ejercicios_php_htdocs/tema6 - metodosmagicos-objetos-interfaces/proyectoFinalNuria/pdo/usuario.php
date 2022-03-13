<?php

class Usuario 
{
   
    protected $foto;
    
    protected $usuario;

    protected $password; 
    
    

    public function __construct($usuario, $pass, $foto)
    {
        $this->usuario = $usuario;
        $this->password = $pass;
        $this->foto = $foto;
    }
    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

 
}

?>