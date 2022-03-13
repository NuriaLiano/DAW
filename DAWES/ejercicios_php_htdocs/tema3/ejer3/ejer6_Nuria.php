<?php 

    $verbos = array("caminar", "saltar", "brindar");
    
    $aleatorio = array_rand($verbos, 1);
    
    $palabra = $verbos[$aleatorio]; //imprime un valor aleatorio del array
    $recorte = substr($palabra, 0, -2);
    //echo $recorte;
    for ($i = 1; $i <= 6; $i++) {
        if ($i == 1) {
            echo $recorte."o <br/>";
        }else if ($i == 2){
            echo $recorte."as <br/>";
        }else if ($i == 3){
            echo $recorte."a <br/>";
        }else if ($i == 4){
            echo $recorte."amos <br/>";
        }else if ($i == 5){
            echo $recorte."ais <br/>";
        }else if ($i == 6){
            echo $recorte."an <br/>";
        }
    }
?>