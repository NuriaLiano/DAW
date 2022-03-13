<?php

class Electronica extends Producto 
{

    private $plazoGarantia;
    

    public function __construct($codigo, $precio, $nombre,Categoria $categoria, $garantia)
    {
        parent::__construct($codigo, $precio, $nombre, $categoria);
        $this->plazoGarantia = $garantia;
    }
  

    public function getPlazoGarantia()
    {
        return $this->plazoGarantia;
    }


    public function muestra()
    {
        return parent::muestra() . " Su plazo de garantia es " . $this->plazoGarantia." años";
    }
}

?>