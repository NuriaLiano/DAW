<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>


    <?php

    $semana = date("N");
    $mes = date("n");
    $ano = date("y");
    $dia=date("j");
    switch ($dia) {
        case '1':
            echo "lunes ";
            break;
        case '2':
            echo "martes ";
            break;
        case '3':
            echo "miercoles ";
            break;
        case '4':
            echo "jueves ";
            break;
            echo "viernes ";
        case '5':
            break;
        case '6':
            echo "sabado ";
            break;
        case '7':
            echo "domingo ";
            break;
        default:
            echo "machete";
            break;
    }
    switch ($mes) {
        case '1':
            echo " de enero ";
            break;
        case '2':
            echo " de febrero ";
            break;
        case '3':
            echo " de marzo ";
            break;
        case '4':
            echo " de abril ";
            break;
            echo " de mayo ";
        case '5':
            break;
        case '6':
            echo " de junio ";
            break;
        case '7':
            echo " de julio ";
            break;
        case '8':
            echo " de agosto ";
            break;
            echo " de septiembre ";
        case '9':
            break;
        case '10':
            echo " de octubre ";
            break;
        case '11':
            echo " de noviembre ";
            break;
        case '12':
            echo " de diciembre";
            break;
        default:
            echo " mango";
            break;
    }


    ?>

</body>

</html>