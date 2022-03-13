<?php

require_once('LetrasWebService.php');

$uri = "http://127.0.0.1/Tema8/Hoja08_WebServices_02/ejercicio1/letras";
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('LetrasWebService');
$server->handle();

?>