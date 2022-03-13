<?php

define("HOST", "127.0.0.1");
define("DB", "dwes_02_libros");
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

function insertarLibro($data){

    $success = false;
    $pdo = conexion_pdo();//llamamos a conexion

    $sql = "INSERT INTO libros (titulo,ano_edicion,precio,fecha_adquisicion) VALUES (?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    
    if($stmt->execute($data)) {
        $success = true;
    };

    

    return $success;

}

function mostrarLibros(){
    
    $mysqli = conexion_mysqli();

    //$libros = $pdo->query("SELECT * FROM libros")->fetchAll(); fetch solo con conexiones pdo

    $sql = "SELECT * FROM libros";
    $libros = $mysqli->query($sql); 
    
    $mysqli->close(); //cerramos la conexion

    return $libros;
}

function borrarLibros($ejemplar){    

    $mysqli = conexion_mysqli();

    $sql = "delete from libros where ejemplar = " .$ejemplar;
    
    $libros  = $mysqli->query($sql);

    echo $mysqli->affected_rows;
}

?>
    
