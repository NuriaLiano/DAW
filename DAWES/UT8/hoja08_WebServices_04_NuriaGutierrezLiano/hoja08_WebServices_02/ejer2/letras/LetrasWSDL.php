<?php 
require_once 'LetrasWebService.php';
require 'WSDLDocument.php';
$wsdl = new WSDLDocument('LetrasWebService',"http://127.0.0.1/ejercicios/hoja08_WebServices_02/ejer2/letras/LetrasServer.php", "http://127.0.0.1/ejercicios/hoja08_WebServices_02/ejer2/letras");
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>