<?php

require_once('MonedasWebService.php');

$uri = "http://localhost/ejercicios/tema8/Hoja08_WebServices_01/ejercicio1/monedas";
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('MonedasWebService');
$server->handle();

?>