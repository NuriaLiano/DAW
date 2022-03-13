<?php

require_once('MonedasWebService.php');

$uri = "http://127.0.0.1/Tema-8/hoja08_WebServices_01/ejercicio1/monedas";
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('MonedasWebService');
$server->handle();

?>