<?php
include_once 'productos.php';
    class Alimentacion  extends Productos{


        private $codigo, $precio, $nombre, $mes, $anio;

        function __construct($codigo, $precio, $nombre, $categoria, $mes, $anio){
            parent::__construct($codigo,$precio,$nombre,$categoria);
            $this->mes = $mes;
            $this->anio = $anio;
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
            $datosCuenta = "mes caducidad: ". $this->mes_cad."<br/>".
                "anio caducidad: ". $this->anio_cad;
            echo "<br/>";
            echo $datosCuenta;
        }

    }
?>