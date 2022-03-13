<?php 
    //recuperar la sesion 
   session_start();
   include 'funciones.php';
   include 'conexionBD.php';
   if (! isset($_SESSION['usuario'])) {
       die("Error");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cesta.css">
    <title>Cesta de la compra</title>
</head>

<body>
    <div class="titulo-productos">
        <h1>Carrito de la compra</h1>
        
    </div>
    <div class="botones">
       <form method="post" action="cesta.php">
       	<input type="submit" name="vaciar" value="Vaciar cesta" class="btn">
        <input type="submit" name="pagar" value="Pagar cesta" class="pagar">
        <input type="submit" name="seguir" value="Seguir comprando" class="btn">
        <input type="submit" name="desconectar" value="Desconectar usuario" class="desconectar">
        </form>
        <?php 
        //boton vaciar cesta
        if (isset($_POST['vaciar'])) {
            echo "<script>alert('Has vaciado la cesta');</script>";
            unset($_SESSION['cesta']);
        }
        
        //boton pagar
        if (isset($_POST['pagar'])) {
            echo "<script>alert('Gracias por comprar! Tu pedido llegará mañana ');</script>";
            
            header("Location: pagar.php");
        }
        
        //boton seguir
        if (isset($_POST['seguir'])) {
            header("Location: productos.php");
        }
        
        //boton desconectar
        if (isset($_POST['desconectar'])) {
            header("Location: logoff.php");
        }
        
        
        
        ?>
        
    </div>
    <div class="titulo-productos">
        <h1>Tus productos</h1>
        
    </div>
    <div class="contenedor">
    <?php 
    $total = 0;
    //comprobar si existe la sesion cesta
    if (isset($_SESSION['cesta'])) {
        //var_dump($_SESSION['cesta']);
        $lista = $_SESSION['cesta'];
        
    }
    foreach ($_SESSION['cesta'] as $codigo => $unidades) {
        $conexion = getConnexion();
        if (! isset($error)) {
            $sql = "SELECT codigo, nombre, descripcion, precio * '" . $unidades . "' as subtotal from productos WHERE codigo = '" . $codigo . "'";
            $resultado = $conexion->query($sql);
            if ($resultado) {
                
                
                $fila = $resultado->fetch_array();
                if(isset($fila['subtotal'])){
                    $subtotal = $fila['subtotal'];
                }
                if(isset($fila['codigo'])){
                    $nombre_libro = $fila['nombre'];
                }
                if(isset($fila['codigo'])){
                    $codigo = $fila['codigo'];
                }
            }
        }
        echo "<div class='caja'>";
        echo "<form id =".$codigo." action='cesta.php' method='post'>";
        echo "<img src='".$codigo.".jpg'>";
        echo "<div class='fdcha'>";
        echo "<p class='caja-titulo'>".$nombre_libro."</p>";
        echo "<p class='caja-precio'>".$subtotal."</p>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
        
      
    }
    ?>
    
    </div>
</body>

</html>