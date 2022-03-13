<?php

    $numero = $_REQUEST["numero"];

    
    function tabla ($num){
        for ($i=0; $i <= 10 ; $i++) { 
           $resultado = $i * $num;
           echo $i . " x ". $num. " = ". $resultado;
           echo "</br>";
        }
    }

    echo (tabla($numero));
    echo "<br/>";
    echo '<a href="tabla_ejer6_Nuria.html">Volver</a>';

?>