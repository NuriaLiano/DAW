<?php

/*para comprobar si es o no una instancia de una clase determinada. */


    class Producto {
        public $name;
        public function __construct() {
            $this->name = "pro";
        }
    }

    //crear el objeto
    $producto = new Producto();

    //comprobar si es de la clase producto
    $siono = get_class($producto);

    //comprobar si esta definido o no el objeto | devuelve true o false
    if(class_exists('Producto')){
        echo "el objeto existe";
    }

    //array con el nombre de todas las clases
    print_r(get_declared_classes());

    //crea un alias 
    class_alias('Producto','Articulo');
    $p = new Articulo();

    //array con los nombres de los metodos de una clase que son accesibles y desde donde se hace la llamada
    print_r(get_class_methods('Producto'));

    //comprobar si existe el metodo en el objeto o en la clase que se indica tanto si es accesible como si no | devuelve true o false
    if (method_exists('Producto','metodo')) {
    }
    
    //array nombres de los atributos de una clase que son accesibles y desde donde se hace la llamada 
    print_r(get_class_vars('Producto'));

    //array con los nombres de los atributos de un objetpo si son accesibles y desde donde se hace la llamada
    print_r(get_object_vars($producto));

    //true o false si existe el atributo en el objeto o la clase que se indica
    if (property_exists('Producto','codigo')) {
        # code...
    }

?>