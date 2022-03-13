<?php
session_start();

require_once "funcionesTienda.php";
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
                <!-- Botón de volver -->
                <button class="boton_volver" onclick="location.href = 'logoff.php'">Volver</button>
                <!-- Fin botón -->
            <?php
            } else {
                $nombre_usuario = $_SESSION["usuario"];

                // INICIALIZACIÓN SESIÓN CESTA
                if (isset($_SESSION["cesta"])) {
                    $cesta = $_SESSION["cesta"];
                } else {
                    $cesta = [];
                }

                // AGREGAR PRODUCTO
                if (isset($_POST["agregar_producto"])) {
                    $codigo = $_POST["codigo"];
                    $precio = $_POST["precio"];

                    // UNIDADES DE CADA PRODUCTO
                    if (!isset($cesta[$codigo])) {
                        $cesta[$codigo] = 1;
                    } else {
                        $cesta[$codigo]++;
                    }

                    // TOTAL DE LA CESTA
                    if (!isset($cesta["total"])) {
                        $cesta["total"] = $precio;
                    } else {
                        $cesta["total"] += $precio;
                    }

                    $_SESSION["cesta"] = $cesta;
                }
            ?>
                <!-- Información de la cesta -->
                <article id="info_cesta"><?= count($cesta) > 0 ? count($cesta) - 1 : 0 ?> producto<?= count($cesta) == 2 ? "" : "s" ?> (<?= (isset($cesta["total"])) ? sprintf($cesta["total"], "%.2f") : "0.00"; ?> €)</article>
                <!-- Fin información -->

                <!-- Botonera -->
                <button class="boton_volver" onclick="location.href = 'vaciar.php'">Vaciar cesta</button>
                <article class="clearfix"></article>
                <article>
                    <button class="boton_carrito" onclick="location.href = 'cesta.php'">Comprar</button>
                    <button class="boton_carrito" onclick="location.href = 'logoff.php'">Desconectar usuario <?= $nombre_usuario ?></button>
                </article>

            <?php
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
        if (!isset($_SESSION["usuario"])) {
        ?>
            <!-- Sección no identificado -->
            <section id="no_identificado">
                <h2>Acceso restringido</h2>
                <p>No estás identificado</p>
            </section>
            <!-- Fin sección -->
        <?php
        } else {
        ?>
            <!-- Listado de libros -->
            <section>
                <h2>Listado de libros</h2>
            </section>
            <?php
            $lista_productos = obtener_productos();

            foreach ($lista_productos as $codigo => $producto) {
                $imagen = $codigo;
                $nombre = $producto["nombre"];
                $descripcion = $producto["descripcion"];
                $precio = $producto["precio"];
                $familia = $producto["familia"];
            ?>
                <form class="producto" method="POST" action="productos.php">
                    <img src="img/<?= $imagen ?>.jpg" alt="<?= $imagen ?>" title="<?= $nombre ?>">
                    <section class="detalle_producto">
                        <input type="hidden" name="codigo" value="<?= $codigo ?>">
                        <input type="hidden" name="precio" value="<?= $precio ?>">
                        <p class="titulo"><?= $nombre ?></p>
                        <p class="familia"><?= $familia ?></p>
                        <p class="precio"><?= sprintf($precio, "%.2f"); ?> €</p>
                        <p class="descripcion"><?= $descripcion ?></p>
                        <input type="submit" value="Añadir a la cesta" name="agregar_producto" class="boton_cesta" />
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
    <hr>
    <section id="pie">Desarrollado por Antonio López (DAW220) y Francisco López (DAW221)</section>
</footer>
<!-- Fin pie -->
</body>

</html>