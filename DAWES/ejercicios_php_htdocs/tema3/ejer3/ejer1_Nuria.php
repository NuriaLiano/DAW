<?php 

    $arrayuno = array();
    $arraydos = array();
    
    //rellenar el array uno
    for ($i = 0; $i <= 10; $i++) {
        $aleatorio = rand(1,10);
        array_push($arrayuno, $aleatorio);
    }
    
    //rellenar el array dos
    for ($i = 0; $i <= 10; $i++) {
        $aleatorio = rand(1,10);
        array_push($arraydos, $aleatorio);
    }
    
    echo "El array uno con numeros random es: <br/>";
    print_r($arrayuno);
    echo "<br/>";
    echo "El array dos con numeros random es: <br/>";
    print_r($arraydos);
    echo "<br/>";
    echo "El array uno ordenado es: <br/>";
    sort($arrayuno);
    var_export($arrayuno);
    echo "<br/>";
    echo "El array dos ordenado es: <br/>";
    sort($arraydos);
    var_export($arraydos);
    echo "<br/>";
    echo "Los arrays mezclados: <br/>";
    $resultado = array_merge($arrayuno, $arraydos);
    print_r($resultado);

?>