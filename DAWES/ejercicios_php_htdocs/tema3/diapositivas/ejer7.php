<?php 
    
    precio_con_iva();
    function precio_con_iva(){
        global $precio;
        $precio_con_iva = $precio *1.21;
        print "el precio con iva es ". $precio_con_iva;
    }
    $precio = 10;
    
    
?>