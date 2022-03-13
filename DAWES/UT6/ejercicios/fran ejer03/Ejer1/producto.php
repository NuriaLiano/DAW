<?php

class Producto 
{

    protected $codigo;

    protected $precio;

    protected $nombre;
    
    protected $categoria; 

    public function __construct($codigo, $precio, $nombre,  $categoria)
    {
        $this->codigo = $codigo;
        $this->precio = $precio;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function muestra()
    {
        return " El código del producto es:  " . $this->codigo . " Su precio es: " . $this->precio . "
                Su nombre es: " . $this->nombre." Su categoria es: ".$this->categoria;
    }
}

?>