<?php 
    global $productos;
?>

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
                                
                 $pro = new Producto($codigo,$producto["nombre"],$producto["descripcion"],$producto["precio"],$producto["familia"]);
                 
                 ?>
                 <form class="producto" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <img src="img/<?= $pro->getCodigo() ?>.jpg" alt="<?= $pro->getCodigo() ?>" title="<?= $pro->getNombre() ?>">
                    <section class="detalle_producto">
                        <p class="titulo"><?= $pro->getNombre() ?></p>
                        <p class="familia"><?= $pro->getFamilia() ?></p>
                        <p class="precio"><?= sprintf($pro->getPrecio(), "%.2f"); ?> €</p>
                        <p class="descripcion"><?= $pro->getDescripcion() ?></p>
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
