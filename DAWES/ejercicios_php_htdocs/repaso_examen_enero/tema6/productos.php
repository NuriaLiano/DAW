<?php
    class Producto{

        private $codigo, $precio, $nombre, $categoria;
        function __construct($codigo, $precio, $nombre, $categoria){
            $this->codigo = $codigo;
            $this->precio = $precio;
            $this->nombre = $nombre;
            $this->categoria = $categoria;
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
            echo "codigo :".$this->codigo;
            echo "<br/>";
            echo "precio :".$this->precio;
            echo "<br/>";
            echo "nombre :".$this->nombre;
            echo "<br/>";
            echo "categoria :".$this->categoria;
        }




    }

?>