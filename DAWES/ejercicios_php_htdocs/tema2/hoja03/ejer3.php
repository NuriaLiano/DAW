<?php 
    
    $dia= 14;
    $mes= 12;
    $a�o= 2020;
    
    if (checkdate($mes, $dia, $a�o) == true) {
        echo "La fecha ". $dia . "/" . $mes . "/" . $a�o . " es valida";
    }else{
        echo "La fecha es incorrecta";
    }
    
?>