<?php
    require_once 'vista_insertar';
    global $funcion2;
    $url = 'http://127.0.0.1/examen_2eval_alumnos/gutierrez_liano_nuria/ejercicio1/servidor.php';
    $uri = 'http://127.0.0.1/examen_2eval_alumnos/gutierrez_liano_nuria/ejercicio1';

    $cliente = new SoapClient(null, array('location'=>$url, 'uri'=>$uri));

    
    $funcion2 = $cliente->insertTelefono($modelo, $marca, $memoria, $precio, $adquisicion);

    
    

    
?>