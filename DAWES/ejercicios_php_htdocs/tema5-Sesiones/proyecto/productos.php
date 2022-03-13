<?php
    //recuperar la sesion
    session_start();
    include_once 'conexionBD.php';
    include 'funciones.php';
    
    //comprobar que usuario esta
    if(!isset($_SESSION["usuario"])&&($_SESSION["password"])){
        echo "<p>NO HAY USUARIO NI PASSWORD</p>";
        echo "<p>Error. Debes estar autentificado <a href='login.php'>Login</a></p>";
        
    }else{
 
        if (isset($_SESSION['cesta'])) {
            $cesta = $_SESSION['cesta'];
            
        } 
        else {
            // crea el array bidimensional cesta vacio
            //$_SESSION['cesta']= array ();
            $cesta = [];
        }
        if (isset($_POST['agregar'])) {
       //array de sesion cesta con codigo,nombre y precio
            $producto['nombre'] = $_POST['nombre'];
            $producto['precio'] = $_POST['precio'];
            $_SESSION['cesta'][$_POST['codigo']] = $producto;
            
        	       //print_r($_SESSION['cesta']);
        	       $codigo = $_POST["codigo"];
        	       $nombre = $_POST['nombre'];
        	       $precio = $_POST["precio"];
        	       
        	       if (!isset($cesta[$codigo])) {
        	           $cesta[$codigo] = 1;
        	       }else{
        	           //si no lo incrementa
        	           $cesta[$codigo]++;
        	       }
        	       //si no existe la
        	       if (!isset($cesta['total'])) {
        	           $cesta['total'] = $precio;
        	       }else{
        	           $cesta['total'] += $precio;
        	       }
        	       $_SESSION['cesta'] = $cesta;
        }
    }
        
       
?>

<!DOCTYPE html>


<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productos</title>
	<link rel="stylesheet" href="CSS/productos.css">
</head>

<body>
    <div class="header">
        <h1>Listado de productos</h1>
        <div class="mostrar-usuario">
            <?php
            //Mostrar usuario 
                $nombre_usuario = $_SESSION['usuario'];
                $password_usuario = $_SESSION['password'];
                echo "<p>Usuario: ".$nombre_usuario." </p>";
                echo "<p>Contraseña: ".$password_usuario." </p>";
            ?>
        </div>   
        <div class="cesta">
            <?php
                    //mostrar cuantos productos hay aï¿½adidos
            if (! isset($_SESSION['cesta'])) {
                print "No tienes productos en la cesta";
            } else {
                echo "Tienes ".count($_SESSION['cesta']). " productos en la cesta ";
            }
            ?>        
        </div>
        <div class="botones">
            <form action='productos.php' method='post'>
                <input type='submit' name='vaciar' value='Vaciar Cesta' class="btn">
                <input type='submit' name='desconectar' value='Desconectar usuario' class="desconectar">
            </form>
            <?php 
            //boton desconectar
            if (isset($_POST['desconectar'])) {
                unset($_SESSION['usuario']);
                header("Location: logoff.php");
            }
            // Comprobamos si se ha enviado el formulario de vaciar la cesta
            if (isset($_POST['vaciar'])) {
                echo "<script>alert('Has vaciado la cesta');</script>";
                unset($_SESSION['cesta']);
            }
            ?>
        </div>
        <div class="boton-comprar">
        <form action='cesta.php' method='post'>
            <input type='submit' name='comprar' value='Comprar' class="pagar">
        </form>
            
            <?php
            //si se pulsa comprar
            if (isset($_POST['comprar'])) {
                //comprueba que la cesta no este vacia
                if (!isset($_SESSION['cesta'])) {
                    echo "<p>La cesta está vacia</p>";
                }else{
                    //redirige a la cesta.php
                    header("Location: cesta.php");
                }
            }	
            ?>
        </div>
    </div>
    
    
    <div class="contenedor">
    	
    <?php 
    
    $lista = lista_productos();
    foreach ($lista as $producto){
       
        echo "<div class='caja'>";
        echo "<form id =".$producto['codigo']." action='productos.php' method='post'>";
        echo "<img src='".$producto['codigo'].".jpg'>";
        echo "<input type='hidden' name='codigo' value='".$producto['codigo']."'>";
        echo "<div class='fdcha'>";
        echo "<p class='caja-titulo'>".$producto['nombre']."</p>";
        echo "<input type='hidden' name='nombre' value='".$producto['nombre']."'>";
        echo "<p class='caja-fam'>".$producto['familia']."</p>";
        echo "<p class='caja-precio'>".$producto['precio']."</p>";
        echo "<input type = 'hidden' name='precio' value='".$producto['precio']."'>";
        echo "<hr>";
        echo "<p class='caja-des'>".$producto['descripcion']."</p>";
        echo "<input type='submit' id='prueba' name ='agregar' value='Aï¿½adir a la cesta'>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
    }
    	?>
    	</div>
    </div>
</body>
</html>
