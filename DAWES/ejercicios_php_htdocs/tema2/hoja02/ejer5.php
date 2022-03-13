<?php 
    #variables
    $temporal;
    
    $array = array("juan", 3,14, false, 3, null);
    foreach ($array as $temporal){
        echo gettype($temporal)," ", var_dump($temporal);
        echo "<br/>";
    };
?>