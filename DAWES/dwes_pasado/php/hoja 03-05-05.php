<!DOCTYPE html>
    <head>
        <title>Hoja03-05-04</title>
        <meta charset="UTF-8"></meta>
    </head>
    <body>
    <h2>Suma de cantidades</h2>
    <?php
        //creamos un formulario
        echo "<form action='hoja 03-05-05.php'  method='post'>";
            $contador = 0;

            //recorremos el for y vamos creando los input
            for($i=0;$i<10;$i++){
                $contador++;
                //usamos el contador para que cada input tenga un name diferente
                echo "<p>Cantidad " . $contador . "<input name='caja" . $contador ."' type='number'></p>"; 
            }

        echo "<p><input type='submit' value='Sumar' name='enviar'></p>";
        echo "</form>";

        if(isset($_POST['enviar'])){
            
            $total = 0;

            //recorremos el for para poder juntarlo con el contador creado antes para los name del input
            for($i=1;$i<11;$i++){

                //traemos los valores de los input
                $numero = $_POST['caja' .$i];

                //lo convertimos a int
                $numero_n = intval($numero);

                //sumamos
                $total += $numero_n;
            }

            //imprimimos
            echo "La suma total es " .$total;
        }

    ?>
    </body>
</html>