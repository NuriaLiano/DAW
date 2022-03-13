<?php

//Los objetos que implementen JsonSerializable puede personalizar su representación JSON cuando se codifica con json_encode().
class Jugador implements JsonSerializable{
    private $nombre;
    private $procedencia;
    private $altura;
    private $peso;
    private $posicion;
    private $nombre_equipo;
    
    function __construct($r) {
        $this->nombre=$r["nombre"];
        $this->procedencia = $r["procedencia"];
        $this->altura = $r["altura"];
        $this->peso = $r["peso"];
        $this->posicion = $r["posicion"];
        $this->nombre_equipo = $r["nombre_equipo"];
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    
    function getProcedencia() {
        return $this->procedencia;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }
    
    function getPosicion() {
        return $this->posicion;
    }
    
    function getNombreEquipo() {
        return $this->nombre_equipo;
    }

    function setProcedencia($procedencia): void {
        $this->procedencia = $procedencia;
    }

    function setAltura($altura): void {
        $this->altura = $altura;
    }

    function setPeso($peso): void {
        $this->peso = $peso;
    }
    function setPosicion($posicion): void {
        $this->posicion = $posicion;
    }
    function setNombreEquipo($nombre_equipo): void {
        $this->nombre_equipo = $nombre_equipo;
    }

    //serializa los datos en tipo json
    public function jsonSerialize() {
        return [
            "nombre"=>$this->nombre,
            "procedencia"=>$this->procedencia,
            "altura"=>$this->altura,
            "peso"=>$this->peso,
            "posicion"=>$this->posicion,
            "nombre_equipo"=>$this->nombre_equipo,
            
        ];
    }
    
}
