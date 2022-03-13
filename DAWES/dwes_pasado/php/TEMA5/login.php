<?php
    require_once('funcionalidad.php');    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <p>ID Cliente</p>
            <input type="number" name="id_cliente">
            <p>Password</p>
            <input type="password" name="contraseña">
            <p><input type="submit" value="Login" name="enviar"></p>
        </form>

        <?php
            if(isset($_POST['enviar'])){
                if(isset($_POST['id_cliente']) && isset($_POST['contraseña'])){
                    $id_cliente = $_POST['id_cliente'];
                    $contraseña = $_POST['contraseña'];

                    if(logear($id_cliente,$contraseña)){
                        header("Location:viajes.php");
                    }else{
                        echo "ha ocurrido un error";
                    }
                }
            }
        ?>
    </body>
</php>