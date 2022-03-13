<?php 
    #variables
    $operador1= 13;
    $operador2= 4;
    $resultado= 0;
    
    #LA VARIABLE RESULTADO SE SOBREESCRIBE
    
    #resta
    $resultado= $operador1 - $operador2;
    echo "resta = ". $resultado;
    
    echo "<br/>";
    
    #suma
    $resultado= $operador1 + $operador2;
    echo "suma = ". $resultado;
    
    echo "<br/>";
    
    #multiplicacion
    $resultado= $operador1 * $operador2;
    echo "multiplicacion = ". $resultado;
    
    echo "<br/>";
    
    #division
    $resultado= $operador1 / $operador2;
    echo "division = ". $resultado;
    
    echo "<br/>";
    
    #modulo
    $resultado= $operador1 % $operador2;
    echo "modulo = ". $resultado;
?>