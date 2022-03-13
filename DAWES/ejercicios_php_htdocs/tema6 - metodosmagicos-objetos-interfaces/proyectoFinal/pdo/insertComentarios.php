<?php
session_start();

require_once "BD.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
 			<button class="boton_inferior" onclick="location.href = 'productos.php'">Seguir comprando</button>
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

            <?php
            
            $bbdd = new BD("localhost","dwes_04_tienda","root","");
                
            ?>
                 <form class="producto" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                   
                <section class="detalle_producto">

				<label>Comentario:</label> <input name="comentario" type="text" class="titulo"></input>
 				<br>
				
				<input name="insertar" type="submit" class="precio" value= "Insertar"></input>
				
				</section>
                </form>
            <?php
            }
            if (isset($_POST["insertar"])) {
                
                $id = rand(1,10000);              
                
                $usu = $_SESSION["usuario"];
                
                $producto =  $_SESSION["productoConcreto"];                              
                
                $comentario = $_POST["comentario"];
                
                $bbdd->insertarComentarios($id,$usu,$producto,$comentario);
            }
            ?>

            <div class="clearfix"></div>
            <!-- Fin listado -->
    </main>
    <!-- Fin listado -->

<!-- Pie -->
<footer>
    <hr>
    <section id="pie">Desarrollado por Antonio López (DAW220) y Francisco López (DAW221)</section>
</footer>
<!-- Fin pie -->
</body>

</html>