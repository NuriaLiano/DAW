<?php 

if (isset($_POST["enviar"])) {
    $mayor=$_POST["mayor"];
    $menor=$_POST["menor"];
    $resta=$mayor-$menor;
    for ($i = 0; $i <= $resta; $i++) {
        echo "($menor , $mayor)";
        $menor++;
        $mayor--;
    }
}


?>