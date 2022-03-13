<?php
    include_once 'vehiculo.php';
    //include_once 'reparar.php';
    //class Moto extends Vehiculo implements iReparar{
    class Moto extends Vehiculo {
        public $tipo;
        public function __construct($color, $marca, $potencia, $clase, $matricula, $tipo){
            parent::__construct($color, $marca, $potencia, $clase, $matricula);
            $this->tipo = $tipo;
        }
        public function repararruedas(){
            echo "Reparar ruedas";    
        }
        public function repararmotor(){
            echo "Reparar motor";    
        }
        public function toString(){
            $datos = parent::toString();
            return $datos . $this->tipo;
        }   

    }


?>