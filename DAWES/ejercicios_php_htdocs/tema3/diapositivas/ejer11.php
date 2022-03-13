<?php 

    function precio_con_iva($precio, $iva=0.21){
        return $precio * (1 + $iva);
    }
    $precio = 10;
    $precio_iva = precio_con_iva($precio);
    print "el precio con iva es ". $precio_iva;
?>