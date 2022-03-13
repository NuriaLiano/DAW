<?php

require_once('PesosWebService.php'); //aqui hace la operacion de cambio de kg a 

$uri = "http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_01/ejercicio2/jugadores";
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('PesosWebService'); 
$server->handle(); 

?>