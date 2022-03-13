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
        <title>Viajes</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
    
    <?php
        
        echo "<h1>Bienvenido ". $_SESSION['usuario']['nombre'] ."</h1>";
        
        echo "<table><tr><th>Nombre</th><th>Precio</th></tr>";
        foreach(mostrarViajes() as $viajes){
            echo "<tr>";
            echo "<td>".$viajes['nombre']."</td>";
            echo "<td>".$viajes['precio']." €</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <p><a href="reservar.php">Reservar Nuevo Viaje</a></p>
    <p><a href="logout.php">Cerrar Sesion</a></p>
    </body>
</html>