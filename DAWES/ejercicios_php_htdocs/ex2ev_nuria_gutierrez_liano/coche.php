<?php
    include_once 'vehiculo.php';
    //include_once 'reparar.php';
    //class Coche extends Vehiculo implements iReparar{
    class Coche extends Vehiculo {
        public $numpuertas, $tamanomaletero;
        public function __construct($color, $marca, $potencia, $clase, $matricula, $numpuertas, $tamanomaletero){
            parent::__construct($color, $marca, $potencia, $clase, $matricula);
            $this->numpuertas = $numpuertas;
            $this->tamanomaletero = $tamanomaletero;
        }
        public function repararruedas(){
            echo "Reparar ruedas";    
        }
        public function repararmotor(){
            echo "Reparar motor";   
        } 
        public function toString(){
            $datos = parent::toString();
            return $datos . $this->numpuertas . $this->tamanomaletero;
        }  

    }


?>