<?php 

    include_once 'ejer1.php';
    
    $circ = new Circulo();
    
    //dar valor al radio mediante la funcion set
    //$circ->setRadio(3);
    
    //imprimir el radio
    //$circ->getRadio();
    
    //llamada a la funcion magica
    $circ->radio=8;
    $circ->mostrar();
    
    

?>