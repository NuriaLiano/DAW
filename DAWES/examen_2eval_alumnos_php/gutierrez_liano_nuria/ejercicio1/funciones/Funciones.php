<?php

class Funciones{
   

   public function getConexion(){
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $conexion = new PDO('mysql:host=localhost;dbname=telefonos_examen', 'root', '' , $opciones);
        return $conexion;
        unset($conexion);
    }
    
    /** 
     * @param string $campo
     * @param string $valor
     * @return boolean $vacio
     */
    public function estaVacio($campo, $valor){
        $vacio = false;
        if(($campo != null) && ($valor != null)){
            $vacio = true;
        }
        return $vacio;
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
            $resultado[$producto["codigo"]] = [
                "modelo" => $producto["modelo"],
                "marca" => $producto["marca"],
                "precio" => $producto["precio"],
                "fecha" => $producto["fecha_adquisicion"]
            ];
        }
        unset($consulta);
        return $resultado;

    }

    /** 
     * @param string $modelo
     * @param string $marca
     * @param int $memoria
     * @param float $precio
     * @param Date $adquisicion
     * @return boolean $todoBien
     */

    public function insertTelefono($modelo,$marca,$memoria,$precio,$adquisicion){
        $todoBien = false;
        $conexion = $this->getConexion();
    
        $conexion->beginTransaction();
        
        $insertProducto = $conexion->prepare('INSERT INTO telefonos (modelo, marca, memoria, precio, fecha_adquisicion) VALUES (?,?,?,?,?)');
        $insertProducto->bindParam(1, $modelo, PDO::PARAM_STR);
        $insertProducto->bindParam(2, $marca, PDO::PARAM_STR);
        $insertProducto->bindParam(3, $memoria, PDO::PARAM_STR);
        $insertProducto->bindParam(4, $precio, PDO::PARAM_STR);
        $insertProducto->bindParam(5, $adquisicion, PDO::PARAM_STR);
        
        $insertProducto->execute();
        $numeroProductosInsertados = $insertProducto->rowCount();
        
        
        
        if ($numeroProductosInsertados == 1) {
            $conexion->commit();
            echo"Los cambios se han hecho correctamente";
            $todoBien = true;
        } else {
            $conexion->rollback();
            echo "Error al insertar";
        }
        
        unset($conexion);
        
        return $todoBien;

    }
    
}
?>