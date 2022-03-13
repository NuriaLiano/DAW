<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>VAINA</h1>
    <form action="operaciones.php" method="POST">
        <label for="primero ">Introduzca el 1º numero:</label>
        <input type="number" name="primero" id="primero"><br>
        <label for="segundo">Introduzca el 2º numero:</label>
        <input type="number" name="segundo" id="segundo"><br><br>
        <label for="operacion">Seleccione la operacion a realizar:</label><br>
        <input type="radio" name="operacion" id="suma" value="suma">Suma
        <input type="radio" name="operacion" id="resta" value="resta">Resta
        <input type="radio" name="operacion" id="cociente" value="cociente">Cociente
        <input type="radio" name="operacion" id="producto" value="producto">Producto <br><br>   
        <input type="submit" name="enviar" id="enviar" value="enviar">
    </form>
</body> 
</html>