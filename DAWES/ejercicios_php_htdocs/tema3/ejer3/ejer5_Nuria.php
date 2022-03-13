<?php 

    $articulo1 = array("codigo" => 123, "descripcion" => "arroz", "existencias" => 2);
    $articulo2 = array("codigo" => 456, "descripcion" => "alubias", "existencias" => 20);
    $articulo3 = array("codigo" => 789, "descripcion" => "garbanzos", "existencias" => 14);
    $articulo4 = array("codigo" => 321, "descripcion" => "ruedas", "existencias" => 4);
    
    function mayor($articulo1, $articulo2, $articulo3, $articulo4) {
        //$cantidad = ;
        if (($articulo1["existencias"] > $articulo2["existencias"])&& ($articulo1["existencias"] > $articulo3["existencias"])&&($articulo1["existencias"] > $articulo4["existencias"])) {
            print_r( "El articulo mayor es: ". $articulo1["descripcion"]);
        }else if(($articulo2["existencias"] > $articulo3["existencias"])&&($articulo2["existencias"] > $articulo4["existencias"])){
            print_r( "El articulo mayor es: ". $articulo2["descripcion"]);
        }else if (($articulo3["existencias"] > $articulo4["existencias"])){
            print_r( "El articulo mayor es: ". $articulo3["descripcion"]);
        }else{
            print_r( "El articulo mayor es: ". $articulo4["descripcion"]);
        }  
    }
    
    function menor($articulo1, $articulo2, $articulo3, $articulo4) {
        //$cantidad = ;
        if (($articulo1["existencias"] < $articulo2["existencias"])&& ($articulo1["existencias"] < $articulo3["existencias"])&&($articulo1["existencias"] < $articulo4["existencias"])) {
            print_r( "El articulo menor es: ". $articulo1["descripcion"]);
        }else if(($articulo2["existencias"] < $articulo3["existencias"])&&($articulo2["existencias"] < $articulo4["existencias"])){
            print_r( "El articulo menor es: ". $articulo2["descripcion"]);
        }else if (($articulo3["existencias"] < $articulo4["existencias"])){
            print_r( "El articulo menor es: ". $articulo3["descripcion"]);
        }else{
            print_r( "El articulo menor es: ". $articulo4["descripcion"]);;
        }
    }
    
    function visualizar($articulo1, $articulo2, $articulo3, $articulo4) {
        var_dump($articulo1);
        echo "<br/>";
        var_dump($articulo2);
        echo "<br/>";
        var_dump($articulo3);
        echo "<br/>";
        var_dump($articulo4);
        
    }
    
    
    echo mayor($articulo1, $articulo2, $articulo3, $articulo4);
    echo "<br/>";
    echo menor($articulo1, $articulo2, $articulo3, $articulo4);
    echo "<br/>";
    echo visualizar($articulo1, $articulo2, $articulo3, $articulo4);
    
    
    
?>