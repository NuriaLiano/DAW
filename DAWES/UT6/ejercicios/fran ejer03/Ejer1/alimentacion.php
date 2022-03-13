<?php

class Alimentacion extends Producto 
{

    private $mes;
    
    private $anio;
    

    public function __construct($codigo, $precio, $nombre,Categoria $categoria, $mes, $anio)
    {
        parent::__construct($codigo, $precio, $nombre, $categoria);
        $this->mes = $mes;
        $this->anio = $anio;
    }

    
    public function getMes()
    {
        return $this->mes;
    }


    public function getAnio()
    {
        return $this->anio;
    }


    public function muestra()
    {
        return parent::muestra() . " Su fecha de caducidad es " . $this->mes."/".$this->anio;
    }
}

?>