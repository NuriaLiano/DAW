<?php


class Producto
{
    private $codigo;
    private $modelo;
    private $precio;
    private $año;
    private $bateria;

    /**
     * Producto constructor.
     * @param $codigo
     * @param $modelo
     * @param $precio
     * @param $año
     * @param $bateria
     */
    public function __construct($codigo, $modelo, $precio, $año, $bateria)
    {
        $this->codigo = $codigo;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->año = $año;
        $this->bateria = $bateria;
        self::$numProductos;
    }


    public function mostrar()
    {
        return "el producto " . $this->modelo . " cuyo precio es " . $this->precio . " tiene " . $this->bateria . " mA de bateria";
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getAño()
    {
        return $this->año;
    }

    /**
     * @param mixed $año
     */
    public function setAño($año)
    {
        $this->año = $año;
    }

    /**
     * @return mixed
     */
    public function getBateria()
    {
        return $this->bateria;
    }

    /**
     * @param mixed $bateria
     */
    public function setBateria($bateria)
    {
        $this->bateria = $bateria;
    }

}