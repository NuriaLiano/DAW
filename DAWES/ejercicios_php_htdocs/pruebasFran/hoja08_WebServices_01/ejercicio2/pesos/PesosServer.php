<?php

require_once('PesosWebService.php');

$uri = "http://127.0.0.1/ejercicios/pruebasFran/hoja08_WebServices_01/ejercicio2/pesos";
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('PesosWebService');
$server->handle();

?>