Mirar como mantener la opcion elegida en select al dar a convertir

<!DOCTYPE html>
    <head>
        <title>Hoja03-05-01</title>
        <meta charset="UTF-8"></meta>
    </head>
    <body>
    <h2>Conversor de Monedas</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <p>Cantidad<input type="number" name="cantidad" value="<?php echo (!empty($_POST['cantiad'])) ? $_POST['cantidad'] : ""; ?>"></p>
        <p>Origen
            <select name="origen">
                <option value="libras" <?php if($_POST['origen']=="libras"){ echo "selected='selected'";}?>>Libras</option>
                <option value="euros" <?php if($_POST['origen']=="euros"){ echo "selected='selected'";}?>>Euros</option>
                <option value="dolares" <?php if($_POST['origen']=="dolares"){ echo "selected='selected'";}?>>Dolares</option>
            </select>
        </p>
        <p>Destino
        <select name="destino">
                <option value="dolares" <?php if($_POST['destino']=="dolares"){ echo "selected='selected'";}?>>Dolares</option>
                <option value="euros" <?php if($_POST['destino']=="euros"){ echo "selected='selected'";}?>>Euros</option>
                <option value="libras" <?php if($_POST['destino']=="libras"){ echo "selected='selected'";}?>>Libras</option>
            </select>
        </p>
        <input type="submit" value="Convertir" name="enviar">
    </form>

    <?php
        if(isset($_POST['enviar'])){
            
            
            if(isset($_POST['cantidad']) && isset($_POST['origen']) && isset($_POST['destino'])){
                
                $cantidad = $_POST['cantidad'];
                $origen = $_POST['origen'];
                $destino = $_POST['destino'];
               
                if(!empty($cantidad)  && !empty($destino) && !empty($origen)){

                    
                    if($origen == $destino){
                        echo "Origen y Destino son iguales";
                        
                    }else{ 
                        
                    $conversiones = [
                        'euros_dolares' => 1.36,
                        'dolares_euros' => 0.85,
                        'dolares_libras' => 0.73,
                        'libras_dolares' => 1.38,
                        'libras_euros' => 1.17,
                        'euros_libras' => 0.85
                    ];

                    $resultado = $cantidad * $conversiones[$origen ."_".$destino];
                    echo round($resultado,3);
                }

                }else{
                    echo "Rellene todos los datos";
                }
            }
            
        }
    ?>
    </body>
</html>