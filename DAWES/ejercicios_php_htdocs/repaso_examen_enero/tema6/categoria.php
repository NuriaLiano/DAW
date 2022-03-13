<?php
    include_once 'productos.php';

    class Categoria {
        private $id, $nombre;

        function __construct($id, $nombre){
            $this->id = $id;
            $this->nombre = $nombre; 
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

        function mostrar(){
            echo "id :".$this->id;
            echo "<br/>";
            echo "nombre :".$this->nombre;
        }



    }





?>