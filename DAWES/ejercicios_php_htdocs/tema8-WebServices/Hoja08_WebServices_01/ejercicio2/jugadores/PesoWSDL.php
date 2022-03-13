<?php 
require_once 'PesosWebService.php';
require 'WSDLDocument.php';
$wsdl = new WSDLDocument('PesosWebService',"http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_01/ejercicio2/jugadores/PesoServer.php", "http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_01/ejercicio2/jugadores");
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>