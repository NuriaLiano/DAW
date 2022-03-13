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
<title>Datos del producto</title>

<!-- Estilos -->
<link rel="stylesheet" href="css/estilos_usuario.css">

<!-- JavaScript -->
<script src="js/funcionesTienda.js"></script>
</head>

<body>
	<!-- Cabecera -->
	<header>
		<!-- Barra superior -->
		<section id="barra_superior">
            Datos del producto

            <?php
            if (! isset($_SESSION["usuario"])) {
                ?>
                <!-- BotÃ³n de volver -->
			<button class="boton_volver" onclick="location.href = 'logoff.php'">Volver</button>
			
			<!-- Fin botÃ³n -->
                <?php
            } else {
                $nombre_usuario = $_SESSION["usuario"];
                
            }
            ?>
            <!-- Fin botonera -->
		</section>
		<!-- Fin barra superior -->

		
	</header>
	<!-- Fin cabecera -->

	<!-- Cuerpo -->
	<main>
        <?php
        if (! isset($_SESSION["usuario"])) {
            ?>
            <!-- SecciÃ³n no identificado -->
		<section id="no_identificado">
			<h2>Acceso restringido</h2>
			<p>No estás identificado</p>
		</section>
		<!-- Fin secciÃ³n -->
        <?php
        } else {
            ?>
            <!-- Datos del usuario -->
            <?php
            
            $producto = $_SESSION["productoConcreto"];
            
            $bbdd = new BD("localhost", "dwes_04_tienda", "root", "");

            $lista = $bbdd->obtener_producto($producto);
           
            foreach ($lista as $codigo => $producto) {

                $pro = new Producto($codigo,$producto["nombre"],$producto["descripcion"],$producto["precio"],$producto["familia"]);
                
            }
        }

        ?>
            <form class="producto" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<img src="img/<?= $pro->getCodigo()?>.jpg"
				alt="<?=$pro->getCodigo() ?>">
			<section class="detalle_producto">
				<label>Codigo:</label> <input name="cod" type="text" class="titulo" value="<?= $pro->getCodigo() ?>"></input>
				<br> 
				<label>Nombre:</label> <input name="nombre" type="text" class="titulo" value="<?= $pro->getNombre() ?>"></input>
				<br>
				<label>Descripcion:</label> <input name="descrip" type="text" class="titulo" value="<?= $pro->getDescripcion() ?>"></input>
				<br>
				<label>Precio:</label> <input name="precio" type="text" class="titulo" value="<?= $pro->getPrecio() ?>"></input>
				<br>
				<label>Familia:</label> <input name="familia" type="text" class="titulo" value="<?= $pro->getFamilia() ?>"></input>
				<br>
					 <?php
				
				  $listaComentarios = $bbdd->obtener_comentarios_producto($pro->getCodigo());

				 
				$html = "<table class='table' style=\"border: 1px solid black\">";
				$html .="<th>Usuario</th>";
				$html .="<th>Comentario</th>";
				
				foreach ($listaComentarios  as $codigo => $producto) {
				    				    
				    $html .= "<tr><td><h3>{$producto["usu"]}</h3></td><td><h3>{$producto["comentario"]}</h3></td></tr>";
				    
				}
				$html .= "</table>";
				
				echo $html;
                ?>
				<input name="img" type="file" class="precio"></input>
			</section>
    
            <!-- Fin cesta -->
		<div class="clearfix"></div>

		<!-- Botonera inferior -->
			
			<input name="seguirComprando" class="boton_inferior" type="submit" value="Seguir comprando"></input>
			<input name="insertComentario" class="boton_inferior" type="submit" value="Insertar comentario"></input>
			<input name="deleteComentario" class="boton_inferior" type="submit" value="Borrar comentarios"></input>
			<input type="submit" class="boton_inferior" value="Modificar datos" name="modificar"></input>
			<input type="submit" class="boton_inferior" value="Cargar una imagen de perfil" name="cargarImg"></input>
			<input type="submit" class="boton_darbaja" value="Dar de baja al producto" name="borrarUsuario"></input>
			
		</form>
		
		<?php 
		if (isset($_POST["modificar"])) {
		    
		    $nuevoCod = $_POST["cod"];
		    $nuevoNombre = $_POST["nombre"];
		    $nuevaDescrip = $_POST["descrip"];
		    $nuevoPrecio = $_POST["precio"];
		    $nuevaFamilia = $_POST["familia"];
		    
		    $bbdd->mod_producto($pro->getCodigo(), $nuevoCod, $nuevoNombre, $nuevaDescrip, $nuevoPrecio);
		    
		    header("Location: productos.php");
		}
		
		if (isset($_POST["cargarImg"])) {
		     
		    $ruta = $_POST["img"];
		    
		    $rutaBuena = substr($ruta,0,-4);
		    
		    $bbdd->cargarImagenProductos($pro->getCodigo(),$rutaBuena);
		    
		    header("Location: datosProductos.php");
		}
		
		if (isset($_POST["seguirComprando"])) {
		    
		    header("Location: productos.php");
		}
		
		if (isset($_POST["borrarUsuario"])) {
		    
		    $bbdd->eliminarProducto($pro->getCodigo());
		    
		    header("Location: productos.php");
		   	  
		}
		
		if (isset($_POST["insertComentario"])) {
		    
		    header("Location: insertComentarios.php");
		}
		
		if (isset($_POST["deleteComentario"])) {
		    
		    $bbdd->eliminarComentarios($pro->getCodigo());
		    echo "<script>alert('Los comentarios han sido borrados correctamente')</script>";
		    header("Refresh: 0");
		}
            ?>

		<!-- Fin botonera -->
	</main>
	<!-- Fin listado -->


	<div class="clearfix"></div>

	<!-- Pie -->
	<footer>
		
		<section id="pie">Desarrollado por Francisco Lopez (DAW221), Isabel Martinez (DAW223) y Nuria Gutierrez (DAW214)</section>
	</footer>
	<!-- Fin pie -->
</body>

</html>