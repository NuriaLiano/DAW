<?php
require_once 'Funciones.php';
require_once 'WSDLDocument.php';

$wsdl = new WSDLDocument('Funciones',"http://127.0.0.1/examen_2eval_alumnos/gutierrez_liano_nuria/ejercicio2/funciones/servidor.php","http://127.0.0.1/examen_2eval_alumnos/gutierrez_liano_nuria/ejercicio2/funciones");
$wsdl->formatOutput = true;
header('Content-Type: text/xml');
echo $wsdl->saveXML();
?>