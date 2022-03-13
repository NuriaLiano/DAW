<?php 
require_once 'PesoWebService.php';
require 'WSDLDocument.php';
$wsdl = new WSDLDocument('PesosWebService',"http://127.0.0.1/ejercicios/tema8/Hoja08_WebServices_01/ejercicio2/jugadores/PesosServer.php", "http://127.0.0.1/ejercicios/tema8/Hoja08_WebServices_01/ejercicio2/jugadores");
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>