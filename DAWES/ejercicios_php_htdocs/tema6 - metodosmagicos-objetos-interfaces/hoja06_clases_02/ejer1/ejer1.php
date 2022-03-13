<?php 

    
class Empleado{
    
    private $sueldo;
    public function __construct($sueldoBase){
        $this->sueldo = $sueldoBase;
    }
    
    
    public function getSueldo() {
       // print  ;
        return $this->sueldo;
    }
    
    
    
}
class Encargado extends Empleado{
    
    private $sueldoEncargado, $sueldoNormal;
    
    //crear constructor de la clase encargado
    public function __construct($sueldoBase) {
        parent::__construct($sueldoBase);
    }
    
    //reciben 15% mas de sueldo base
    public function getSueldo() {
        $sueldoNormal = parent::getSueldo();
        $this->sueldoEncargado = ($sueldoNormal*0.15) + $sueldoNormal;
        return $this->sueldoEncargado;
        
    }
    
    
}


?>