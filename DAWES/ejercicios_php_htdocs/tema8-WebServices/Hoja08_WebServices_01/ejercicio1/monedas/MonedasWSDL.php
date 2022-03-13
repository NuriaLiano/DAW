<?php 
require_once 'MonedasWebService.php';
require 'WSDLDocument.php';
$wsdl = new WSDLDocument('MonedasWebService',"http://127.0.0.1/ejercicios/tema8/Hoja08_WebServices_01/ejercicio1/monedas/MonedasServer.php", "http://127.0.0.1/ejercicios/tema8/Hoja08_WebServices_01/ejercicio1/monedas");
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>
