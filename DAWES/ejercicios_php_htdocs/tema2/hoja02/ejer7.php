<?php 
    #variables
    $varpri = "hola";
    $varsec = "mundo";
    $intercambio = null;
    
    #sin intercambiar
    echo "estas son las variables sin intercambiar: <br/>";
    echo "varpri = ", $varpri;
    echo "<br/>";
    echo "varsec = ", $varsec;
    echo "<br/>";
    echo "<br/>";
    
    $intercambio = $varpri;
    $varpri = $varsec;
    $varsec =$intercambio;
    
    
    #intercambiadas
    echo "estas son las variables intercambiadas: ";
    echo "<br/>";
    echo "varpri = ", $varpri;
    echo "<br/>";
    echo "varsec = ". $varsec;
?>