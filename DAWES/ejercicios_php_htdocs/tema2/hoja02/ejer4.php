<?php 
    #Variables
    $nombre = "Juan";
    
    #Imprimir
    echo "Informacion de la variable $nombre :";
    var_dump($nombre);
    echo "<br/>";
    echo "Contenido de la variable: ". $nombre;
    echo "<br/>";
    #Se asigna un valor null
    $nombre = null;
    echo "Despues de asignarle un valor nulo: ";
    var_dump($nombre);
?>