
<?php 

if (isset($_POST["nombre"])) {
    echo $_POST["edad"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejemplo de formulario POST</h1>
    <form action="formularioPost.php" method="post">
        Introduzca su nombre:
        <input type="text" name="nombre">
        <br />
        Introduzca sus apellidos:<input type="text" name="apellidos"><br />
        Introduzca su edad: <input type="number" name="edad"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>