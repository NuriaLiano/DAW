<?php

    $numero = $_REQUEST["numero"];

    
    function es_par ($num){
        if ($num % 2 ==0){
            echo "El numero es par";
        }else{
            echo "El numero es impar";
        }
    }

    echo (es_par($numero));
    echo "<br/>";
    echo '<a href="par_ejer5_Nuria.html">Enlace a la pagina inicial</a>';

?>

