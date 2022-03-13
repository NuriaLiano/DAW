<?php
    require_once('funcionalidad.php'); 
    session_start();
    $usuario = $_SESSION['usuario']['nombre'];
    $usuario_id = $_SESSION['usuario']['id'];
    if($usuario == null){
        header("Location:login.php");
    }   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mis Reservas</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
    <h1>Todas las reservas realizadas</h1>
    <?php
    echo "<table><tr><th>Cliente</th><th>Viaje</th><th>Personas</th><th>Precio Total</th></tr>";
        foreach(misReservas($usuario_id) as $reservas){
            $precioTotal = $reservas['precio'] * $reservas['personas'];
            echo "<tr>";
            echo "<td>" .$reservas['nombre_cliente'] ."</td>";
            echo "<td>" .$reservas['nombre_viajes'] ."</td>";
            echo "<td>" .$reservas['personas'] ."</td>";
            echo "<td>" .$precioTotal ."€</td>";
            echo "</tr>";
        }
    ?>
    <p><a href="viajes.php">Volver al listado de los viajes</a></p>
    <p><a href="logout.php">Desconectar <?php echo $_SESSION['usuario']['nombre']?> </a></p>
    </body>
</html>