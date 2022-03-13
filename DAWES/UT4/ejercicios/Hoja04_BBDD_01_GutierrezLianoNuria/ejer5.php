<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja04_BBDD_01</title>
    <style>
            table{
                padding:5px;
                
            }
            td{
                background-color: #1cf91c7a;
                border-radius: 30px;
                width: 30%;
                text-align: center;
                padding: 5px;
            }
            input[type=text]{
                background-color: #1cf91c7a;
                border: 0px;
            }
        </style>
</head>

<body>
    <div class="title">
        <h1>Jugadores de la NBA</h1>
        <p>* Campo obligatorio</p>
    </div>
    
    <div class="form">
        <form action="funciones.php" method="post">
        	<p>Equipo 
        		<?php 
        		      echo "<select name='equipo_sel'>";
        		      foreach (getEquipos() as $equipo){
        		          echo "<option value='" .$equipo['nombre'] . "'>" .$equipo['nombre'] ."</option>";
        		      }
        		      echo "</select>";
        		?>
        	</p>
            <input type="submit" value="Mostrar" name="enviar">
       </form>
       <?php 
           if(isset($_POST['enviar'])){
               
               if(isset($_POST['equipo_sel']) && !empty($_POST['equipo_sel'])){
                   $array = [];
                   $equipo_elegido = $_POST['equipo_sel'];
                   echo "<table><tr><th>NOMBRE</th><th>PESO</th></tr>";
                   echo "<form action='funciones.php' method='post'>";
                   foreach(getJugadores(equipo_elegido) as $jugador){
                       echo "<tr>";
                       echo "<td>" .$jugador['nombre'] ."</td>";
                       echo "<td><input type='number' value='" .$jugador['peso'] ."' name='" .$jugador['nombre']."'></td>";
                       echo "</tr>";
                       
                   }
                   echo "<input type='submit' value='Actualizar' name='actualizar'>";
                   echo "</form>";
               }
           }
           
           if(isset($_POST['actualizar'])){
               
               if(modificar_peso($_POST)){
                   echo "bien";
               }
           }
       
       ?>
       
    </div>
</body>

</html>
