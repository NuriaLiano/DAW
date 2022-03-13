<?php
    // Borramos los datos de la sesión y nos dirigimos a login.php
    session_start();

    session_unset();
    header("Location: index.php");
?>