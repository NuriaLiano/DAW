<?php
session_start();

require_once "BD.php";
require_once "product.php";



if (isset($_POST["borrarProducto"])) {
    
    $codBorrar = $p->getCodigo();
    
    foreach ($cesta as $prod){
        
        $pr = unserialize($producto);
        
        if($codBorrar == $pr->getCodigo()){
            
            echo "Aqui deberia borrar";
            
            
        }
        
    }
    
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesta de la compra</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos_cesta.css">

    <!-- JavaScript -->
    <script src="js/funcionesTienda.js"></script>
</head>

<body>
    <!-- Cabecera -->
    <header>
        <!-- Barra superior -->
        <section id="barra_superior">
            Cesta de la compra

            <?php
            if (!isset($_SESSION["usuario"])) {
                
                
            ?>
                <!-- BotÃ³n de volver -->
                <button class="boton_volver" onclick="location.href = 'logoff.php'">Volver</button>
                <!-- Fin botÃ³n -->
                <?php
            } else {
                
    
                
                $nombre_usuario = $_SESSION["usuario"];

                // INICIALIZACIÃ“N SESIÃ“N CESTA
                if (isset($_SESSION["cesta"])) {
                    $cesta = $_SESSION["cesta"];
                } else {
                    $cesta = [];
                }

                // CONTROLAMOS CESTA VACÃ�A
                if (count($cesta) == 0) {
                ?>
                    <script>
                        cesta_vacia();
                    </script>
                <?php
                }
                ?>
                <!-- InformaciÃ³n de la cesta -->
                 <article id="info_cesta">
                
                 N�mero productos= <?= $contadorProductos ?> Total =  <?= $sumaPrecios ?>
                
                </article>
               
                <!-- Fin informaciÃ³n -->

                <!-- Botonera -->
                <button class="boton_volver" onclick="location.href = 'vaciar.php'">Vaciar cesta</button>
                <article class="clearfix"></article>
                <article>
                    
                    <button class="boton_carrito" onclick="location.href = 'logoff.php'">Desconectar usuario <?= $nombre_usuario ?></button>
                    <button class="boton_carrito" onclick="location.href = 'datosUsuario.php'">Ver datos <?= $nombre_usuario ?></button>
                    <button class="boton_carrito" onclick="location.href = 'productos.php'">Seguir comprando</button>
                    <button class="boton_pagar" onclick="location.href = 'pagar.php'">Pagar</button>
                </article>

            <?php
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
            <!-- Cesta de la compra -->

            
            
            <?php
            $bbdd = new BD("localhost","dwes_04_tienda","root","");
            
            
            /*foreach ($cesta as $codigo => $producto) {
                
                if ($codigo != "total") {
                                       
                    $imagen = $codigo;
                    $unidades = $cesta[$codigo];
                    $subtotal = $bbdd->obtener_precio($codigo, $unidades);
                    $nombre = $subtotal[$codigo]["nombre"];
                    $precio = floatval($subtotal[$codigo]["precio"]);
            ?>
                    <form class="producto" method="POST" action="productos.php">
                        <img src="img/<?= $imagen ?>.jpg" alt="<?= $imagen ?>" title="<?= $nombre ?>">
                        <section class="detalle_producto">
                            <p class="titulo"><?= $nombre ?></p>
                            <p class="precio"><?= sprintf("%.2f € (%d uds)", $precio, $unidades); ?></p>
                        </section>
                    </form>
            <?php
                }
            }*/
            $contadorProductos = 0;
            $sumaPrecios = 0;

            foreach ($cesta as $producto){
                
                $p = unserialize($producto);
                $contadorProductos ++;
                $sumaPrecios += $p->getPrecio();
                 ?>
                 
               
                
                	<form class="producto" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                		<img src="img/<?= $p->getCodigo() ?>.jpg" alt="<?= $p->getCodigo() ?>" title="<?= $nombre ?>">
               	 			<section class="detalle_producto">
                				<p class="titulo"><?= $p->getNombre() ?></p>
                     			<p class="precio"><?=  $p->getPrecio()?>€</p>
                     			
                 		</section>
                 		<input type="submit" value="Borrar producto" name="borrarProducto" class="boton_cesta" />
                 	</form>
            <?php        
            }
            ?>
            <!-- Fin cesta -->
            <div class="clearfix"></div>

            <!-- Botonera inferior -->
            
            <!-- <button class="boton_cesta" onclick="location.href = 'logoff.php'">Pagar</button>-->
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