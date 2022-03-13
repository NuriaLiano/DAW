<?php
session_start();

require_once "BD.php";
require_once "product.php";

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
                

if (isset($_POST["borrarProducto"])) {
       
    
    $codBorrar = $_POST["codBorrar"];
    
    foreach ($cesta as $producto){
        
        $p = unserialize($producto);     
     
        if($codBorrar == $p->getCodigo()){
            
            echo "Aqui borrar";
                
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
                
    
                ?>
               

                 <article id="info_cesta">
                
                		
                
                </article>
               
                <!-- Fin informaciÃ³n -->

                <!-- Botonera -->
                <button class="boton_volver" onclick="location.href = 'vaciar.php'">Vaciar cesta</button>
                <article class="clearfix"></article>
                <article>
                    
                    <button class="boton_carrito" onclick="location.href = 'logoff.php'">Desconectar usuario <?= $nombre_usuario ?></button>
                    <button class="boton_carrito" onclick="location.href = 'datosUsuario.php'">Ver datos <?= $nombre_usuario ?></button>
                    <button class="boton_carrito" onclick="location.href = 'productos.php'">Seguir comprando</button>
                    <button class="boton_carrito" onclick="location.href = 'pagar.php'">Pagar</button>
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
                <p>No estáis identificado</p>
            </section>
            <!-- Fin secciÃ³n -->
        <?php
        } else {
        ?>
            <!-- Cesta de la compra -->

            
            
            <?php
            $bbdd = new BD("localhost","dwes_04_tienda","root","");
            
            foreach ($cesta as $producto){
                
                $p = unserialize($producto);

                 ?>

                	<form class="producto" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                		<img src="img/<?= $p->getCodigo() ?>.jpg" alt="<?= $p->getCodigo() ?>" title="<?= $nombre ?>">
               	 			<section class="detalle_producto">
                				<p class="titulo"><?= $p->getNombre() ?></p>
                     			<p class="precio"><?=  $p->getPrecio()?>€</p>
                     			
                 		</section>
                 		<input type="submit" value="Borrar producto" name="borrarProducto" class="boton_cesta" />
                 		<input name="codBorrar" type="hidden" value="<?= $p->getCodigo() ?>">
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
    
    <section id="pie">Desarrollado por Francisco Lopez (DAW221), Isabel Martinez (DAW223) y Nuria Gutierrez (DAW214)</section>
</footer>
<!-- Fin pie -->
</body>

</html>