<?php 

    include_once 'ejer2.php';
    
    echo "<h2>CUENTA NORMAL</h2>";
    $clienteNuevo = new Cuenta(1, "Nuria", 150);
    
    //ingresamos dinero
    $clienteNuevo->ingreso(100);
    $clienteNuevo->mostrar();
    echo "<br>";
    
    //sacamos dinero
    $clienteNuevo->reintegro(150);
    $clienteNuevo->mostrar();
    echo "<br>";
    
    //primero hay que usar es preferencial
    echo $clienteNuevo->esPreferencial(200);
    echo "<br>";
    
    //PARTE DE LA CUENTA CORRIENTE
    echo "<h2>CUENTA CORRIENTE</h2>";
    $clienteNuevo2 = new CuentaCorriente(2, "Isa", 200, 10);
    $clienteNuevo2->mostrar();
    
    //sacar dinero
    $clienteNuevo2->reintegro(150);
    $clienteNuevo2->mostrar();
    
    //PARTE DE LA CUENTA DE AHORRO
    echo "<h2>CUENTA DE AHORRO</h2>";
    $clienteNuevo3 = new CuentaAhorro(3, "Nieves", 400, 100, 15);
    $clienteNuevo3->aplicaIntereses();
    $clienteNuevo3->mostrar();
?>