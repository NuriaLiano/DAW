<!DOCTYPE html>
<html>
<head>
<title>Supermercado de Nuria Gutierrez Liano</title>
</head>
<body>
    <?php
    require_once 'categoria.php';
    require_once 'producto.php';
    require_once 'alimentacion.php';
    require_once 'electronica.php';
    require_once 'DB.php';
    
    $bbdd = new db("localhost", "root", "", "dwes_supermercado");
    
    echo "<h2>Productos Supermercado</h2>";   
    $listado = $bbdd->getProductos();
     
    foreach ($listado as $lista) {   
        $lista = new producto($lista->codigo, $lista->precio, $lista->nombre, $lista->categoria);
        print $lista->mostrar() . "<br/>";
        echo "<br/>";
    }  
    ?>
    
    <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <h2>Listado de las categorias</h2> 
    <select name="categoria">
    	<?php 
    	$listadoCategoria = $bbdd->getCategorias();
    	foreach ($listadoCategoria as $lista) { 	    
    	    $lista = new categoria($lista->id, $lista->nombre);	    
    	    echo "<option  value=".$lista->getNombre()."> ".$lista->getNombre()." </option>";
    	    echo "<br/>";
    	}	
    	?>
    </select>
    
    <input name="busqueda" type="submit" value="Buscador"></input>
    <?php   
    if (isset($_POST["busqueda"])) {      
         $c = $_POST["categoria"];      
        if($bbdd->getCategoriaElectronica($c)!= null){                    
            $listaCat = $bbdd->getCategoriaElectronica($c);        
            foreach ($listaCat as $l) {       
                print $l->nombre. " " . $l->plazoGarantia."<br>";
            }
         
        } else {
            $listaCat = $bbdd->getCategoriaAlimentacion($c);          
            foreach ($listaCat as $l) {      
                print $l->nombre . " " . $l->mesCaducidad . "/" . $l->anioCaducidad . "<br>";
            }  
        }    
    }
   ?>
</form>
</body>
</html>