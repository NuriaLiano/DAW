<?php 
require_once 'MonedasWebService.php';
require 'WSDLDocument.php';
$wsdl = new WSDLDocument('MonedasWebService',"http://127.0.0.1/Tema-8/hoja08_WebServices_01/ejercicio1/monedas/MonedasServer.php", "http://127.0.0.1/Tema-8/hoja08_WebServices_01/ejercicio1/monedas");
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>
