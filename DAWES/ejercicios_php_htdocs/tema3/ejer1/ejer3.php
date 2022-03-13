<?php 

    $numero = 625;
    $num = 0;
    $cociente = $numero;
    while ( $cociente != 0){
        $resto = $cociente % 10;
        $num = $num * 10 + $resto;
        $cociente = (int)($cociente / 10);
    }
    if ( $numero == $num ){
        print "El numero $numero Es capicua <br/>";
    } else{
       print "El numero $numero no es capicua <br/>";
    }
?>