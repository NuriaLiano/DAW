<?php
global $lista_productos;
?>
   <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos_productos.css">
    <title>Listado de productos</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#agregar_producto").click(function(e){
                e.preventDefault();
                var cod = $("#codigo"); //con esto objeto el codigo de cada objeto donde pincho
                alert(cod.val());
                $.ajax({
                    type: "POST",
                    url: "index.php?option=productos", //url en donde se realiza la peticion //se indica productos la carpeta
                    dataType: "json",
                    data:{"accion":"add","producto":this.cod},
                    success: function(data){
                        
                        $("#cesta").html(data.contenido_cesta);
                        $("#botonVaciar").prop('disable',data.botones);
                        $("#botonComprar").prop('disable',data.botones);
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "index.php?option=productos", //url en donde se realiza la peticion //se indica productos la carpeta
                    dataType: "json",
                    data:{"accion":"delete"},
                    success: function(data){
                        //unset de la cesta
                        
                    }
                });
                window.location="index.php?option=productos";
            })
        });
    </script>

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
            ?>
            
                <!-- Información de la cesta -->
                <article id="info_cesta">Número de articulos <?= count($cesta) ?> Total precio <?= $sumaPrecios ?></article>
                <!-- Fin información -->
	
                <!-- Botonera -->
                <form method="POST" action="">
                <input type="submit" value="Vaciar cesta" name="vaciarCesta" id="botonVaciar" class="boton_volver"/>
                </form>
                
                
                <article class="clearfix"></article>
                <form method="POST" action="">
               	 	<input type="submit" value="Comprar" name="comprar" class="boton_carrito"/>
               	 	<input type="submit" value="Desconectar al usuario <?= $nombre_usuario ?>" name="desconectarUsuario" class="boton_carrito"/> 
               	 	<input type="submit" value="Ver datos <?= $nombre_usuario ?>" name="verDatosUsuario" class="boton_carrito"/>  
               	 	<input type="submit" value="Insertar producto" name="insertarProducto" class="boton_carrito"/>      
                </form>

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
            foreach ($lista_productos as $codigo => $producto) {
                
                $pro = new Producto($codigo,$producto["nombre"],$producto["descripcion"],$producto["precio"],$producto["familia"]);
                
            ?>
                 <form class="producto" method="POST" action="">
                    <img src="img/<?= $pro->getCodigo() ?>.jpg" alt="<?= $pro->getCodigo() ?>" title="<?= $pro->getNombre() ?>">
                    <section class="detalle_producto">
                        <input type="hidden" id="codigo" name="codigo" value="<?= $pro->getCodigo() ?>">
                        <input type="hidden" name="nombre" value="<?= $pro->getNombre() ?>">
                        <input type="hidden" name="des" value="<?= $pro->getDescripcion() ?>">
                        <input type="hidden" name="precio" value="<?= $pro->getPrecio() ?>">
                        <input type="hidden" name="familia" value="<?= $pro->getFamilia() ?>">
                        <p class="titulo"><?= $pro->getNombre() ?></p>
                        <p class="familia"><?= $pro->getFamilia() ?></p>
                        <p class="precio"><?= sprintf($pro->getPrecio(), "%.2f"); ?> €</p>
                        <p class="descripcion"><?= $pro->getDescripcion() ?></p>
                        <input type="submit" value="Añadir a la cesta" name="agregar_producto"  id="agregar_producto" class="boton_cesta" />
                        <input type="submit" value="Ver producto" name="verDatos" class="boton_cesta" />
                        <input type="submit" name="darLike" id="boton_like" value=""/>
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