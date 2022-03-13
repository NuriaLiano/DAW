<?php
session_start();

require_once "BD.php";
require_once "usuario.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Datos del usuario</title>

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
            Datos del usuario

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

		<hr>
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
            $bbdd = new BD("localhost", "dwes_04_tienda", "root", "");

            $lista = $bbdd->obtener_usuario($nombre_usuario);
            
            
            foreach ($lista as $key) {

                $usu = new Usuario($key->usuario, $key->password, $key->foto);
            }
        }

        ?>
            <form class="producto" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<img src="img/<?= $usu->getFoto() ?>"
				alt="<?= $usu->getFoto() ?>" title="<?= $nombre ?>">
			<section class="detalle_producto">
				<label>Nombre de usuario:</label> <input name="usu" type="text" class="titulo" value="<?= $usu->getUsuario() ?>"></input>
				<br> 
				<label>Contraseña del usuario:</label> 
				<input name="contra" type="text" class="titulo" value="Nueva contraseña"></input>
				<br>
				<input name="img" type="file" class="titulo"></input>
			</section>
            <?php

            ?>
            <!-- Fin cesta -->
		<div class="clearfix"></div>

		<!-- Botonera inferior -->
			
			<input name="seguirComprando" class="boton_inferior" type="submit" value="Seguir comprando"></input>
			<input type="submit" class="boton_inferior" value="Modificar datos" name="modificar"></input>
		
			<input type="submit" class="boton_inferior" value="Cargar una imagen de perfil" name="cargarImg"></input>
			<input type="submit" class="boton_darbaja" value="Dar de baja al usuario" name="borrarUsuario"></input>
		</form>
		
		<?php 
		if (isset($_POST["modificar"])) {
		    
		    $nuevoUsu = $_POST["usu"];
		    $nuevaContra = $_POST["contra"];
		    
		    $passmd = md5($nuevaContra);
		    
		    $bbdd->mod_usuario($usu->getUsuario(),$nuevoUsu ,$passmd);
		    
		    header("Location: logoff.php");
		}
		
		if (isset($_POST["cargarImg"])) {
		     
		    $ruta = $_POST["img"];
		    
		    $bbdd->cargarImagen($usu->getUsuario(),$ruta);
		    
		    header("Location: datosUsuario.php");
		}
		
		if (isset($_POST["seguirComprando"])) {
		    
		    header("Location: productos.php");
		}
		
		if (isset($_POST["borrarUsuario"])) {
		    
		    $bbdd->eliminarUsuario($usu->getUsuario());
		    
		    header("Location: logoff.php");
		}
            ?>

		<!-- Fin botonera -->
	</main>
	<!-- Fin listado -->


	<div class="clearfix"></div>

	<!-- Pie -->
	<footer>
		<hr>
		<section id="pie">Desarrollado por Francisco Lopez (DAW221), Isabel Martinez (DAW223) y Nuria Gutierrez (DAW214)</section>
	</footer>
	<!-- Fin pie -->
</body>

</html>