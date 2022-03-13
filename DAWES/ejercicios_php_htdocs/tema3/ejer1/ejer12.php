<?php 
    
    function esprimo($primo){
        for($i = 2; $i < $primo; $i++){
            if ($primo % $i == 0){
                return false;
            }
        }
        return true;
    }
    
    for($i = 3; $i <= 999; $i++){
        if(esprimo($i)){
            echo $i." - - ";
        }
    }

?>