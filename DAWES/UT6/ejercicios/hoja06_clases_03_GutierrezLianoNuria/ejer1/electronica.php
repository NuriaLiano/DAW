<?php 
include_once 'producto.php';
class electronica extends producto{
    protected $plazoGarantia;
    public function __construct($codigo,$precio,$nombre,$plazoGarantia,$categoria){
        parent::__construct($codigo,$precio,$nombre,$categoria);
        $this->plazoGarantia = $plazoGarantia;
    }
    public function getPlazoGarantia(){
        return $this->plazoGarantia;
    }
    public function setPlazoGarantia($nuevoPlazo){
        $this->plazoGarantia = $nuevoPlazo;
    }
    public function mostrar(){
        $datosCuenta = parent::mostrar();
        $datosCuenta = "plazo garantia: ". $this->plazoGarantia;
        echo "<br/>";
        echo $datosCuenta;
    }
}
?>