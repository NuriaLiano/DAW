<html>
<head>
<title>Ejercicio 3</title>

</head>

<body>

<?php
require_once 'categoria.php';
require_once 'producto.php';
require_once 'alimentacion.php';
require_once 'electronica.php';
require_once 'funcionesBBDD.php';

$bbdd = new BD("localhost","dwes_supermercado","root","");

echo "<h1> Listado de productos </h1>";

$lista = $bbdd->getProductos();

echo "<ol> ";

foreach ($lista as $key) {
    
    $key = new Producto($key->codigo, $key->precio, $key->nombre, $key->categoria);
    print "<li>". $key->muestra()."</li><br>";
}
echo "</ol>";



?>

<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<h1>Listado por categorias</h1>



<select name="categoria">
	<?php 
	$listaCategoria = $bbdd->getCategorias();
	foreach ($listaCategoria as $key) {
	    
	    $key = new Categoria($key->id, $key->nombre);
	    
	    echo "<option  value=".$key->getNombre()."> ".$key->getNombre()." </option>";
	}
	
	?>
</select>

<input name="buscar" type="submit" value="Buscar por categoria"></input>

<?php 

if (isset($_POST["buscar"])) {
    
     $cate = $_POST["categoria"];
     
    if($bbdd->buscarPorCategoriaElectronica($cate)!= null){
        
       
        $listaPorCategoria = $bbdd->buscarPorCategoriaElectronica($cate);
        
        echo "<ul> ";
        
        foreach ($listaPorCategoria as $key) {
            
            print "<li>".  $key->nombre. $key->plazoGarantia."</li><br>";
        }
        echo "</ul>";
        
        
    }else{
        $listaPorCategoria = $bbdd->buscarPorCategoriaAlimentacion($cate);
        
        echo "<ul> ";
        
        foreach ($listaPorCategoria as $key) {
            
            print "<li>".  $key->nombre. $key->mesCaducidad."</li><br>";
        }
        echo "</ul>";
        
        
        
    }
    
    
   
}



?>




</form>

	</body>
</html>
