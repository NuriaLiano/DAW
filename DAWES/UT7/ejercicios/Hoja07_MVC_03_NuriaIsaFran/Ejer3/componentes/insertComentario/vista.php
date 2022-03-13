
    <title>Nuevo Comentario</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos_usuario.css">
</head>

<body>
    <!-- Cabecera -->
    <header>
        <!-- Barra superior -->
        <section id="barra_superior">
           Nuevo Comentario

            
            <!-- Fin botonera -->
        </section>
        <!-- Fin barra superior -->
          <form class="" method="POST" action="">
 			<input name="seguirComprando" class="boton_inferior" type="submit" value="Seguir comprando"></input>
 		 </form>	
        <hr>
    </header>
    <!-- Fin cabecera -->

    <!-- Cuerpo -->
    <main>
        <?php
        if (!isset($_SESSION["usuario"])) {
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

				<label>Comentario:</label> <input name="comentario" type="text" class="titulo"></input>
 				<br>
				
				<input name="insertar" type="submit" class="boton_inferior" value= "Insertar"></input>
				
				</section>
                </form>
            <?php
            }             
            ?>

            <div class="clearfix"></div>
            <!-- Fin listado -->
    </main>
    <!-- Fin listado -->

<!-- Pie -->
<footer>
    <hr>
    <section id="pie">Desarrollado por Francisco LÃ³pez (DAW221), Isabel Martinez (DAW223) y Nuria Gutierrez (DAW214)</section>
</footer>
<!-- Fin pie -->
</body>

</html>