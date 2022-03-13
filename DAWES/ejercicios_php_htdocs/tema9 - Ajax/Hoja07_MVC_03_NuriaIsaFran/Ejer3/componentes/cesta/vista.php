<?php
global $nombre_usuario;
global $sumaPrecios;
global $cesta;
?>
<title>Cesta de la compra</title>

<!-- Estilos -->
<link rel="stylesheet" href="css/estilos_cesta.css">


</head>

<body>
	<!-- Cabecera -->
	<header>
		<!-- Barra superior -->
		<section id="barra_superior">
            Cesta de la compra

            <?php
            if (! isset($_SESSION["usuario"])) {

                ?>
                <!-- BotÃƒÂ³n de volver -->
			<button class="boton_volver" onclick="location.href = 'index.php?option=logoff'">Volver</button>
			<!-- Fin botÃƒÂ³n -->
	<?php
            } else {

                if (count($cesta) == 0) {
                    ?>
					<script>
                        cesta_vacia(); 
                    </script>
                  	<form method="POST" action="">
                  	 <input type="submit" value="Seguir comprando" name="seguirComprando" class="boton_carrito" />

			</form>
<?php
                } else {
                    ?>
 <!-- InformaciÃ³n de la cesta -->
			<article id="info_cesta">Número de articulos <?= count($cesta) ?> Total precio <?= $sumaPrecios ?></article>

			<!-- Fin informaciÃƒÂ³n -->

			<!-- Botonera -->
			<form method="POST" action="">
				<input type="submit" value="Vaciar cesta" name="vaciarCesta"
					class="boton_volver" />
				<article class="clearfix"></article>
				<input
					type="submit" value="Pagar" name="pagar" class="boton_carrito" />
				<input type="submit"
					value="Desconectar al usuario <?= $nombre_usuario ?>"
					name="desconectarUsuario" class="boton_carrito" />  <input
					type="submit" value="Ver datos <?= $nombre_usuario ?>"
					name="verDatosUsuario" class="boton_carrito" /> <input
					type="submit" value="Seguir comprando" name="seguirComprando"
					class="boton_carrito" />

			</form>

            <?php
                }
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
            <!-- SecciÃƒÂ³n no identificado -->
		<section id="no_identificado">
			<h2>Acceso restringido</h2>
			<p>No estÃ¡is identificado</p>
		</section>
		<!-- Fin secciÃƒÂ³n -->
        <?php
        } else {

            foreach ($cesta as $producto) {

                $p = unserialize($producto);

                ?>

                	<form class="producto" method="POST" action="">
			<img src="img/<?= $p->getCodigo() ?>.jpg"
				alt="<?= $p->getCodigo() ?>" title="<?= $nombre ?>">
			<section class="detalle_producto">
				<p class="titulo"><?= $p->getNombre() ?></p>
				<p class="precio"><?=  $p->getPrecio()?>€</p>

			</section>
			<input type="submit" value="Borrar producto" name="borrarProducto"
				class="boton_cesta" /> <input name="codBorrar" type="hidden"
				value="<?= $p->getCodigo() ?>">
		</form>
            <?php
            }
        }
        ?>
            <!-- Fin cesta -->
		<div class="clearfix"></div>


	</main>
	<!-- Fin listado -->


	<div class="clearfix"></div>

	<!-- Pie -->
	<footer>

		<section id="pie">Desarrollado por Francisco Lopez (DAW221), Isabel
			Martinez (DAW223) y Nuria Gutierrez (DAW214)</section>
	</footer>
	<!-- Fin pie -->
</body>

</html>