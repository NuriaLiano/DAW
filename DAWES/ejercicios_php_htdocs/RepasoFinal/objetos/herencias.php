<?php

//Si la clase heredada no triene contructor propio se llama automaticamente al del padre. 
//si la clase heredada tiene su constructor hay que llamar al padre dentro del constructor hijo
/*class Alumno extends Persona{
    public function __construct(padre, padre, hijo){
        parent::__construct(padre, padre);
    }
}

 */

class Persona {
    protected$nombre;
    protected$apellidos;
    public function muestra() {
        print "<p>" . $this->nombre. $this->apellidos."</p>";
    }
}

class Alumno extends Persona{

}

//evitar que las clases heredadas puedan redefinir el comportamiento de los métodos existentes en la superclase: utilizar la palabra final.
//en el padre establecer la funcion con final
/*public final function toString(){

} */

//tambien se puede añadir el final antes de la clase
//final class Persona {}


//Obligar a heredar la funcion
/*abstract public function toString(){

} */
//tambien se puede añadir el abstract antes de la clase
//abstract class Persona {}

?>