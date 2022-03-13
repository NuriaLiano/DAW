<?php 


    for ($i = 100; $i <= 999 ; $i++) {
        $cociente = $i;
        $num = 0;
        while ($cociente != 0){
            $resto = $cociente % 10;
            $num = $num * 10 + $resto;
            $cociente = (int)($cociente / 10);
        }
        if ( $i == $num ){
            print "El numero $i Es capicua <br/>";
        }
    }
    
     

    

?>