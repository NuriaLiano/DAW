<?php 
    //recuperar la session
    session_start();
    
    
    if (isset($_SESSION["cesta"])) {
        unset($_SESSION["cesta"]);
   }

    if (isset($_POST['volver'])) {
        header("Location: productos.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/pagar.css">
    <title>Pasarela de pago</title>
</head>
<body>
    <div class="titulo">
        <h1>¡Gracias por tu compra!</h1>
        <p>El producto llegará lo antes posible</p>
    </div>
    <div class="texto-final">
        <img src="img/smile.png" >
        <form action="pagar.php" method="POST">
        	<input type="submit" name="volver" value="Volver a productos" class="btn">
        </form>
        
        <h2>Esperamos verte pronto</h2>
        
    </div>
</body>
</html>