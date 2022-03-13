<?php
    class Taller{
        private $capacidad;

        public function __construct($capacidad){
            if($capacidad > 7){
                echo "No puede haber mas de 7 vehículos";
            }else{
                $this->capacidad = $capacidad;
            }
        }

        public function getCapacidad(){
            return $this->capacidad;
        }

        public function estaVacio(){
            if($this->capacidad == 0){
                return "Esta vacío";
            }
        }

        public function estaLleno(){
            if($this->capacidad == 7){
                return "Esta lleno";
            }
        }

    }
?>