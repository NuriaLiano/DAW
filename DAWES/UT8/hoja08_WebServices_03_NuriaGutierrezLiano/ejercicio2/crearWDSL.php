<?php
require_once 'Funciones.php';
require_once 'WSDLDocument.php';

$wsdl = new WSDLDocument('Funciones',"http://localhost/ejercicios/tema8/Hoja08_WebServices_03/ejercicio2/servidor.php","http://localhost/ejercicios/tema8/Hoja08_WebServices_03/ejercicio2/");
$wsdl->formatOutput = true;
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>
