<?php 
require_once 'includes/BaseDatos.class.php';
require_once 'modelo.php';

global $lista_productos;

$lista_productos = Producto::obtener_productos();

$sumaPrecios = 0;

// INICIALIZACI�N SESI�N CESTA
if (isset($_SESSION["cesta"])) {
    $cesta = $_SESSION["cesta"];
    
    foreach ($cesta as $producto){
        
        $p = unserialize($producto);
        
        $sumaPrecios += $p->getPrecio();
    }
} else {
    $cesta = [];
}





// AGREGAR PRODUCTO
if (isset($_POST["agregar_producto"])) {
    
    $pMeter = new Producto($_POST["codigo"], $_POST["nombre"], $_POST["des"],$_POST["precio"], $_POST["familia"]);
    
    $a = serialize($pMeter);
    
    array_push($cesta, $a);
    
    $_SESSION["cesta"] = $cesta;
    
    header("Location: index.php?option=productos");
    
}

if (isset($_POST["verDatos"])) {
    
    $_SESSION["productoConcreto"] = $_POST["codigo"];
    
    header("Location: index.php?option=datosProducto");
}


if (isset($_POST["vaciarCesta"])) {

    unset($_SESSION["cesta"]);
    header("Location: index.php?option=productos");
}

if (isset($_POST["comprar"])) {
    
    header("Location: index.php?option=cesta");
}


if (isset($_POST["desconectarUsuario"])) {
    
    session_unset();  
    header("Location: index.php?option=login");
}

if (isset($_POST["verDatosUsuario"])) {
    
    header("Location: index.php?option=datosUsuario");
}

if (isset($_POST["insertarProducto"])) {
    
    
    header("Location: index.php?option=insertProducto");
}



require_once 'vista.php';

?>          
            