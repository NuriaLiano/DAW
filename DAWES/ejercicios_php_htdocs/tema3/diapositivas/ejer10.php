<?php 

    function precio_con_iva($precio){
        return $precio * 1.21;
    }
    $precio = 10;
    $precio_iva = precio_con_iva($precio);
    print "el precio con iva es ". $precio_iva;
?>