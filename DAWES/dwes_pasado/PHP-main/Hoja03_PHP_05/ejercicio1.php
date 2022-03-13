<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monedas</title>
</head>

<body>
    <h1>Conversor de monedas</h1>
    <form action="#" method="POST">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad"><br><br>
        <label for="origen">Origen:</label>
        <select name="origen">

            <option option value="libras">Libras</option>

            <option option value="euros">Euros</option>

            <option option value="dolares">Dólares</option>

        </select><br><br>
        <label for="destino">Destino</label>
        <select name="destino">

            <option value="libras">Libras</option>

            <option value="euros">Euros</option>

            <option value="dolares">Dólares</option>

        </select><br><br>
        <input type="submit" name="convertir" id="convertir">

    </form>

    <?php


    if (isset($_POST["libras"])) {
        $libras = $_POST["libras"];

        $respuestaO == $_POST["origen"];
        $respuestaD == $_POST["destino"];
        switch (true) {
            case $respuestaO == "euros" && $respuestaD == "libras":
                echo $euros . " euros son: " . $euros * 0.91 . " libras";
                break;
            case $respuestaO == "euros" && $respuestaD == "dolares":
                echo $euros . " euros son: " . $euros * 1.18 . " dólares";
                break;
            case $respuestaO == "dolares" && $respuestaD == "euros":
                echo $dolares . " dolares son: " . $dolares * 0.85 . " dólares";
                break;
            case $respuestaO == "dolares" && $respuestaD == "libras":
                echo $dolares . " dolares son: " . $dolares * 0.77 . " libras";
                break;
            case $respuestaO == "libras" && $respuestaD == "euros":
                echo $libras . " libras son: " . $libras * 1.1 . " euros";
                break;
            case $respuestaO == "libras" && $respuestaD == "dolares":
                echo $libras . " libras son: " . $libras * 1.29 . " dolares";
                break;
            default:
                echo "Yo me llamo Ralph";
                break;
        }
    }
    if (isset($_POST["euros"])) {
        $euros = $_POST["euros"];

        $respuestaO == $_POST["origen"];
        $respuestaD == $_POST["destino"];
        switch (true) {
            case $respuestaO == "euros" && $respuestaD == "libras":
                echo $euros . " euros son: " . $euros * 0.91 . " libras";
                break;
            case $respuestaO == "euros" && $respuestaD == "dolares":
                echo $euros . " euros son: " . $euros * 1.18 . " dólares";
                break;
            case $respuestaO == "dolares" && $respuestaD == "euros":
                echo $dolares . " dolares son: " . $dolares * 0.85 . " dólares";
                break;
            case $respuestaO == "dolares" && $respuestaD == "libras":
                echo $dolares . " dolares son: " . $dolares * 0.77 . " libras";
                break;
            case $respuestaO == "libras" && $respuestaD == "euros":
                echo $libras . " libras son: " . $libras * 1.1 . " euros";
                break;
            case $respuestaO == "libras" && $respuestaD == "dolares":
                echo $libras . " libras son: " . $libras * 1.29 . " dolares";
                break;
            default:
                echo "Yo me llamo Ralph";
                break;
        }
    }
    if (isset($_POST["dolares"])) {
        $dolares = $_POST["dolares"];
        $respuestaO == $_POST["origen"];
        $respuestaD == $_POST["destino"];
        switch (true) {
            case $respuestaO == "euros" && $respuestaD == "libras":
                echo $euros . " euros son: " . $euros * 0.91 . " libras";
                break;
            case $respuestaO == "euros" && $respuestaD == "dolares":
                echo $euros . " euros son: " . $euros * 1.18 . " dólares";
                break;
            case $respuestaO == "dolares" && $respuestaD == "euros":
                echo $dolares . " dolares son: " . $dolares * 0.85 . " dólares";
                break;
            case $respuestaO == "dolares" && $respuestaD == "libras":
                echo $dolares . " dolares son: " . $dolares * 0.77 . " libras";
                break;
            case $respuestaO == "libras" && $respuestaD == "euros":
                echo $libras . " libras son: " . $libras * 1.1 . " euros";
                break;
            case $respuestaO == "libras" && $respuestaD == "dolares":
                echo $libras . " libras son: " . $libras * 1.29 . " dolares";
                break;
            default:
                echo "Yo me llamo Ralph";
                break;
        }
    }









    ?>
</body>

</html>