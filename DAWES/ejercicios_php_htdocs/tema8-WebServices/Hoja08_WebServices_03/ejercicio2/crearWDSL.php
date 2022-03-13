<?php
require_once 'Funciones.php';
require_once 'WSDLDocument.php';

$wsdl = new WSDLDocument('Funciones',"http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_03/ejercicio2/servidor.php","http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_03/ejercicio2");
$wsdl->formatOutput = true;
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>
