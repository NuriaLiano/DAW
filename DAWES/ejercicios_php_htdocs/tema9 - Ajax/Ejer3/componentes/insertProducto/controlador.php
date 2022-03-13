<?php 
require_once 'includes/BaseDatos.class.php';
require_once 'modelo.php';

global $lista_familias;

$lista_familias = obtenerFamilias();


if (isset($_POST["insertar"])) {
    
    $nom = $_POST["nombre"];
    $des = $_POST["descrip"];
    $pre = $_POST["precio"];
    $preF = floatval($pre);
    $fami = $_POST["familia"];
    $cod = $_POST["img"];
    $rutaBuena = substr($cod,0,-4);
    
    if(insertarProducto($rutaBuena,$nom,$des,$preF,$fami)){
        // Llevamos al usuario a la p�gina
        header("Location: index.php?option=productos");
        
    }    
}

if (isset($_POST["seguirComprando"])) {
    
    header("Location: index.php?option=productos");
}

require_once 'vista.php';

?> 