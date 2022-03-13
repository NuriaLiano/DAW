<?php 
    $numpri=3;
     
    if(primos($numpri)){
    echo " el numero $numpri es primo";
    }
    else {
    	echo " el numero $numpri es compuesto";
    }
    function primos($num){
        if($num == 1 || $num == 2 || $num == 3 || $num == 5 || $num == 7){
            return true;
        }
        if($num >= 8 ){
            if ($num%2==0 || $num%3==0 || $num%5==0) {
                return false;
            }
        }
        if($num >= 8 ){
            if ($num%2>=1 || $num%3>=1 || $num%5>=1) {
                return true;
            }
        }
    }
?>