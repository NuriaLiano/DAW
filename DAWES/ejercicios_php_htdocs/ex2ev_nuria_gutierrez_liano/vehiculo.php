<?php
class Vehiculo {
    private $color, $marca, $potencia, $clase, $matricula;

    public function __construct($color, $marca, $potencia, $clase, $matricula){
        $this->color = $color;
        $this->marca = $marca;
        $this->potencia = $potencia;
        $this->clase = $clase;
        $this->matricula = $matricula;
    }

    public function toString(){
        return $this->color .$this->marca. $this->potencia.  $this->matricula;
        /*echo "color :".$this->color;
        echo "<br/>";
        echo "marca :".$this->marca;
        echo "<br/>";
        echo "potencia :".$this->potencia;
        echo "<br/>";
        echo "clase :".$this->clase;
        echo "<br/>";
        echo "matricula :".$this->matricula;*/
    }

    public function getMarca(){
        return $this->marca;
    }
    
    public function getColor(){
        return $this->color;
    }
    
    public function getPotencia(){
        return $this->potencia;
    }
    
    public function getClase(){
        return $this->clase;
    }
    
    public function getMatricula(){
        return $this->matricula;
    }
}
?>