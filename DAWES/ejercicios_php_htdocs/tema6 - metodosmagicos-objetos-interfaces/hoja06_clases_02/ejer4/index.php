<?php 

    include 'ejer4.php';

    $arrayProductos = [];
    
        //objeto producto
        $monitorIsa = new Electronica ();
        $monitorIsa->setCodigo(1);
        $monitorIsa->setNombre("monitor LG");
        $monitorIsa->setPrecio(200);
        $monitorIsa->setPlazo_garantia(2);
        $monitorIsa->mostrar();
        
        //objeto producto
        $raspberryNuria = new Electronica ();
        $raspberryNuria->setCodigo(2);
        $raspberryNuria->setNombre("Raspberry 4");
        $raspberryNuria->setPrecio(50);
        $raspberryNuria->setPlazo_garantia(1);
        $raspberryNuria->mostrar();

        //objeto producto
        $rosconReyes = new Alimentacion ();
        $rosconReyes->setCodigo(3);
        $rosconReyes->setNombre("Roscon de reyes");
        $rosconReyes->setPrecio(20);
        $rosconReyes->setMes(1);
        $rosconReyes->setAnioCaducidad(2022);
        $rosconReyes->mostrar();
        
        //objeto producto
        $jamon = new Alimentacion ();
        $jamon->setCodigo(4);
        $jamon->setNombre("Jamon iberico");
        $jamon->setPrecio(500);
        $jamon->setMes(11);
        $jamon->setAnioCaducidad(2022);
        $jamon->mostrar();

        //meter en la cesta
        array_push($arrayProductos, $raspberryNuria, $jamon);
        
       //mostrar todo
        echo "<h2>Mostramos todos los productos de la cesta</h2>";
        for ($i=0; $i <sizeof($arrayProductos);$i++){
            echo "<br/>";
            $arrayProductos[$i]->mostrar();
            echo "<br/>";
        }
        //mostramos importe total
        echo "<h2>Mostramos el importe de los productos de la cesta</h2>";
        $total = 0;
        for ($i=0; $i <sizeof($arrayProductos);$i++){
            //echo "<br/>";
            echo $arrayProductos[$i]->getPrecio();
            $total += $arrayProductos[$i]->getPrecio();
            echo "<br/>";
        }
        
        echo "<hr/>";
        echo $total;
        
        //mostramos cual es mas caro
        echo "<h2>Mostramos el producto mas caro</h2>";
        $Alimentacion=0;
        $Electronica=0;
        foreach ($arrayProductos as $producto) {
            if ($producto instanceof Alimentacion){
                $Alimentacion += $producto->getPrecio();
            }else{
                $Electronica += $producto->getPrecio();
            }
        }
        if ($Electronica > $Alimentacion) {
            echo "<strong>Has gastado mas dinero en Electronica: </strong>" . $Electronica . " euros";
        }
        else {
            echo "<strong>Has gastado mas dinero en Alimentacion: </strong>" . $Alimentacion. " euros";
        }      

?>