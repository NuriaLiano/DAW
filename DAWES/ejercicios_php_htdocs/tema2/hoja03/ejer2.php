<?php 
    //variables
    $fecha = date("d-m-y");
    
    //restar 4 dias
    $fecha_resta = strtotime("- 4 days");
    
    echo "La fecha actual es: ". date("d-m-Y");
    echo "<br/>";
    echo "La fecha actual -4 dias es: ". date("d-m-Y", $fecha_resta);

?>