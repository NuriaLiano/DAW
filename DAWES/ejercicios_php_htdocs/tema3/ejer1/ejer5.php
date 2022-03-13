<?php 

    for ($i = 0; $i <= 100; $i++) {
        for ($a = 0; $a <=100 ; $a++) {
            for ($b = 0; $b <=100 ; $b++){
                if ($i + $a + $b == $i * $a * $b ) {
                    echo $i.$a.$b. "<br/>";
                }  
            }
        }
    }

?>