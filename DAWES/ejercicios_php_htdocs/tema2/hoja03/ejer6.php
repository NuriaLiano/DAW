<?php 
    //asignacion de variables
    $a = 8;
    $b = 3;
    $c = 5;
    
    if ($a == $b) {
        echo "variable A es igual a B ";
    }else{
        echo "Incorrecto";
    }
    echo "<br/>";
    if ($a != $b){
        echo "variable A es distinta a B";
    }else{
        echo "Incorrecto";
    }
    echo "<br/>";
    if ($a < $b){
        echo "variable A es menor que B";
    }else{
        echo "Incorrecto";
    }
    echo "<br/>";
    if ($a > $b){
        echo "variable A es mayor que B";
    }else{
        echo "Incorrecto";
    }
    echo "<br/>";
    if($a >= $c){
        echo "variable A es mayor o igual a C";
    }else{
        echo "Incorrecto";
    }
    echo "<br/>";
    if($a <= $c){
        echo "variable A es menor o igual a C";
    }else{
        echo "Incorrecto";
    }
    
?>