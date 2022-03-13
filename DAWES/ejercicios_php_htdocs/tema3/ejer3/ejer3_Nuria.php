<?php 
    
    $letras = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
    $dni = 72137199;
    $resto = $dni%23;
    echo $dni.$letras[$resto];  
    
?>