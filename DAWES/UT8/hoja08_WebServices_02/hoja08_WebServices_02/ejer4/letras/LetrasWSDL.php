<?php 
require_once 'OperacionesConDNI.php';
require 'WSDLDocument.php';
$wsdl = new WSDLDocument('OperacionesConDNI',"http://127.0.0.1/ejercicios/hoja08_WebServices_02/ejer4/letras/servidor.php", "http://127.0.0.1/ejercicios/hoja08_WebServices_02/ejer4/letras");
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>