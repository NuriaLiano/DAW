<?php
require_once 'OperacionesConDNI.php';
require 'WSDLDocument.php';
$wsdl = new WSDLDocument('Calcula',"http://127.0.0.1/URLDelServicio.php","http://127.0.0.1/URIEspacioNombres");
$wsdl->formatOutput = true;
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>