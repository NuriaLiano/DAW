<?php 

abstract class Medico {
    
    private $nombre, $edad, $turno;
    
    public function __construct($nombre, $edad, $turno) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->turno = $turno;
    }
    
    public function getNombre() {
        return $this->nombre ;
    }
    public function getEdad() {
        return $this->edad ;
    }
    public function getTurno() {
        return $this->turno ;
    }
    public function mostrar() {
        echo $this->nombre;
        echo "<br>";
        echo $this->edad;
        echo "<br>";
        echo $this->turno;
    }
}

class  Familia extends Medico{
    private $num_pacientes;
    
    public function __construct($nombre, $edad, $turno, $num_pacientes) {
        parent::__construct($nombre, $edad, $turno);
        $this->num_pacientes = $num_pacientes;
    }
    
    public function getPacientes() {
        return $this->num_pacientes;
    }
    
    public function mostrar() {
        $datosCuenta = parent::mostrar();
        $datosCuenta = "numero pacientes: ". $this->num_pacientes;
        echo "<br/>";
        echo $datosCuenta . "<br/>";
    }
    
    
}

class  Urgencia extends Medico{
    
    private $unidad;
    
    public function __construct($nombre, $edad, $turno, $unidad) {
        parent::__construct($nombre, $edad, $turno);
        $this->unidad = $unidad;
    }
    public function mostrar(){
        $datosCuenta = parent::mostrar();
        $datosCuenta = "unidad: ". $this->unidad;
        echo "<br/>";
        echo $datosCuenta;
    }
    
    
}
    


?>