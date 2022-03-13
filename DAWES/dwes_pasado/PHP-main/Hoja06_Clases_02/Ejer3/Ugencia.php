<?php
require_once "Medico.php";

class Ugencia extends Medico
{
private  $unidad;

    /**
     * Ugencia constructor.
     * @param $unidad
     */
    public function __construct($nombre, $edad, $turno,$unidad)
    {
        parent::__construct($unidad);
        $this->unidad = $unidad;
    }

    /**
     * @return mixed
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * @param mixed $unidad
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;
    }

public function __toString()
{
    return parent::__toString() ." y está en la". $this->unidad . " unidad <br>";
}
}