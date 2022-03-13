<?php 

    function billete($distancia, $ndias) {
        $precio = 2.5;
        
        if(($ndias > 7)&&($distancia > 800)){
            $precioto = $distancia * $precio * $ndias-0.3; 
           
        }
        else{
            $precioto = $distancia * $precio*$ndias;
        }
        echo $precioto;
    }
    
    billete(600, 8);

?>