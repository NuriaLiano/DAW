<?php
require_once 'Funciones.php';

$uri = 'http://127.0.0.1/examen_2eval_alumnos/gutierrez_liano_nuria/ejercicio1';
    $server = new SoapServer(null, array('uri'=>$uri));
    $server->setClass('Funciones');
    $server->handle();
?>