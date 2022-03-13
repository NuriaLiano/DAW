<?php

class Funciones{
   
   public function getConexion(){
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $conexion = new PDO('mysql:host=localhost;dbname=dwes_04_tienda', 'root', '' , $opciones);
        return $conexion;
        unset($conexion);
    } 
    /** 
     * @param string $cod
     * @return float $mostrar
     */
    public function getPVP($cod){
        $conexion = $this->getConexion();
        $nombre = null;
        $precio = null;
        $mostrar = "";
        // BINDING CONSULTA
        $sql = "SELECT nombre,precio FROM productos WHERE codigo='$cod'";
            $resultado = $conexion->query($sql);
            if($resultado) {
                $row = $resultado->fetch();
                $nombre = $row['nombre'];
                $precio = $row['precio'];
                $mostrar = "El nombre es ".$nombre." y el precio es ". $precio;
            } 
     return $mostrar;
    }
    
    /**
     * 
     * @return array $familias
     */
   
    public function getFamilias(){     
        $conexion = $this->getConexion();
        $familias = array();

        $sql = "SELECT codigo FROM familias";
            $resultado = $conexion->query($sql);
            if($resultado) {
                $row = $resultado->fetch();
                while ($row != null) {
                    $familias[] = "${row['codigo']}";
                    $row = $resultado->fetch();
                }
            }
            return $familias; 
    }
    
    /** 
     * @param string $codFamilia
     * @return array $codigos
     */
    public function getProductosFamilia($codFamilia){
        $codigos = array();

        $conexion = $this->getConexion();

        $sql = "SELECT codigo FROM productos WHERE familia='".$codFamilia."'";
        $resultado = $conexion->query($sql);

        if($resultado) {
            $row = $resultado->fetch();
            while ($row != null) {
                $codigos[] = "${row['codigo']}";
                $row = $resultado->fetch();
            }
        }
        return $codigos;
    }
    
}
?>
