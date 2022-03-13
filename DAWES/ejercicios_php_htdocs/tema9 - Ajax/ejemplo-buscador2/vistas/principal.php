<html>
    <head>
        <title>Jugadores de la NBA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                text-align:center;
            }
            #menu{
                display:inline-block;
                text-align:left;
            }
            #menu li{
                margin-top:2em;
            }
        </style>
        <link rel="StyleSheet" type="text/css" href="css/estilo.css" />
 		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	    <script type="text/javascript" src="js/lib.js"></script>
    </head>
    <body>
        <h1>Buscador de Jugadores de la NBA</h1>
        <div>
            Criterio de busqueda:
            <input type="text" id="criterio"  />
            <!--Al pulsar el boton se llama a la funcion mostrar Jugadores-->
            <button type="button" onclick="mostrarJugadores();" id="buscar" name="buscar">Buscar</button> 
        </div>
        <br><br>
        <!--Imprimir los jugadores-->
        <div id="cont_jugadores">
            
        </div>
        
    </body>
</html>