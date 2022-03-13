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
    
            
            <div class="login">
            <div class="login-caja">
                <form name="registro" action="registro.php" method="POST">
                <div class="login-titulo">
                    <h2>Registro de usuarios</h2>
                </div>
            <div class="login-form">
                    <div class="login-inputs">
                        <input type="text" class="login-field" id="usuario" name="usuario" placeholder="introduce usuario" required>
                        <label class="login-field-icon fui-user" for="login-name"></label>    
                    </div>
                    <div class="login-inputs">
                        <input type="password" class="login-field" id="password" name="password" placeholder="introduce password" required>
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <div class="login-inputs">
                        <input type="password" class="login-field" id="confirmar_password" name="confirmar_password" placeholder="confirma tu password" required>
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <input type="submit" name="registro" value="Registro" class="btn">
                    <a href="index.php" class="btn-rg">Volver a Login</a>
                </div>
                       <!-- Pie -->
        <footer class="pie">
            &copy; I.E.S. Miguel Herrero
        </footer>
                </section>
                <!-- Fin botonera -->

                <!-- Control de usuarios -->
                <section>
                    <?php
                    require_once 'BD.php';
                    
                    $bbdd = new BD("localhost","dwes_04_tienda","root","");
                    // ACCESO
                    if (isset($_POST["registro"])) {
                        // Obtenemos el usuario, la contrase�a y su confirmaci�n
                        $nombre_usuario = $_POST["usuario"];
                        $password = $_POST["password"];
                        $confirmar_password = $_POST["confirmar_password"];
                        
                        // Calculamos el hash MD5
                        $hash_password = md5($password);
                        
                        if ($password == $confirmar_password) {
                            
                            $bbdd->registrar($nombre_usuario,$hash_password,"rutaFoto");
                            // Llevamos al usuario a la p�gina
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

    </div>
    <!-- Fin acceso -->
</body>

</html>