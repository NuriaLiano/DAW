<?php
    $array = [
        "SEAT" => ["Leon",'Alhambra','Cordoba','Altea'],
        "BMW" => ["Serie 1","M1351i","Serie 2","Serie 3","Serie 4"],
        "CITROEN" => ["C4","C3","C4 Cactus","Berlingo","C3 Picasso"],
        "PEUGEOT" => ["208","3008","308","2008"]
    ];

?>
<!DOCTYPE html>
    <head>
        <title>Hoja03-06-01</title>
        <meta charset="UTF-8"></meta>
    </head>
    <body>
    <?php
        if(isset($_POST['modificar'])){
            
            $marca = $_POST['marca'];
            
            $array_modificado = $_POST['array_modificado'];
            
            foreach($array[$marca] as $key => $cocheoriginal){
                if($cocheoriginal !== $array_modificado[$key]){
                    echo "El modelo " .$cocheoriginal ." ha sido modificado por " . $array_modificado[$key] . "<br>";
                }
            }

            
        }
    ?>
    <h3>Busca tu coche</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <p>Marca
        
            <?php
                
                echo "<select name='marca'>";
                foreach($array as $key => $valor){
                    echo "<option value='$key'>$key</option>";
                };
                echo "</select>"

            ?>
        </p>
        <input type="submit" value="Mostrar" name="enviar">
        
    </form>

    <?php
        if(isset($_POST['enviar'])){
            if(isset($_POST['marca'])){
                $marca = $_POST['marca'];
                $contador = 0;
                echo "<form action='hoja 03-06-01.php' method='post'>";
                foreach($array as $key=>$valor){
                    foreach($valor as $modelos){
                        if($key == $marca){
                            echo "<p><input type='text' name='array_modificado[]' value='$modelos'></p>";
                        }
                    }
                    
                }
                echo "<input type='hidden' value='$marca' name='marca'>";
                echo "<input type='submit' name='modificar' value='Modificar'>";
                echo "</form>";
               
            }
            
        }
    ?>
    </body>
</html>