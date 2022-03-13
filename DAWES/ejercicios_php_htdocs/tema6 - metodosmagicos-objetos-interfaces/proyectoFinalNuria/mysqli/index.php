<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login de usuarios</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos_index.css">

    <!-- JavaScript -->
    <script src="js/funcionesTienda.js"></script>
</head>

<body>
    <!-- Acceso -->
    <div id="login">
        <!-- Cabecera -->
        <header id="cabecera">
            <h1>Login de usuarios</h1>
        </header>
        <!-- Fin cabecera -->

        <!-- Cuerpo -->
        <main id="cuerpo">
            <!-- Formulario de acceso -->
            <form action="index.php" method="post">
                <!-- Usuario -->
                <section>
                    <input type="text" placeholder="Usuario" name="usuario" id="usuario" required />
                </section>
                <!-- Fin usuario -->

                <!-- Contraseña -->
                <section>
                    <input type="password" placeholder="Contraseña" name="password" id="password" required />
                </section>
                <!-- Fin contraseña -->

                <!-- Botonera -->
                <section>
                    <input type="submit" value="Login" name="login" />
                    <a href="registro.php">Registro</a>
                </section>
                <!-- Fin botonera -->

                <!-- Control de usuarios -->
                <section>
                    <?php
                    require_once 'funcionesTienda.php';

                    // ACCESO
                    if (isset($_POST["login"])) {
                        // Obtenemos el usuario y el hash MD5 de la contraseña
                        $nombre_usuario = $_POST["usuario"];
                        $hash_password = md5($_POST["password"]);

                        if (autenticar($nombre_usuario, md5($hash_password)) == true) {
                            // Creamos la sesión y llevamos al usuario a la página
                            session_start();
                            $_SESSION["usuario"] = $nombre_usuario;
                            header("Location: productos.php");
                        } else {
                    ?>
                            <script>
                                fallo("Acceso");
                            </script>
                    <?php
                        }
                    }
                    // FIN ACCESO
                    ?>
                </section>
                <!-- Fin control -->
            </form>
            <!-- Fin formulario -->
        </main>
        <!-- Fin cuerpo -->

        <!-- Pie -->
        <footer id="pie">
            &copy; I.E.S. Miguel Herrero
        </footer>
        <!-- Fin pie -->
    </div>
    <!-- Fin acceso -->
</body>

</html>