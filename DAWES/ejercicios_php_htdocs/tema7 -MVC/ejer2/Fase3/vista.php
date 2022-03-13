<?php 
    global $productos;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos_productos.css">
</head>
<body>
    <!-- Cabecera -->
    <header>
        <!-- Barra superior -->
        <section id="barra_superior">
            Listado de productos

	
                <!-- Botonera -->
                <button class="boton_volver" onclick="location.href = 'vaciar.php'">Vaciar cesta</button>
                <article class="clearfix"></article>
                <article>
                    <button class="boton_carrito" onclick="location.href = 'cesta.php'">Comprar</button>
                    <button class="boton_carrito" onclick="location.href = 'logoff.php'">Desconectar usuario </button>
                    <button class="boton_carrito" onclick="location.href = 'datosUsuario.php'">Ver datos </button>
                    <button class="boton_carrito" onclick="location.href = 'insertProducto.php'">Insertar producto</button>
                    
                </article>

            <!-- Fin botonera -->
        </section>
        <!-- Fin barra superior -->

    </header>
    
    <main>

            <!-- Listado de libros -->
            <section>
                <h2>Listado de libros</h2>
            </section>
            
                
             <?php

             foreach ($productos as $codigo => $producto) {
                                
            ?>
            
                 <form class="producto" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <img src="img/<?= $codigo ?>.jpg" title="<?=$producto["nombre"] ?>">
                    <section class="detalle_producto">
                        <p class="titulo"><?= $producto["nombre"] ?></p>
                        <p class="familia"><?= $producto["familia"] ?></p>
                        <p class="precio"><?= sprintf($producto["precio"], "%.2f"); ?> €</p>
                        <p class="descripcion"><?= $producto["descripcion"] ?></p>
                        <input type="submit" value="Añadir a la cesta" name="agregar_producto" class="boton_cesta" />
                        <input type="submit" value="Ver producto" name="verDatos" class="boton_cesta" />
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
    <section id="pie">Desarrollado por Francisco Lopez (DAW221), Isabel Martinez (DAW223) y Nuria Gutierrez (DAW214)</section>
</footer>
<!-- Fin pie -->
</body>

</html>