<?php


abstract class Medico
{
protected $nombre, $edad, $turno;

    /**
     * Medico constructor.
     * @param $nombre
     * @param $edad
     * @param $turno
     */
    public function __construct($nombre, $edad, $turno)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->turno = $turno;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * @param mixed $turno
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;
    }

    public function __toString()
    {
        return "<strong>El medico: " . $this->nombre . " tiene " . $this->edad . " años y está de turno de " . $this->turno . ".</strong>";
    }

}