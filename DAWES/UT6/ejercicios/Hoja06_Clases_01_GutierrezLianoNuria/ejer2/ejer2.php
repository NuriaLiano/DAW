<?php 

class Coche {
    
    private $matricula;
    private $velocidad;
    
    public function __construct($mat, $vel) {
        $this->matricula = $mat;
        $this->velocidad = $vel;
    }
    
    public function acelera($valor) {
        //aumentar velocidad en 10
        if (($this->velocidad >0)&&($this->velocidad <= 120)) {
            $this->velocidad +=$valor;
            return $this->velocidad;
        }else{
            echo "Esa velocidad no está permitida";
        }
        
    }
    
    public function disminuye($valor) {
        //disminuir velocidad en 10
        if (($this->velocidad >0)&&($this->velocidad <= 120)) {
            $this->velocidad -=$valor;
            return $this->velocidad;
        }else{
            echo "Esa velocidad no está permitida";
        }
    }
    
    public function mostrarInfo() {
        
        // Llamamos a otros métodos
        echo "<p>Información del coche:<p>";
        echo "Matricula : ".$this->matricula;
        echo "<br/> Velocidad: ".$this->velocidad;
        
    }
    
    
    
}


?>