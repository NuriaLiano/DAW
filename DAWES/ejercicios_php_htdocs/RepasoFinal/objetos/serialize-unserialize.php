<?php
    /* serialize = transformar un objeto en un string
       unserialize = transformar string en objeto. esto solo se puede hacer cuando se ha serializado antes */

       $p = new Producto();
       $a = serialize($p);
       $p = unserialize($a);

    //Tambien es util para almacenar objetos en sesiones
    session_start();
    $_SESSION['producto'] = serialize($p);

    //ATENCION
    //Los objetos que se añadan a la sesión del usuario son serializados automáticamente.
    session_start();
    $_SESSION['producto'] = $p;

    //Deserializar objetos | Para poder deserializar un objeto, debe estar definida su clase.
    session_start();
    $p = $_SESSION['producto'];

?>