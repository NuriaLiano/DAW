<?php

class Funciones{
   

   public function getConexion(){
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $conexion = new PDO('mysql:host=localhost;dbname=telefonos_examen', 'root', '' , $opciones);
        return $conexion;
        unset($conexion);
    }
    

    /** 
     * @return string $resultado
     */
    public function getTelefonos(){
        $conexion = $this->getConexion();

        $consulta = $conexion->prepare("SELECT id, modelo, marca, memoria, precio, fecha_adquisicion FROM telefonos");
        $consulta->bindParam(':pro', $pro, PDO::PARAM_STR);
        $consulta->execute();
        $resultado = [];
        while ($producto = $consulta->fetch()) {
            $resultado[$producto["id"]] = [
                "modelo" => $producto["modelo"],
                "marca" => $producto["marca"],
                "mempria" => $producto["memoria"],
                "precio" => $producto["precio"],
                "fecha" => $producto["fecha_adquisicion"]
            ];
        }
        unset($consulta);
        return $resultado;

    }
    /** 
     * @return float $precio
     */
    public function getPrecios($cod){
        $conexion = $this->getConexion();

        $precio = null;
        $resultado = null;

        $sql = "SELECT precio FROM telefonos WHERE id='$cod' ";
        $resultado = $conexion->query($sql);
        if($resultado) {
            $row = $resultado->fetch();
            $precio = $row;
           
        }
        return $precio;

    }
    /** 
     * @return array $marcas
     */
    public function getMarcas(){
        $conexion = $this->getConexion();

        $consulta = $conexion->prepare("SELECT marca FROM telefonos");
        $consulta->bindParam(':pro', $pro, PDO::PARAM_STR);
        $consulta->execute();
        $resultado = [];
        while ($marcas = $consulta->fetch()) {
            $resultado[$marcas["codigo"]] = [
                "modelo" => $marcas["modelo"],
                "marca" => $marcas["marca"],
                "precio" => $marcas["precio"],
                "fecha" => $marcas["fecha_adquisicion"]
            ];
        }
        unset($consulta);
        return $marcas;

    }
    
}
?>