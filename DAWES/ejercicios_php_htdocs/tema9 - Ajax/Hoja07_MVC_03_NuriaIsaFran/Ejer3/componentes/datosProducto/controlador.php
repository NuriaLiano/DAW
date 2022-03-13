<?php 

require_once 'includes/BaseDatos.class.php';
require_once 'modelo.php';

$productoConcreto = $_SESSION["productoConcreto"];

global $producto;
$producto = Producto::obtener_producto($productoConcreto);

global $listaComentarios;
$listaComentarios = Producto::obtener_comentarios_producto($productoConcreto);


if (isset($_POST["modificar"])) {
    
    $nuevoCod = $_POST["cod"];
    $nuevoNombre = $_POST["nombre"];
    $nuevaDescrip = $_POST["descrip"];
    $nuevoPrecio = $_POST["precio"];
    $nuevaFamilia = $_POST["familia"];
    
    if(Producto::mod_producto($productoConcreto, $nuevoCod, $nuevoNombre, $nuevaDescrip, $nuevoPrecio)){
       
        header("Location: index.php?option=productos"); 
    }
    
    
    
   
}

if (isset($_POST["cargarImg"])) {
    
    $ruta = $_POST["img"];
    
    $rutaBuena = substr($ruta,0,-4);
    
    if(Producto::cargarImagenProductos($productoConcreto,$rutaBuena)){
        
        header("Location: index.php?option=productos");
    }
  
}


if (isset($_POST["seguirComprando"])) {
    
    header("Location: index.php?option=productos");
}

if (isset($_POST["borrarUsuario"])) {
    
    if(Producto::eliminarProducto($productoConcreto)){
        
        header("Location: index.php?option=productos");
    }
       
}


if (isset($_POST["insertComentario"])) {
    
    header("Location: index.php?option=insertComentario");
}

require_once 'vista.php';
?>