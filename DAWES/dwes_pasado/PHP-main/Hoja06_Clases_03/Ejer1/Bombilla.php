<?php


class Bombilla implements iEncendible
{
private $horasDeVida;

    /**
     * Bombilla constructor.
     * @param $horasDeVida
     */
    public function __construct($horasDeVida)
    {
        $this->horasDeVida = $horasDeVida;
    }


    public function encenderse()
    {
        if ($this->horasDeVida>0) {
            echo "<br>Has encendido la bombilla";
            $this->horasDeVida-=2;
        }else{
            echo "<br>La bombilla no rula";
        }
    }

    public function apagarse()
    {
        echo "<br>Has apagado la bombilla";
    }
}