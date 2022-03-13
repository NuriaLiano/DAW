<?php

class DB{

    private $dns;
    private $usuario;
    private $password;
    //private $interface;
    private $base;

    function __construct($dns, $usuario, $password)//, $interface
    {
        $this->dns = $dns;
        $this->usuario = $usuario;
        $this->password = $password;
        //$this->interface = $interface;
        $this->base = "parcial_2ev";
    }

    public function getConexion(){
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );
        $conexion = new PDO('mysql:host=' . $this->dns . '; dbname=' . $this->base, $this->usuario, $this->password, $opciones);
        //echo ("conecta");
        return $conexion;
    }

    function getClases(){
        $listaClases = [];
        $conexion = $this->getConexion();
        $resultado = $conexion->query("SELECT * FROM clase");
        while ($clases = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaClases, $clases);
        }
        return $listaClases;
    }

    function getClase($id){
        $listaClases = [];
        $conexion = $this->getConexion();
        $resultado = $conexion->query("SELECT * FROM clase WHERE id=" .$id);
        while ($clases = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaClases, $clases);
        }
        return $listaClases;
    }
    function getVehiculos($categoria = null){
        $listaVehiculos = [];
        $conexion = $this->getConexion();
        $resultado = $conexion->query("SELECT * FROM vehiculos");
        while ($vehiculos = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaVehiculos, $vehiculos);
        }
        return $listaVehiculos;
        
    }
    function getVehiculosCoche($categoria = null){
        
        $conexion = $this->getConexion();
        // BINDING CONSULTA
        $consulta = $conexion->prepare("SELECT v.color color, v.marca marca, v.potencia potencia, v.clase clase, v.matricula matricula, c.numpuertas numpuertas, c.tamanomaletero 
        FROM vehiculos v INNER JOIN coche c ON v.matricula = c.matricula");
        $consulta->execute();
        
        // VOLCAMOS EL RESULTADO EN UN ARRAY
        $resultado = [];
        while ($coche = $consulta->fetch()) {

            $resultado[$coche["color"]] = [
                "marca" => $coche["marca"],
                "potencia" => $coche["potencia"],
                "clase" => $coche["clase"],
                "matricula" => $coche["matricula"],
                "numpuertas" => $coche["numpuertas"],
                "tamanomaletero" => $coche["tamanomaletero"] 
            ];
        }
        // CERRAMOS CONEXIÓN
        unset($consulta);
        return $resultado;
    }



    function getVehiculosMoto($categoria = null){
        $conexion = $this->getConexion();
        // BINDING CONSULTA
        $consulta = $conexion->prepare("SELECT v.color color, v.marca marca, v.potencia potencia, v.clase clase, v.matricula matricula, m.tipo tipo
        FROM vehiculos v INNER JOIN moto m ON v.matricula = m.matricula");
        $consulta->execute();
        
        // VOLCAMOS EL RESULTADO EN UN ARRAY
        $resultado = [];
        while ($moto = $consulta->fetch()) {

            $resultado[$moto["color"]] = [
                "marca" => $moto["marca"],
                "potencia" => $moto["potencia"],
                "clase" => $moto["clase"],
                "matricula" => $moto["matricula"],
                "tipo" => $moto["tipo"]
            ];
        }
        // CERRAMOS CONEXIÓN
        unset($consulta);
        return $resultado;
    }

    function existeMatricula($matricula){
        
        $listaMatriculas = [];
        $conexion = $this->getConexion();
        $resultado = $conexion->query("SELECT * FROM vehiculos WHERE matricula='$matricula'");
        while ($usuarios = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaMatriculas, $usuarios);
        }
        return $listaMatriculas;
    }
    function insertarCoche($color, $marca, $potencia, $clase, $matricula, $numruedas, $tamanomaletero){
        
        $todoBien = false;
        $conexion = $this->getConexion();
        $conexion->beginTransaction();
        
        $insertarCoche = $conexion->prepare('INSERT INTO vehiculos (color, marca, potencia, clase, matricula) VALUES (?,?,?,?,?)');
        $insertarCoche->bindParam(1, $color, PDO::PARAM_STR);
        $insertarCoche->bindParam(2, $marca, PDO::PARAM_STR);
        $insertarCoche->bindParam(3, $potencia, PDO::PARAM_STR);
        $insertarCoche->bindParam(4, $clase, PDO::PARAM_STR);
        $insertarCoche->bindParam(5, $matricula, PDO::PARAM_STR);
        
        
        
        //insertar en coche
        $insertarEnCoche = $conexion->prepare('INSERT INTO coche (numpuertas, tamanomaletero, matricula) VALUES (?,?,?)');
        $insertarEnCoche->bindParam(1, $numruedas, PDO::PARAM_STR);
        $insertarEnCoche->bindParam(2, $tamanomaletero, PDO::PARAM_STR);
        $insertarEnCoche->bindParam(3, $matricula, PDO::PARAM_STR);
        
        $insertarCoche->execute();
        $numerocoches = $insertarCoche->rowCount();
        $insertarEnCoche->execute();
        $numeroEncoches = $insertarEnCoche->rowCount();
        
        if ($numeroEncoches == 1) {
            $conexion->commit();
            echo"Los cambios se han hecho correctamente";
            $todoBien = true;
        } else {
            $conexion->rollback();
            echo "Error";
        }
        if ($numerocoches >= 1) {
            $conexion->commit();
            echo"Los cambios se han hecho correctamente";
            $todoBien = true;
        } else {
            $conexion->rollback();
            echo "Error";
        }

        unset($conexion);
        return $todoBien;
    }
    function insertarMoto($color, $marca, $potencia, $clase, $matricula, $tipo){
        $todoBien = false;
        $conexion = $this->getConexion();
        $conexion->beginTransaction();
        
        $insertarMoto = $conexion->prepare('INSERT INTO vehiculos (color, marca, potencia, clase, matricula) VALUES (?,?,?,?,?)');
        $insertarMoto->bindParam(1, $color, PDO::PARAM_STR);
        $insertarMoto->bindParam(2, $marca, PDO::PARAM_STR);
        $insertarMoto->bindParam(3, $potencia, PDO::PARAM_STR);
        $insertarMoto->bindParam(4, $clase, PDO::PARAM_STR);
        $insertarMoto->bindParam(5, $matricula, PDO::PARAM_STR);
        
        
        
        //insertar en coche
        $insertarEnMoto = $conexion->prepare('INSERT INTO moto (tipo, matricula) VALUES (?,?)');
        $insertarEnMoto->bindParam(1, $tipo, PDO::PARAM_STR);
        $insertarEnMoto->bindParam(2, $matricula, PDO::PARAM_STR);
        
        $insertarMoto->execute();
        $numeromotos = $insertarMoto->rowCount();
        $insertarEnMoto->execute();
        $numeroEnMoto = $insertarEnMoto->rowCount();
        
        if ($numeroEnMoto == 1) {
            $conexion->commit();
            echo"Los cambios se han hecho correctamente";
            $todoBien = true;
        } else {
            $conexion->rollback();
            echo "Error";
        }
        if ($insertarMoto == 1) {
            $conexion->commit();
            echo"Los cambios se han hecho correctamente";
            $todoBien = true;
        } else {
            $conexion->rollback();
            echo "Error";
        }

        unset($conexion);
        return $todoBien;
    }


}
$a = new DB("127.0.0.1" , "root", "");
$a->getConexion();
//$a->insertarMoto("verde", "vespa", "100", 1, "4766DDF", "trail");
//var_dump($a->getClases());
//var_dump($a->getClase(1));
//var_dump($a->existeMatricula("0000OOO"));


?>            