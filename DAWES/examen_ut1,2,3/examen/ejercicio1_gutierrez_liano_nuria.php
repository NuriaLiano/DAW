<?php
    
    $pesetas = $_REQUEST['peseta'];
    $euros = $_REQUEST['euro'];
    
        
   
    function conversor_pesetas($pesetas){
        $resultado = 166.6 * $pesetas;
        echo "Tengo ". $pesetas. " pesetas que son ". $resultado. " euros";
    }
    
   
    
    function conversor_euros($euros){
        $resultado = 166.6 / $euros;
        echo "Tengo ". $euros. " euros que son ". $resultado. " pesetas";
    }
    
    echo conversor_pesetas($pesetas);
    echo "<br/>";
    echo conversor_euros($euros);
 
?>