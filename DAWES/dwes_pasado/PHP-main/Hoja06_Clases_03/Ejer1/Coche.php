<?php


class Coche implements iEncendible
{

    private $gasolina, $bateria, $estado;

    /**
     * Coche constructor.
     * @param $gasolina
     * @param $bateria
     * @param $estado
     */
    public function __construct()
    {
        $this->gasolina = 0;
        $this->bateria = 10;
        $this->estado = false;
    }

    public function encenderse()
    {
        if ($this->gasolina > 0 && $this->bateria > 0 && $this->estado = false) {
            echo "<br>El coche ha arrancado";
            $this->gasolina--;
            $this->bateria--;
            $this->estado = true;
        } else {
            echo "<br>El coche no se puede encender por falta de vainas";
        }
    }

    public function apagarse()
    {
        if ($this->estado = true) {
            $this->estado = false;
            echo "<br>El coche se ha parado";
        } else {
            echo "El coche ya está parado";
        }
    }

    public function repostar($litros)
    {
        $this->gasolina += $litros;
    }

    /**
     * @return int
     */
    public function getGasolina()
    {
        return $this->gasolina;
    }

    /**
     * @param int $gasolina
     */
    public function setGasolina($gasolina)
    {
        $this->gasolina = $gasolina;
    }

    /**
     * @return int
     */
    public function getBateria()
    {
        return $this->bateria;
    }

    /**
     * @param int $bateria
     */
    public function setBateria($bateria)
    {
        $this->bateria = $bateria;
    }

    /**
     * @return false
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param false $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }




}