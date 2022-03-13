<?php

$libros=array(
	"Histórica y Aventuras" => array(
		array("titulo"=>"Las legiones malditas", "imagen" => "legiones_malditas.jpg", "autor" => "Santiago Posteguillo"),
		array("titulo"=>"Los pilares de la tierra", "imagen" => "pilares_tierra.jpg", "autor" => "Ken Follett"),
		array("titulo" => "La caída de los gigantes", "imagen" => "caida_gigantes.jpg", "autor" => "Ken Follett"),
		array("titulo" => "Africanus, el hijo del cónsul", "imagen" => "africanus.jpg", "autor" => "Santiago Posteguillo")
	),
	"Narrativa" => array(
		array("titulo" => "Patria", "imagen" => "patria.jpg", "autor" => "Fernando Aramburu"),
		array("titulo" => "Dime quién soy", "imagen" => "dime_quien_soy.jpg", "autor" => "Julia Navarro"),
		array("titulo"=>"Dispara, yo ya estoy muerto", "imagen" => "dispara_muerto.jpg", "autor" => "Julia Navarro")
	),
	"Literatura contemporánea" => array(
		array("titulo" => "Cien años de soledad", "imagen" => "cien_anyos_soledad.jpg", "autor" => "Gabriel García Márquez"),
		array("titulo"=>"Crónica de una muerte anunciada", "imagen" => "cronica_muerte.jpg", "autor" => "Gabriel García Márquez"),
		array("titulo" => "El amor en tiempos de cólera", "imagen" => "amor_tiempos_colera.jpg", "autor" => "Gabriel García Márquez")
	),

);



function getAutores($libros)
{
	$arrayAutores=array();
	foreach ($libros as $key=>$item) {
		echo $item;
	}
}
getAutores($libros);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Ejercicio 2</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
        <title>Joseba Mantecón</title>
</head>
<body>
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center bg-success text-white rounded">LIBROS POR AUTORES</p>
                <form action="#" method="POST" class="border border-success p-2 mb-5 rounded">
                    <legend class="text-center header text-light bg-dark">Autores</legend>
                    <div class="form-group">
                        <label for="autor">Autor:</label>
                        <select class='form-control' id='autor' name="autor">
                            <?php

                            foreach ($libros as $key => $item) {
                                echo
                                "<option value='$item'";if(isset($_POST['autor'])&&$_POST['autor']==$item)echo "selected='true'";
                                    
                                echo">$item</option>";
                            };
                            ?>
                        </select>
                    </div>
					<input type="search" id="buscar" name="buscar" class="btn btn-success" value="BUSCAR">
                    <button type="submit" class="btn btn-dark rounded" name="buscar">Buscar</button>
                    <div class="from-group mt-3">
                        <?php
                        if (isset($_POST["buscar"])) {
                            foreach ($marcas[$_POST['autor']] as $item => $item) {

                                echo  "<input type='text' class='form-control mb-1'  value='$item' name='$item'>";
                            }
                        }
                        ?>
					</div>
					<div class="form-control mt-2">
                        <table class="table table-striped table-success table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Libro</th>
                                    <th>Titulo</th>
                                    <th>Genero</th>
                                </tr>
                            </thead>
                            <?php foreach ($libros as $key=>$item) : ?>

                                <tr>
                                    <td>
                                        <?= $libros["imagen"] ?>
                                    </td>
                                    <td>
                                        <?= $libros["autor"] ?>
                                    </td>
                                    <td>
                                        <?= $item?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'
    integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN'
    crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'
    integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'
    crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
    integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl'
    crossorigin='anonymous'></script>
</html>