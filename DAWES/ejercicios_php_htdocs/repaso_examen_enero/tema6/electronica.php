<?php
include_once 'productos.php';
    class Electronica extends Productos {


        private $codigo, $precio, $nombre, $plazo;

        function __construct($codigo, $precio, $nombre, $categoria, $plazo){
            parent::__construct($codigo,$precio,$nombre,$categoria);
            $this->plazo = $plazo;

        }

        function __get($propiedad){
            if(property_exists($this,$propiedad)){
                return $this->$propiedad;
            }
        }
        function __set($propiedad,$valor){
            if(property_exists($this,$propiedad)){
               $this->$propiedad = $valor;
            }
        }

        public function mostrar(){
            $datosCuenta = parent::mostrar();
            $datosCuenta = "plazo garantia: ". $this->plazoGarantia;
            echo "<br/>";
            echo $datosCuenta;
        }
    }
?>
