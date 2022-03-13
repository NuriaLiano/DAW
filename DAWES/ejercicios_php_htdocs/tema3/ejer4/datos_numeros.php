<?php
    
    $menor = $_REQUEST['menor'];
    $mayor = $_REQUEST['mayor'];
    
    //TITULO
    echo "<h1>Lista de pares de numeros de " . $menor . " y " . $mayor, "</h1>";
    
    //Llamar a la funcion
    function pares($menor, $mayor){
        
                
        $primero = $menor;
        $segundo = $mayor;
        
        echo "<p>";
        for ($contador = $menor; $contador <= $mayor; $contador++) {
            echo "($primero, $segundo) ";
            $primero++;
            $segundo--;
        }
        echo "</p>";

    }
    echo (pares($menor, $mayor));

?>