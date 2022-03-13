<?php
global $lista_familias;
?>

<title>Nuevo producto</title>
<!-- Estilos -->
<link rel="stylesheet" href="css/estilos_usuario.css">
</head>

<body>
	<!-- Cabecera -->
	<header>
		<!-- Barra superior -->
		<section id="barra_superior">Nuevo producto</section>
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
			<p>No estÃ¡s identificado</p>
		</section>
		<!-- Fin secciÃ³n -->
        <?php
        } else {
            ?>

                 <form class="producto" method="POST" action="">

			<section class="detalle_producto">

				<label>Nombre:</label> <input name="nombre" type="text"
					class="titulo"></input> <br> <label>Descripcion:</label> <input
					name="descrip" type="text" class="titulo"></input> <br> <label>Precio:</label>
				<input name="precio" type="text" class="titulo"></input> <br> <label>Imagen:</label>
				<input name="img" type="file" class="titulo"></input> <br> <label>Familia:</label>
				<select name="familia" class="titulo"> 
				 
				<?php

            foreach ($lista_familias as $familia) {

                $nombre = $familia->codigo;

                echo "<option value='$nombre'>$nombre</option>";
            }
            ?>
				</select> <br> <input name="insertar" type="submit"
					class="boton_carrito" value="Insertar"></input>

			</section>
		</form>
        <?php
        }
        ?>
            
			<form class="" method="POST" action="">
 			<input name="seguirComprando" class="boton_inferior" type="submit" value="Seguir comprando"></input>
 		 </form>
		<div class="clearfix"></div>
		<!-- Fin listado -->

	</main>
	<!-- Fin listado -->


	<!-- Pie -->
	<footer>
		<section id="pie">Desarrollado por Francisco Lopez (DAW221), Isabel
			Martinez (DAW223) y Nuria Gutierrez (DAW214)</section>
	</footer>
	<!-- Fin pie -->
</body>

</html>