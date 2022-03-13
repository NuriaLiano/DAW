<?php
    require_once('funciones_PDO.php');    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>hoja 1 ejercicio 7</title>
        <meta charset="UTF-8">
        <style>
            table{
                padding:5px;
                
            }
            td{
                background-color: #1cf91c7a;
                border-radius: 30px;
                width: 30%;
                text-align: center;
                padding: 5px;
            }
            input[type=text]{
                background-color: #1cf91c7a;
                border: 0px;
            }
        </style>
    </head>
    <body>
            <h1>Jugadores de la NBA</h1>
            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> <!-- $_SERVER['PHP_SELF'] es una forma de enviar los datos al 
            formulario dentro de la misma pag -->
                <p>Equipo
                    <?php
                        echo "<select name='equipo_elegido'>";
                        foreach(getEquipos() as $equipo){
                            echo "<option value='" .$equipo['nombre'] ."'>" .$equipo['nombre'] ."</option>";
                        }
                        echo "</select>";

                    ?>
                </p>
                <input type="submit" value="Mostrar" name="enviar"> 
            </form>
            
            <?php
            if(isset($_POST['enviar'])){
                
                if(isset($_POST['equipo_elegido']) && !empty($_POST['equipo_elegido'])){
                    $array = [];
                    $equipo_elegido = $_POST['equipo_elegido'];
                    echo "<table><tr><th>NOMBRE</th><th>PESO</th></tr>";
                    echo "<form action='" .$_SERVER['PHP_SELF'] ."' method='post'>";
                    foreach(getJugadores($equipo_elegido) as $jugador){
                        echo "<tr>";
                        echo "<td>" .$jugador['nombre'] ."</td>";
                        echo "<td><input type='number' value='" .$jugador['peso'] ."' name='" .$jugador['nombre']."'></td>";
                        echo "</tr>";
                        
                    }
                    echo "<input type='submit' value='Actualizar' name='actualizar'>";
                    echo "</form>";
                }
            }

            if(isset($_POST['actualizar'])){
                
                if(modificar_peso($_POST)){
                    echo "bien";
                }
            }
            ?>
            
    </body>
</html>