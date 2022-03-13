<?php
/*
métodos mágicos, entre ellos __set y
__get. Si se declaran estos dos métodos en una clase, PHP los invoca
automáticamente cuando desde un objeto se intenta usar un atributo no
existente o no accesible.


*/
//una forma
class Producto{
    private $atributos = array();
    public function __get($atributo) {
        return $this->atributos[$atributo];
    }
    public function __set($atributo, $valor) {
        $this->atributos[$atributo] = $valor;
    }
}

//otra forma
class Persona {
    private $id;
    private $nombre;
    private $email;
    public function __set($var, $valor) {
        if (property_exists(__CLASS__, $var)) {
            $this->$var = $valor;
        }else {
            echo "No existe el atributo $var.";
        }
    }
    public function __get($var) {
        if (property_exists(__CLASS__, $var)) {
            return $this->$var;
        }
        return NULL;
    }
}
    $p = new Persona();
    $p->nombre = "Pepe";
    
?>