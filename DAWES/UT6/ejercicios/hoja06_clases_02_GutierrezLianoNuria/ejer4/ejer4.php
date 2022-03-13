<?php 

class Productos {
    
    private $codigo, $precio, $nombre;
    
    public function __construct() {
    }
    
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getCodigo() {
        return $this->codigo;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getNombre() {
        return $this->nombre;
    }
    
    public function mostrar(){
        echo $this->codigo;
        echo $this->precio;
        echo $this->nombre;
         
    }
}

class Alimentacion extends Productos{
    
    private $mes, $anio_caducidad;
    
    public function __construct() {
        parent::__construct();
    }
    public function setMes($mes) {
        $this->mes = $mes;
    }
    public function setAnioCaducidad($anio_caducidad) {
        $this->anio_caducidad = $anio_caducidad;
    }
    public function getMes() {
        return $this->mes;
    }
    public function getAnioCaducidad() {
        return $this->anio_caducidad;
    }
    
    public function mostrar() {
        $datos = parent::mostrar();
        $datos = "mes: ". $this->mes;
        $datos = "anio caducidad: ". $this->anio_caducidad;
        echo "<br/>";
        echo $datos."<br>";
    }
    
}

class Electronica extends Productos{
    
    private $plazo_garantia;
    
    public function __construct() {
        parent::__construct();
    }
    public function setPlazo_garantia($plazo_garantia) {
        $this->plazo_garantia = $plazo_garantia;
    }
    public function getPlazo_garantia() {
        return $this->plazo_garantia;
    }
    
    public function mostrar() {
        $datos = parent::mostrar();
        $datos = "plazo de garantia: ". $this->plazo_garantia;
        echo "<br/>";
        echo $datos."<br>";
    }
    
}


?>