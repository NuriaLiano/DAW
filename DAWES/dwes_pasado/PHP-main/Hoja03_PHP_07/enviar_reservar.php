<?php

if (
    isset($_POST['nombre'], $_POST['email'], $_POST['personas'], $_POST['edad'])
    && $_POST['nombre'] && $_POST['email'] && $_POST['personas'] && $_POST['edad']
) {


    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $email = $_POST['email'];
    $personas = $_POST['personas'];
    $edad = $_POST['edad'];
    $precioTotal = 0;
    echo "<h1>Bienvenido: " . $nombre . "</h1>" . " Su precio es: ";

    $fecha_inicio = "01-07-2020";
    $fecha_fin = "30/09/2020";
  

    if (isset($_POST['guia'])) {
        if ($fecha > $fecha_inicio && $fecha < $fecha_fin) {
            $precioTotal = $personas * 5;
            echo "\n" . $precioTotal . " temporada alta";
        } else if( $fecha > $fecha_fin) {
            $precioTotal = $personas * 4;
            echo "\n" . $precioTotal . " temporada baja";
        }
    }
    //no he entendido lo que pedia de los grupos, por lo tanto asumo que solo hay un grupo, por lo tanto el precio es 25
    if (isset($_POST['educativa'])) {
        $precioTotal = 25;
        echo "\n" . $precioTotal;
    } 
} else {
    echo "Completa los campos para obtener el precio";
}
