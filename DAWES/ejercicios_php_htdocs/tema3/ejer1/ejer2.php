<?php 
    $temporal = null;
    
    for($i=10;$i<=100;$i++){
        if($i % 2 == 0){
            $temporal += $i;
            echo $i . " - ";
        }
    }
    echo "la suma es: ".$temporal;

?>