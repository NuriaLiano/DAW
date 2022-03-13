<?php
$array = [
    "Real Madrid" => ["entrenador" => [ "Zidane" => "img2/zidane.jpg"],
                      "jugadores" => ["Courtois" =>"img2/courtois.jpg",
                                    "Ramos" => "img2/ramos.jpg",
                                     "Hazard"=>"img2/hazard.png"]],

    
    "Barcelona" => ["entrenador" => ["Koeman"=>"img2/koeman.jpg"],
                    "jugadores" => ["Ter Stegen"=>"img2/terstegen.png",
                                   "Piqué"=>"img2/pique.png",
                                   "Griezmann"=>"img2/griezmann.jpg"]]

]
?>
<!DOCTYPE html>
    <head>
        <title>Hoja03-06-02</title>
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