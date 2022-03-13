<?php
    require_once('funcionalidad.php'); 
    session_start();
    $usuario = $_SESSION['usuario']['nombre'];
    
    if($usuario == null){
        header("Location:login.php");
    }   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reservar</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
    <?php
         echo "<h1>Bienvenido ". $_SESSION['usuario']['nombre'] ."</h1>";
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <p>Elige el viaje: 
        <?php
            echo "<select name='viaje_elegido'>";
            foreach(mostrarViajes() as $viaje){
                echo "<option value='".$viaje['id'] ."'>".$viaje['nombre']."(".$viaje['precio']."€)";
            }
            echo "</select>";

        ?></p>
        <p>Número de personas: <input type="number" min=0 name="personas"></p>
        
        <input type="submit" value="Reservar" name="enviar">
    </form>
    <p><a href="viajes.php">Volver al listado de viajes</a></p>
    <p><a href="reservas_realizadas.php">Ver Reservas</a></p>
    <p><a href="logout.php">Desconectar <?php echo $_SESSION['usuario']['nombre']?> </a></p>

    <?php
        if(isset($_POST['enviar'])){
            
            if(isset($_POST['viaje_elegido']) && isset($_POST['personas'])){
                $viaje_elegido = $_POST['viaje_elegido'];
                $personas = $_POST['personas'];
                $usuario_id = $_SESSION['usuario']['id'];
                

                if(reservar($usuario_id,$viaje_elegido,$personas)){
                    echo "Reserva realizada con éxito";
                }else{
                    echo "Ha ocurrido un error";
                }
            }
        }
    ?>
    </body>
</html>