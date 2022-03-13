<?php

require_once('MonedasWebService.php');

$uri = "http://localhost/ejercicios/tema8/Hoja08_WebServices_01/ejercicio1/monedas";
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('MonedasWebService');
//setMethod si vamos a usar un metodo en vez de una clase
$server->handle();

?>