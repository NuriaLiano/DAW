<?php
session_start();

require_once "BD.php";
require_once "product.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo producto</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos_usuario.css">
</head>

<body>
    <!-- Cabecera -->
    <header>
        <!-- Barra superior -->
        <section id="barra_superior">
           Nuevo producto

        </section>
        <!-- Fin barra superior -->
 		
        
    </header>
    <!-- Fin cabecera -->

    <!-- Cuerpo -->
    <main>
        <?php
        if (!isset($_SESSION["usuario"])) {
        ?>
            <!-- Sección no identificado -->
            <section id="no_identificado">
                <h2>Acceso restringido</h2>
                <p>No estás identificado</p>
            </section>
            <!-- Fin sección -->
        <?php
        } else {
        ?>
            <!-- Listado de libros -->

            <?php
            
            $bbdd = new BD("localhost","dwes_04_tienda","root","");
                
            ?>
                 <form class="producto" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                   
                <section class="detalle_producto">

				<label>Nombre:</label> <input name="nombre" type="text" class="titulo"></input>
				<br>
				<label>Descripcion:</label> <input name="descrip" type="text" class="titulo"></input>
				<br>
				<label>Precio:</label> <input name="precio" type="text" class="titulo"></input>
				<br>
				<label>Imagen:</label>
				<input name="img" type="file" class="titulo"></input>
				<br>
				<label>Familia:</label>
				<select name="familia" class="titulo"> 
				 
				<?php 
				$listaFamilias = $bbdd->obtenerFamilias();				
				
				foreach ($listaFamilias as $familia){
				    
				    $nombre=$familia->codigo;
				   				 				    
				    echo "<option value='$nombre'>$nombre</option>";
				    
				}
				?>
				</select> 
 				<br>
				
				<input name="insertar" type="submit" class="boton_carrito" value= "Insertar"></input>
				
			</section>
                </form>
            <?php
            }
            if (isset($_POST["insertar"])) {
                
                $nom = $_POST["nombre"];
                $des = $_POST["descrip"];
                $pre = $_POST["precio"];
                $preF = floatval($pre); //convierte en float
                $fami = $_POST["familia"];
                $cod = $_POST["img"];
                $rutaBuena = substr($cod,0,-4);
                
                
                $bbdd->insertarProducto($rutaBuena,$nom,$des,$preF,$fami);
            }
            ?>
			<button class="boton_inferior" onclick="location.href = 'productos.php'">Seguir comprando</button>
            <div class="clearfix"></div>
            <!-- Fin listado -->
            
    </main>
    <!-- Fin listado -->
    

<!-- Pie -->
<footer>
    <section id="pie">Desarrollado por Francisco Lopez (DAW221), Isabel Martinez (DAW223) y Nuria Gutierrez (DAW214)</section>
</footer>
<!-- Fin pie -->
</body>

</html>