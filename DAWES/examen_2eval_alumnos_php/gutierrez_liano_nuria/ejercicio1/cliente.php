<?php
require_once 'Funciones.php';
try{
    $url = 'http://127.0.0.1/examen_2eval_alumnos/gutierrez_liano_nuria/ejercicio1/servidor.php';
    $uri = 'http://127.0.0.1/examen_2eval_alumnos/gutierrez_liano_nuria/ejercicio1';

    $cliente = new SoapClient(null, array('location'=>$url, 'uri'=>$uri));

    global $funcion;
    $funcion = $cliente->getTelefonos();

    require 'vista_cliente.php';


}catch(Exception $e){
    echo "Se ha producido una excepción: " . $e;
}



?>