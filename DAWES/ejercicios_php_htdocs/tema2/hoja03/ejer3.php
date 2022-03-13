<?php 
    
    $dia= 14;
    $mes= 12;
    $año= 2020;
    
    if (checkdate($mes, $dia, $año) == true) {
        echo "La fecha ". $dia . "/" . $mes . "/" . $año . " es valida";
    }else{
        echo "La fecha es incorrecta";
    }
    
?>