<?php

class Circulo
{
    private $radio;

    /**
     * Circulo constructor.
     * @param $radio
     */
    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    /**
     * @return mixed
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * @param mixed $radio
     */
    /*  public function setRadio($radio)
      {
          $this->radio = $radio;
      }*/

    public function __set($var, $valor)
    {
        if (property_exists(__CLASS__, $var)) {
            $this->$var = $valor;
        } else {
            echo "No existe el atributo $var.";
        }

    }

    public function __get($var)
    {
        if (property_exists(__CLASS__, $var)) {
            return $this->$var;
        }
        return NULL;
    }
}