<?php 

    include 'ejer4_Nuria.php';
    
    $interesS = interesSimple(15000,0.07,1);
    $interesC = interesCompuesto(15000,0.07,1);
    
    echo "el interes simple ". interesSimple(15000,0.07,1);
    echo "<br/>";
    echo "el interes compuesto ". interesCompuesto(15000,0.07,1);

?>