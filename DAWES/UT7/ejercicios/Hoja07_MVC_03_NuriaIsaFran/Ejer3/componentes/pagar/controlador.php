<?php
require_once 'includes/BaseDatos.class.php';
require_once 'modelo.php';

    
    
    if (isset($_SESSION["cesta"])) {
        unset($_SESSION["cesta"]);
   }

    if (isset($_POST['volver'])) {
        header("Location: index.php?option=productos");
    }

    require_once 'vista.php';
    
    ?>   