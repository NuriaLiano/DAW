<?php
if (isset($_POST)) {
    $primero = $_POST["primero"];
    $segundo = $_POST["segundo"];
    switch ($respuesta = $_POST["operacion"]) {
        case $respuesta == "suma":
            echo "La suma de ambos numeros  es: " . ($primero + $segundo);
            break;
        case $respuesta == "resta":
            echo "La resta de ambos numeros es: " . ($primero - $segundo);
            break;
        case $respuesta =="producto":
            echo "El producto de ambos numeros es: " . ($primero * $segundo);
            break;
        case $respuesta =="cociente":
            echo "El cociente de ambos numeros es: " . ($primero / $segundo);
            break;
        default:
            echo "Introduzca números";
            break;
    }
}
