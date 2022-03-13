<?php 

    function interesSimple($capital, $redito, $tiempo) {
        $interesS = $capital * $redito * $tiempo;
        return $interesS;
    }
    
    function interesCompuesto($capital, $redito, $tiempo) {
        $interesC = $capital * pow((1 + $redito / 100), $tiempo);
        return $interesC;
    }
    
    function beneficioso($interesS, $interesC) {
        if ($interesS < $interesC) {
            echo "es más beneficioso el interés simple";
        }else{
            echo "es más beneficioso el interés compuesto";
        }
    }


?>