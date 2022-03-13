<?php 
    
    include_once 'ejer3.php';
    
    //crear objeto
    $money = new Monedero(500);
    
    //imprimir el saldo inicial
    $money->consultarMonedero();
    echo "<br/>";
    //aumentar saldo
    $money->introDinero(1000);
    echo "<br/>";
    $money->consultarMonedero();
    echo "<br/>";
    //disminuir saldo
    $money->sacarDinero(100);
    echo "<br/>";
    $money->consultarMonedero();
    echo "<br/>";
    //crear otros dos monederos
    $moneyForAll = new Monedero (10000);
    $moneyForMe = new Monedero (5);
    echo "<br/>";
    //mostrar todos los monederos
    echo "El numero de monederos es: ".Monedero::$numero_monederos;
    echo "<br/>";
    //eliminar un monedero
    unset($money);
    echo "El numero de monederos eliminando uno es: ".Monedero::$numero_monederos;
    

?>