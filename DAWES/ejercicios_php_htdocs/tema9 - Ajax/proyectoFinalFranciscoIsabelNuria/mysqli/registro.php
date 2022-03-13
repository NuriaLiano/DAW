<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de usuarios</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos_registro.css">

    <!-- JavaScript -->
    <script src="js/funcionesTienda.js"></script>
</head>

<body>
    <!-- Acceso -->
    <div id="registro">
        <!-- Cabecera -->
        <header id="cabecera">
            <h1>Registro de usuarios</h1>
        </header>
        <!-- Fin cabecera -->

        <!-- Cuerpo -->
        <main id="cuerpo">
            <!-- Formulario de acceso -->
            <form action="registro.php" method="post">
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

                <!-- Confirmar contraseña -->
                <section>
                    <input type="password" placeholder="Confirmar contraseña" name="confirmar_password" id="confirmar_password" required />
                </section>
                <!-- Fin confirmar -->

                <!-- Botonera -->
                <section>
                    <input type="submit" value="Registro" name="registro" />
                    <a href="index.php">Acceso</a>
                </section>
                <!-- Fin botonera -->

                <!-- Control de usuarios -->
                <section>
                    <?php
                    require_once 'funcionesTienda.php';

                    // ACCESO
                    if (isset($_POST["registro"])) {
                        // Obtenemos el usuario, la contraseña y su confirmación
                        $nombre_usuario = $_POST["usuario"];
                        $password = $_POST["password"];
                        $confirmar_password = $_POST["confirmar_password"];

                        // Calculamos el hash MD5
                        $hash_password = md5($password);

                        if (($password == $confirmar_password) && (registrar($nombre_usuario, md5($hash_password)) == true)) {
                            // Llevamos al usuario a la página
                            header("Location: index.php");
                        } else {
                    ?>
                            <script>
                                fallo("Registro");
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