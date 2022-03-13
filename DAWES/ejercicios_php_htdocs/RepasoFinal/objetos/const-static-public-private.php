<?php
    class BaseDatos {
        const USUARIO = 'dwes';

        public static $num = 0;
        private static $num_productos = 0;
        public static function nuevoProductoPublica() {
            echo "hola";
        }
        private static function nuevoProductoPrivado() {
            
        }
    }
    
    
    
    //acceder a constantes
    /*se debe utilizar el nombrede la clase y el operador ::, llamado operador de resolución de ámbito (que se utiliza para acceder a los elementos de una clase). */
    
    //acceder a constantes a traves del objeto
    echo BaseDatos::USUARIO;
    

    //acceder a metodos estaticos publicos
    BaseDatos::nuevoProductoPublica();
    BaseDatos::$num;

    //acceder a metodos o atributos privados estatico
    self::$num_productos++;
    self::nuevoProductoPrivado();

?>