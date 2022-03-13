<?php 
    //asignacion de variables
    $a = 8;
    $b = 3;
    $c = 5;
    
    if (($a == $b)&&($c > $b)) {
        echo "A es igual a B y C es mayor que B";
    }else{
        echo "incorrecto";
    }
    echo "<br/>";
    if (($a == $b)||($b == $c)) {
        echo "A es igual a B y/o B es igual que C";
    }else {
        echo "incorrecto";
    }
    echo "<br/>";
    if ($b <= $c) {
        echo "B es manor o igual que C";
    }
?>