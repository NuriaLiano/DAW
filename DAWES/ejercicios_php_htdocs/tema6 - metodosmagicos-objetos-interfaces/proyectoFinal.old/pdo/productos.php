<?php
session_start();

require_once "BD.php";
require_once "product.php";

// INICIALIZACI覰 SESI覰 CESTA
if (isset($_SESSION["cesta"])) {
    $cesta = $_SESSION["cesta"];
} else {
    $cesta = [];
}


$sumaPrecios = 0;
$suma = 0;

// AGREGAR PRODUCTO
if (isset($_POST["agregar_producto"])) {
    
    
    $pMeter = new Producto($_POST["codigo"], $_POST["nombre"], $_POST["des"],$_POST["precio"], $_POST["familia"]);
    
    $a = serialize($pMeter);
    
    array_push($cesta, $a);
    
    $_SESSION["cesta"] = $cesta;
    
    $articulos = count($cesta);
    
    foreach ($cesta as $producto){
        
        $p = unserialize($producto);
        
        $sumaPrecios += $p->getPrecio();
        
    }
    
}
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

            <?php
            if (!isset($_SESSION["usuario"])) {
            ?>
                <!-- Bot贸n de volver -->
                <button class="boton_volver" onclick="location.href = 'logoff.php'">Volver</button>
                <!-- Fin bot贸n -->
            <?php
            } else {
                $nombre_usuario = $_SESSION["usuario"];

                if (isset($_POST["verDatos"])) {
                    
                    $_SESSION["productoConcreto"] = $_POST["codigo"];
                   
                    header("Location: datosProducto.php");
                }
            ?>
                <!-- Informaci贸n de la cesta -->
                <article id="info_cesta">N鷐ero de articulos <?= count($cesta) ?> Total precio <?= $sumaPrecios ?></article>
                <!-- Fin informaci贸n -->
	
                <!-- Botonera -->
                <button class="boton_volver" onclick="location.href = 'vaciar.php'">Vaciar cesta</button>
                <article class="clearfix"></article>
                <article>
                    <button class="boton_carrito" onclick="location.href = 'cesta.php'">Comprar</button>
                    <button class="boton_carrito" onclick="location.href = 'logoff.php'">Desconectar usuario <?= $nombre_usuario ?></button>
                    <button class="boton_carrito" onclick="location.href = 'datosUsuario.php'">Ver datos <?= $nombre_usuario ?></button>
                    <button class="boton_carrito" onclick="location.href = 'insertProducto.php'">Insertar producto</button>
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
            <!-- Secci贸n no identificado -->
            <section id="no_identificado">
                <h2>Acceso restringido</h2>
                <p>No est谩s identificado</p>
            </section>
            <!-- Fin secci贸n -->
        <?php
        } else {
        ?>
            <!-- Listado de libros -->
            <section>
                <h2>Listado de libros</h2>
            </section>
            
            
            <?php
            
            $bbdd = new BD("localhost","dwes_04_tienda","root","");
            
            $lista_productos = $bbdd->obtener_productos();
            
            

            foreach ($lista_productos as $codigo => $producto) {
                
                $pro = new Producto($codigo,$producto["nombre"],$producto["descripcion"],$producto["precio"],$producto["familia"]);
                
            ?>
                 <form class="producto" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <img src="img/<?= $pro->getCodigo() ?>.jpg" alt="<?= $pro->getCodigo() ?>" title="<?= $pro->getNombre() ?>">
                    <section class="detalle_producto">
                        <input type="hidden" name="codigo" value="<?= $pro->getCodigo() ?>">
                        <input type="hidden" name="nombre" value="<?= $pro->getNombre() ?>">
                        <input type="hidden" name="des" value="<?= $pro->getDescripcion() ?>">
                        <input type="hidden" name="precio" value="<?= $pro->getPrecio() ?>">
                        <input type="hidden" name="familia" value="<?= $pro->getFamilia() ?>">
                        <p class="titulo"><?= $pro->getNombre() ?></p>
                        <p class="familia"><?= $pro->getFamilia() ?></p>
                        <p class="precio"><?= sprintf($pro->getPrecio(), "%.2f"); ?> 鈧�</p>
                        <p class="descripcion"><?= $pro->getDescripcion() ?></p>
                        <input type="submit" value="A帽adir a la cesta" name="agregar_producto" class="boton_cesta" />
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
<?php
        }
?>

<!-- Pie -->
<footer>
    <section id="pie">Desarrollado por Francisco Lopez (DAW221), Isabel Martinez (DAW223) y Nuria Gutierrez (DAW214)</section>
</footer>
<!-- Fin pie -->
</body>

</html>