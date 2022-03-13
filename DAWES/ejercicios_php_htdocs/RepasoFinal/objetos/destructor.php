<?php

/*permite definir acciones que se ejecutarán cuando se elimine el objeto.*/

class Producto {
    private static $num_productos = 0;
    private $codigo;
    public function __construct($codigo) {
        $this->$codigo = $codigo;
        self::$num_productos++;
    }
    public function __destruct() {
        self::$num_productos--;
    }
}
   
$p = new Producto('GALAXYS');
?>

 