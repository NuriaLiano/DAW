<?php 
include_once 'producto.php';

class alimentacion extends producto{
    protected $mes_cad,$anio_cad;
    public function __construct($codigo,$precio,$nombre,$mes_cad,$anio_cad,$categoria){
        parent::__construct($codigo,$precio,$nombre,$categoria);
        $this->mes_cad = $mes_cad;
        $this->anio_cad = $anio_cad;
    }
    public function getMesCad(){
        return $this->mes_cad;
    }
    public function setMes($nuevoMes){
        $this->mes_cad = $nuevoMes;
    }
    public function getAnioCad(){
        return $this->mes_cad;
    }
    public function setAnio($nuevoAnio){
        $this->anio_cad = $nuevoAnio;
    }
    public function mostrar(){
        $datosCuenta = parent::mostrar();
        $datosCuenta = "mes caducidad: ". $this->mes_cad."<br/>".
            "anio caducidad: ". $this->anio_cad;
        echo "<br/>";
        echo $datosCuenta;
    }
}
?>