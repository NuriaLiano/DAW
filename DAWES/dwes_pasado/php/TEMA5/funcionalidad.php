<?php

define("HOST", "127.0.0.1");
define("DB", "aavv");
define("USER", "root");
define("PASS", "");

function conexion_pdo(){ 

   $port = "3306";
   $charset = 'utf8mb4';
   
   $options = [
       \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
       \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
       \PDO::ATTR_EMULATE_PREPARES   => false,
   ];

   $dsn = "mysql:host=" .HOST.";dbname=".DB.";charset=$charset;port=$port";

   try {
        $pdo = new \PDO($dsn, USER, PASS, $options);
        //echo 'Conexion correcta';
   } catch (\PDOException $e) {
        //echo 'Error';
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
   }

   return $pdo;


}


function conexion_mysqli(){

    $conn = new mysqli(HOST, USER, PASS, DB);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function logear($cliente_id,$contraseña){
    $pdo = conexion_pdo();

    $contraseña_encriptada = md5($contraseña);
    $success = true;

    $query_cliente = $pdo->query("SELECT id,nombre FROM `clientes` WHERE id = '".$cliente_id."' and password = '".$contraseña."'")->fetch();

    if($query_cliente){
        session_start();
        $_SESSION["usuario"] = $query_cliente;
    }else{
        $success = false;
    }
    return $success;
}

function mostrarViajes(){
    $mysqli = conexion_mysqli();

    $viajes = $mysqli->query("SELECT * FROM `viajes` order by precio asc");

    return $viajes;
}

function reservar($cliente,$viaje,$personas){
    
    $pdo = conexion_pdo();
    $success = true;

    try{

        $pdo->beginTransaction();
        $pdo->exec("INSERT INTO reservas(id_cliente,id_viaje,plazas_reservadas)VALUES($cliente,$viaje,$personas)");
        $pdo->commit();

    }catch(Exception $e) {

        if($pdo->inTransaction()){
            $pdo->rollback();
        }
        $sucess = false;
    
}
$pdo = null;
return $success;
}

function misReservas($usuario){
    $pdo = conexion_pdo();
    
    $reservas = $pdo->query("select clientes.nombre as nombre_cliente, viajes.precio, viajes.nombre as nombre_viajes,reservas.plazas_reservadas as personas from reservas inner join clientes on clientes.id = id_cliente inner join viajes on viajes.id = id_viaje where id_cliente = " .$usuario);

    return $reservas;
}