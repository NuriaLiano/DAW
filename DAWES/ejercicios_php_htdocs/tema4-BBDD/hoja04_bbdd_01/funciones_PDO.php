<?php

define("HOST", "127.0.0.1");
define("DB", "dwes_01_nba");
define("USER", "root");
define("PASS", "");

function conexion_pdo(){ 

   /*$port = "3306";
   $charset = 'utf8mb4';
   
   $options = [
       \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
       \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
       \PDO::ATTR_EMULATE_PREPARES   => false,
   ];

   $dsn = "mysql:host=" .HOST.";dbname=".DB.";charset=$charset;port=$port";

   try {
        $pdo = new \PDO($dsn, USER, PASS, $options);
        echo 'Conexion correcta';
   } catch (\PDOException $e) {
        //echo 'Error';
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
   }

   return $pdo;*/
    
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $conexion = new PDO('mysql:host=localhost;dbname=dwes_01_nba', 'root',
        '' , $opciones);
    //echo "funciona";
    unset($conexion);
    


}

function conexion_mysqli(){

    $conn = new mysqli(HOST, USER, PASS, DB);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function getEquipos(){

    $pdo = conexion_pdo();

    /*$equipos = $pdo->query('SELECT nombre FROM equipos');
    $equipos_array = [];
    while ($equipos = $resultado->fetch() {
        $equipos_array[] = $equipos['nombre'];
    }*/
    
    $resultado = $pdo->query('SELECT nombre FROM equipos');
    $registro = $resultado->fetch(PDO::FETCH_OBJ);
    array_push($registro, "caca");
        print_r ($registro);
    

}

function getJugadores($equipo){
    $pdo = conexion_pdo();

    $jugadores = $pdo->query("SELECT nombre FROM jugadores where nombre_equipo='$equipo'")->fetchAll();

    return $jugadores;
}

function getPosicion(){
    $pdo = conexion_pdo();

    $posicion = $pdo->query("select DISTINCT posicion from jugadores")->fetchAll();

    return $posicion;
}

function cambioJugador($equipo_elegido,$jugador_elegido,$nombre_nuevo,$procedencia,$altura,$peso,$posicion){

    $pdo = conexion_pdo();
 

    $success = true;

    try{
        
        $pdo->beginTransaction();

        $preparedStatement = $pdo->exec("DELETE from estadisticas where jugador = (select codigo from jugadores where nombre = '$jugador_elegido')");

        $preparedStatement = $pdo->exec("DELETE from jugadores where nombre = '$jugador_elegido'");

        $pdo->exec("INSERT INTO jugadores(nombre,procedencia,altura,peso,posicion,nombre_equipo) VALUES ('".$nombre_nuevo."', '".$procedencia."', '".$altura."', '".$peso."', '".$posicion."' ,'".$equipo_elegido."')");
    
        $pdo->commit();

    }catch(Exception $e) {
        
        if($pdo->inTransaction()){
            $pdo->rollback();
        }
        $success = false;
    }
    $pdo = null;
    return $success;
}

function modificar_peso($array){

    
    $pdo = conexion_pdo();
    $success = true;
    try{
        
        $pdo->beginTransaction();

        foreach($array as $nombre => $peso){  
            
            if($nombre !== 'actualizar') {

                $peso_nuevo = floatval($peso);
                
                $pdo->exec("UPDATE `jugadores` set `peso` = '" .$peso_nuevo."' where `nombre` = '".str_replace('_',' ',$nombre)."'");
                
            }
            
        }

        $pdo->commit();

    }catch(Exception $e) {
        echo $e;
        die();
        if($pdo->inTransaction()){
            $pdo->rollback();
        }
        $success = false;
    }
    $pdo = null;
    return $success;




}