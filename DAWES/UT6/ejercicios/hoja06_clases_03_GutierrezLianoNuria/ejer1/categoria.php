<?php 

class categoria {
    private $id,$nombre;
    public function __construct($id,$nombre){
        $this->id = $id;
        $this->nombre = $nombre;
    }
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setId($nuevoId){
        $this->id = $nuevoId;
    }
    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function mostrar(){
        return $this->nombre;
    }
}
?>