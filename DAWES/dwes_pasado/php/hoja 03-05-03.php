<!DOCTYPE html>
    <head>
        <title>Hoja03-05-04</title>
        <meta charset="UTF-8"></meta>
    </head>
    <body>
        <h3>Busca Tú Película</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <p>Escribe el título</p>
            <input type="text" name="pelicula">
            <p><input type="submit" value="Buscar" name ="enviar"></p>
        </form>
    
            <?php
                if(isset($_POST['enviar'])){

                    if(isset($_POST['pelicula']) && !empty($_POST['pelicula'])){
                        //array de peliculas
                        $peliculas = ['shutter island','project x','101 dalmatas','el lobo de wall street','invencible'];
                        

                        //string a minúsculas
                        $pelicula_elegida = strtolower($_POST['pelicula']);

                        //creamos la variable mensaje con el mensaje si no está incluida
                        $mensaje = "Pelicula NO incluida en el catálogo";

                        //recorremos el array
                        foreach($peliculas as $pelicula){
                            //si la pelicula está en el array, cambiamos el mensaje
                            if($pelicula == $pelicula_elegida){
                                $mensaje = "Pelicula incluida en el catálogo";
                            }
                        }

                        //imprimimos el mensaje
                        echo $mensaje;
                    }
                }
                 
            ?>
        </body> 
    </html>