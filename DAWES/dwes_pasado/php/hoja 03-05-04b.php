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
                        //array de imagenes
                        $imagenes = ['shutterisland.jpg','projectx.jpg','101dalmatas.jpg','ellobodewallstreet.jpg','invencible.jpg'];

                        //string a minúsculas
                        $pelicula_elegida = strtolower($_POST['pelicula']);


                        $mensaje = "Pelicula NO incluida en el catálogo";

                        //recorremos el array                        
                        foreach($peliculas as $pelicula){

                            //buscamos la cadena en el array de peliculas
                            if(strstr($pelicula,$pelicula_elegida)){

                                $mensaje = "Pelicula incluida en el catálogo";

                                //si la pelicula tiene la cadena le añadimos al nuevo array
                                $peliculas_encontradas[] = $pelicula;

                                //recorremos el array nuevo
                                foreach($peliculas_encontradas as $peli){

                                    //eliminamos los espacios
                                    $eliminar_espacios = str_replace(' ', '', $peli);

                                    //concatenamos con la finalidad de la imagen
                                    $buscar_imagen = $eliminar_espacios .".jpg";
                                    
                                }

                                //buscamos en el array de imagenes
                                foreach($imagenes as $imagen){

                                    //si la imagen está incluido en el array imprime la imagen
                                    if($imagen == $buscar_imagen){
                                        echo "</p><img src='img/$imagen'></p>";
                                        
                                    }
        
                                }

                            }                            
                            
                        }

                    }

                    //pintamos un mensaje con la longitud del array nuevo
                    echo " Hemos encontrado " . count($peliculas_encontradas) . " películas";
                    echo $mensaje;
                
                }
            ?>
        </body> 
    </html>