<?php 

    $iva = true;
    $precio = 10;
    
    
    if ($iva){
        function precio_con_iva(){
            global $precio;
            $precio_iva = $precio * 1.21;
            print "el precio con iva es ". $precio_iva;
        }
    }
    

?>