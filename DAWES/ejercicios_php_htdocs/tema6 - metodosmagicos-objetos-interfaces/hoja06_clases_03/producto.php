<?php 
class producto{
    protected $codigo,$precio,$nombre,$categoria;
    public function __construct($codigo,$precio,$nombre,$categoria){
        $this->codigo = $codigo;
        $this->precio = $precio;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCodigo($nuevoCodigo){
        $this->codigo = $nuevoCodigo;
    }
    public function setPrecio($nuevoPrecio){
        $this->precio = $nuevoPrecio;
    }
    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function setCategoria($nuevaCategoria){
        $this->categoria = $nuevaCategoria;
    }
    public function mostrar(){
        echo "codigo :".$this->codigo;
        echo "<br/>";
        echo "precio :".$this->precio;
        echo "<br/>";
        echo "nombre :".$this->nombre;
        echo "<br/>";
        echo "categoria :".$this->categoria;
    }
}
?>