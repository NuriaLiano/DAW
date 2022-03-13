<?php
require_once 'OperacionesConDNI.php';
require 'WSDLDocument.php';

$wsdl = new WSDLDocument('OperacionesConDNI',"http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_02/ejercicio4/letras/servidor.php","http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_02/ejercicio4/letras");
$wsdl->formatOutput = true;
header('Content-Type: text/xml');
echo $wsdl->saveXML();

//exit();

$server = new SoapServer(null, array('uri'=>''));
$server->setClass('OperacionesConDNI');
$server->handle();



