<?php
require_once 'Funciones.php';

$uri = 'http://localhost/ejercicios/tema8/Hoja08_WebServices_03/ejercicio2';

    $server = new SoapServer(null, array('uri'=>$uri));
    $server->setClass('Funciones');
    $server->handle();
    ?>

