<?php
require_once 'Funciones.php';

$uri = 'http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_03/ejercicio2';

    $server = new SoapServer(null, array('uri'=>$uri));
    $server->setClass('Funciones');
    $server->handle();
    ?>

