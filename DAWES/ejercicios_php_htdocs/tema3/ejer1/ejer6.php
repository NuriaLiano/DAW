<?php
    function fibonacci($n)
    {
        $ns=[0,1];
        for ($i = 2; $i < $n; $i++) {
            $ns[$i] = $ns[$i - 2] + $ns[$i - 1];
        }
        return $ns;
    }
    
    
    $resultado=fibonacci(10);
    echo join(",", $resultado);
?>