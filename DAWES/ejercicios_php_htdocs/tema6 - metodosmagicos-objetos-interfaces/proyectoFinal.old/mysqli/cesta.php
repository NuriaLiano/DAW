<?php
session_start();

require_once "funcionesTienda.php";
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

                // CONTROLAMOS CESTA VACÍA
                if (count($cesta) == 0) {
                ?>
                    <script>
                        cesta_vacia();
                    </script>
                <?php
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
            <!-- Cesta de la compra -->
            <section>
                <h2>Cesta de la compra</h2>
            </section>
            <?php
            foreach ($cesta as $codigo => $producto) {
                if ($codigo != "total") {
                    $imagen = $codigo;
                    $unidades = $cesta[$codigo];
                    $subtotal = obtener_precio($codigo, $unidades);
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
            }
            ?>
            <!-- Fin cesta -->
            <div class="clearfix"></div>

            <!-- Botonera inferior -->
            <button class="boton_inferior" onclick="location.href = 'productos.php'">Seguir comprando</button>
            <button class="boton_inferior" onclick="location.href = 'logoff.php'">Pagar</button>
            <!-- Fin botonera -->
    </main>
    <!-- Fin listado -->
<?php
        }
?>

<div class="clearfix"></div>

<!-- Pie -->
<footer>
    <hr>
    <section id="pie">Desarrollado por Antonio López (DAW220) y Francisco López (DAW221)</section>
</footer>
<!-- Fin pie -->
</body>

</html>