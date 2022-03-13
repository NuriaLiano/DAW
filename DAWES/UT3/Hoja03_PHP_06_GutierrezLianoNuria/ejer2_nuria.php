<?php
$array = [
    "Real Madrid" => ["entrenador" => [ "Ancelotti" => "img/ancelotti.jpg"],
                      "jugadores" => ["Courtois" =>"img/courtois.jpg",
                                    "Ramos" => "img/ramos.jpg",
                                     "Hazard"=>"img/hazard.jpg"]],

    
    "Barcelona" => ["entrenador" => ["Xavi"=>"img/xavi.jpg"],
                    "jugadores" => ["Ter Stegen"=>"img/terstegen.jpg",
                                   "Pique"=>"img/pique.jpg",
                                   "Griezmann"=>"img/griezmann.jpg"]]

]
?>
<!DOCTYPE html>
    <head>
        <title>Nuria Ejercicio 1</title>
        <meta charset="UTF-8"></meta>
        <style>
            img{
                width: 40%;
                height: 50%;
            }
            table{
                width: 100%;
            }

        </style>
    </head>
    <body>
    <h2>Elige un equipo</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <p>Equipo 
        <?php
            echo "<select name='equipo'>";
            echo "<option value='todos'>--Todos--</option>";
            foreach ($array as $key => $equipos){
                
                echo "<option value='$key'>$key</option>";
                
            }
            echo "</select>"

        ?>
        </p>
        <p>Puesto
            <input type="radio" name="entrenador" value="entrenador">Entrenador
            <input type="radio" name="jugadores" value="jugadores">Jugadores</p>
        <input type="submit" value="Buscar" name="enviar">
    </form>

    <?php
    if(isset($_POST['enviar'])){
       if(isset($_POST['equipo']) && !empty($_POST['equipo'])){

        $equipo_elegido = $_POST['equipo'];
        $puesto = "";
        if(isset($_POST['entrenador'])){
            $puesto = "entrenador";
        }else if(isset($_POST['jugadores'])){
            $puesto = "jugadores";
        }
        

        if($equipo_elegido == "todos"){
            
            echo "<table><tr><th>Real Madrid</th><th>Barcelona</th></tr>";

            foreach($array["Real Madrid"][$puesto] as $key => $valor){
                echo "<tr><td>";
                echo "<h2>".$key."</h2>";
                echo "<img src='" .$valor ."'>";
                echo "</td></tr>";
               
            }
            foreach($array["Barcelona"][$puesto] as $key => $valor){
                echo "<tr><td>";
                echo "<h2>".$key."</h2>";
                echo "<img src='" .$valor ."'>";
                echo "</td></tr>";
               
            }
            echo "</table>";

            
        }else{

            echo "<div class='container'>";
            echo "<h1>".$equipo_elegido."</h1>"; 
        foreach($array[$equipo_elegido][$puesto] as $key => $valor){
            
                    
                                     
                    echo "<h2>".$key."</h2>";
                    echo "<img src='" .$valor ."'>";   
                    
                
        }
        echo "</div>";
    }
       }
    }
    ?>
    </body>
</html>