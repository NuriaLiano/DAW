<?php
    // Borramos los datos de la cesta y nos dirigimos a login.php
    session_start();

    unset($_SESSION["cesta"]);
    header("Location: productos.php");
?>