<?php
global $usuario;
global $listaComentarios;
?>

<title>Datos del usuario</title>

<!-- Estilos -->
<link rel="stylesheet" href="css/estilos_usuario.css">

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
                <!-- BotÃƒÂ³n de volver -->
			<button class="boton_volver" onclick="location.href = 'logoff.php'">Volver</button>
			<!-- Fin botÃƒÂ³n -->
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
            <!-- SecciÃƒÂ³n no identificado -->
		<section id="no_identificado">
			<h2>Acceso restringido</h2>
			<p>No estÃ¡s identificado</p>
		</section>
		<!-- Fin secciÃƒÂ³n -->
        <?php
        } else {
            ?>
            <!-- Datos del usuario -->
            
            <?php                           
            foreach ($usuario as $key) {

                $usu = new Usuario($key->usuario, $key->password, $key->foto);
            }
        }

        ?>
            <form class="producto" method="POST" action="">
			<img src="img/<?= $usu->getFoto() ?>"
				alt="<?= $usu->getFoto() ?>" title="<?= $nombre ?>">
			<section class="detalle_producto">
				<label>Nombre de usuario:</label> <input name="usu" type="text" class="titulo" placeholder="Usuario actual:<?= $usu->getUsuario() ?>"></input>
				<br> 
				<label>Contraseña del usuario:</label> 
				<input name="contra" type="text" class="titulo" placeholder="Nueva contraseña"></input>
				<br>
				<input name="img" type="file" class="titulo"></input>
				
					<?php          
				$html = "<table class='table' style=\"border: 1px solid black\">";
				$html .="<th>Producto</th>";
				$html .="<th>Comentario</th>";
				
				foreach ($listaComentarios  as $codigo => $producto) {
				    				    
				    $html .= "<tr><td><h3>{$producto["product"]}</h3></td><td><h3>{$producto["comentario"]}</h3></td></tr>";
				    
				}
				$html .= "</table>";
				
				echo $html;
                ?>
                
			</section>

            <!-- Fin cesta -->
		<div class="clearfix"></div>

		<!-- Botonera inferior -->
			
			<input name="seguirComprando" class="boton_inferior" type="submit" value="Seguir comprando"></input>
			<input type="submit" class="boton_inferior" value="Modificar datos" name="modificar"></input>
			<input type="submit" class="boton_inferior" value="Cargar una imagen de perfil" name="cargarImg"></input>
			<input type="submit" class="boton_inferior" value="Borrar comentarios" name="borrarComentario"></input>
			<input type="submit" class="boton_darbaja" value="Dar de baja al usuario" name="borrarUsuario"></input>
		</form>
				

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