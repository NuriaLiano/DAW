<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores NBA</title>
</head>
<body>
    <h3>Jugadores de la NBA</h3>
    <p>Equipo: </p>
    <form action="#" method="POST">
        <select name="select" id="listaequipos">
            <option value="">Selecciona</option>
            <?php
                require_once 'funciones.php';

                $equipos = getEquipos();
                
                foreach($equipos as $equi){
                    if(isset($_POST['select'])){
                        //echo "<option>". $equi[0] ."</option>"; 0 ES LA POSICION 0 DE LA TABLA DONDE SE ENCUENTRA NOMBRE
                        echo "<option selected=true value='" . $equi['nombre'] . "'>". $equi['nombre'] ."</option>";
                    }else{
                        echo "<option value'" . $equi['nombre'] . "'>". $equi['nombre'] ."</option>";
                    }
                    
                }
            ?>
        </select>
        <hr>
        <input type="submit" name="mostrar" value="Mostrar">
        <input type="submit" name="actualizar" value="Actualizar">
        <hr>
        
            <?php
                if(isset($_POST['mostrar'])){
                   echo "<table class='table' style=\"border: 1px solid black; width: 300px;\"> <tr><th>Jugadores</th><th>Peso</th></tr>"; 
                   $equiJugador = getJugadorEquipo($_POST['select']);
                   foreach($equiJugador as $ej){
                    echo "<tr><td>". $ej['nombre'] ."</td>";
                    echo "<td><input type='number' name='peso' value='" . $ej['peso'] . "'></input></td></tr>";
                   }
                   //echo  $_POST["select"];
                }else{
                    echo "error al mostrar";
                }

                /*if(isset($_POST['actualizar'])){
                    $equiJugador = getJugadorEquipo($_POST['select']);
                    foreach($equiJugador as $ej){
                        $nuevoPeso = $_POST['peso'];
                        $equipo = $_POST['select'];
                        actualizarPeso($nuevoPeso, $equipo);
                    
                 }else{
                     echo "error al actualizar";
                 }*/

            
            
            ?>
        </table>
        <hr>
        <h2>Traspaso de Jugadores</h2>
        <p>Baja de jugadores</p>
        <select name="selectjugador" id="selectjugador">
            <option value="">Selecciona</option>
            <?php
                require_once 'funciones.php';

                $jugador = getJugadorEquipo($_POST['select']);
                
                foreach($jugador as $jug){
                    if(isset($_POST['select'])){
                        //echo "<option>". $equi[0] ."</option>"; 0 ES LA POSICION 0 DE LA TABLA DONDE SE ENCUENTRA NOMBRE
                        echo "<option selected=true value='" . $jug['nombre'] . "'>". $jug['nombre'] ."</option>";
                    }else{
                        echo "<option value'" . $jug['nombre'] . "'>". $jug['nombre'] ."</option>";
                    }
                    
                }
            ?>
        </select>
        <hr>
        <h4>Datos del nuevo jugador</h4>
        Nombre: <input type="text" name="nombrej" placeholder="Nombre">
        Procedencia: <input type="text" name="procedencia" placeholder="procedencia">
        Altura: <input type="number" name="altura" placeholder="0.0">
        Peso: <input type="number" name="peso" placeholder="0.0">
        Posicion: 
        <select name="selectposicion" id="selectposicion">
            <option value="">Selecciona</option>
            <?php
                require_once 'funciones.php';

                $jugador = getJugadorEquipo($_POST['select']);
                
                foreach($jugador as $jug){
                    if(isset($_POST['select'])){
                        //echo "<option>". $equi[0] ."</option>"; 0 ES LA POSICION 0 DE LA TABLA DONDE SE ENCUENTRA NOMBRE
                        echo "<option selected=true value='" . $jug['posicion'] . "'>". $jug['posicion'] ."</option>";
                    }else{
                        echo "<option value'" . $jug['posicion'] . "'>". $jug['posicion'] ."</posicion>";
                    }
                    
                }
            ?>
        </select>
        <input type="submit" name="traspaso" value="Realizar traspaso">
        <?php
            if(isset($_POST['traspaso'])){
                $nombrej = $_POST['nombrej'];
                $proce = $_POST['procedencia'];
                $altura = $_POST['altura'];
                $peso = $_POST['peso'];
                $posicion =  $_POST['selectposicion'];
                $nombreantiguo = $_POST['selectjugador'];
                traspaso($nombrej, $proce, $altura, $peso, $posicion, $nombreantiguo);
            }



        ?>
    </form>
</body>
</html>