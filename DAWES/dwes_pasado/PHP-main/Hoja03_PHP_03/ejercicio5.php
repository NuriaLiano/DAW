<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $arrayArticulo = array(
        'codigo' => [1, 2, 3, 4],
        'descripcion' => ["uno", "dos", "tres", "cuatro"],
        'existencias' => [1000, 2000, 3000, 4000]
    );

    function mayor($arrayArticulo)
    {

        foreach ($arrayArticulo as $articulo) {
            echo $articulo["existencias"];
        }
    }
    $mayor = $arrayArticulo["existencias"][0];
    foreach ($arrayArticulo["existencias"] as $valor) {
        if ($valor > $mayor) {
            $mayor = $valor;
        }
    }

    function suamr($arrayArticulo)
    {
        
    }
    function mostrar($arrayArticulo)
    {
        for ($i = 0; $i < count($arrayArticulo["codigo"]); $i++) {
            echo $arrayArticulo["codigo"][$i];
        }
    }
    ?>
</body>

</html>