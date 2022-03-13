<?php 
require_once 'PesosWebService.php';
require 'WSDLDocument.php';
$wsdl = new WSDLDocument('PesosWebService',"http://127.0.0.1/ejercicios/pruebasFran/hoja08_WebServices_01/ejercicio2/pesos/PesosServer.php", "http://127.0.0.1/ejercicios/pruebasFran/hoja08_WebServices_01/ejercicio2/pesos");
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>