   <?php
    # definimos los valores iniciales para nuestro calendario
    $month = date("n");
    $year = date("Y");
    $diaActual = date("j");

    # Obtenemos el dia de la semana del primer dia
    # Devuelve 0 para domingo, 6 para sabado
    $diaSemana = date("w", mktime(0, 0, 0, $month, 1, $year)) + 7;
    # Obtenemos el ultimo dia del mes
    $ultimoDiaMes = date("d", (mktime(0, 0, 0, $month + 1, 1, $year) - 1));

    $meses = array(
      1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
      "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    );
    ?>
   <!DOCTYPE html>
   <html>

   <head>
     <title>Parque Natural Miguel Herrero - Reservas</title>
     <link href="style.css" rel="stylesheet" type="text/css" />
     <style>
       #calendario th {
         background-color: #006699;
         color: #fff;
         width: 40px;
       }

       #calendario td {
         text-align: right;
         padding: 2px 5px;
         background-color: silver;
       }

       #calendario .hoy {
         background-color: red;
       }
     </style>
   </head>

   <body>
     <div class="red_arriba">
       <div></div>
     </div>

     <h1>Parque Natural Miguel Herrero</h1>

     <div class="contenido">
       <div class="contenido_abajo">
         <h2>Reservas</h2>
         <p>
           El acceso al parque es libre y gratuito, siempre que se respeten las
           normas de conducta y preservacion del entorno.
         </p>
         <p>
           No obstante, tambien disponemos de servicios adicionales, como visita
           guiada o aula educativa para ninos.
         </p>
         <h3>Horarios y reservas</h3>
         <table class="reservas">
           <tr>
             <th colspan="5">Visitas con guia:</th>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td colspan="2" class="titulo">
               Temporada de Verano <br />(01/07 a 30/09)
             </td>
             <td colspan="2" class="titulo">
               Temporada de Invierno <br />(resto del anio)
             </td>
           </tr>
           <tr>
             <td class="titulo">Horarios:</td>
             <td colspan="2">
               10:00 - 13:00<br />
               16:00 - 19:00
             </td>
             <td colspan="2">11:00 -14:00</td>
           </tr>
           <tr>
             <td rowspan="2" class="titulo">Tarifas:</td>
             <td>Individual:</td>
             <td>Grupos:</td>
             <td>Individual:</td>
             <td>Grupos:</td>
           </tr>
           <tr>
             <td>5 &euro; persona</td>
             <td>3 &euro; persona</td>
             <td>4 &euro; persona</td>
             <td>2 &euro; persona</td>
           </tr>
         </table>
         <table border="0" cellspacing="3" cellpadding="3" class="reservas">
           <tr>
             <th colspan="3">Aula educativa (s&oacute;lo grupos):</th>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td class="titulo">Temporada de Verano</td>
             <td class="titulo">Temporada de Invierno</td>
           </tr>
           <tr>
             <td class="titulo">Horarios:</td>
             <td>
               9:00 - 10:00<br />
               15:00 - 16:00
             </td>
             <td>10:00 - 11:00</td>
           </tr>
           <tr>
             <td class="titulo">Tarifas:</td>
             <td>25 &euro;</td>
             <td>25 &euro;</td>
           </tr>
         </table>
         <h3>Contacto</h3>
         <p>
           Si est&aacute;s pensando visitar el parque, por favor, rellena este
           formulario:
         </p>
         <table class="reservas">
           <form action="enviar_reservar.php" method="POST">
             <tr>
               <td><label for="nombre">Nombre:</label></td>
               <td><input type="text" name="nombre" id="nombre"  /> </td>
             </tr>
             <tr>
               <td><label for="email">Email:</label></td>
               <td><input type="email" name="email" id="email"  /> </td>
             </tr>
             <tr>
               <td><label for="fecha">Fecha de la visita:</label></td>
               <td><input type="date" name="fecha" id="fecha" ></td>
             </tr>
             <tr>
               <td><label for="personas">Numero de personas</label></td>
               <td><input type="number" name="personas" id="personas"></td>
             </tr>
             <tr>
               <td>
                 <label for="edad">Edad del grupo:</label>
               </td>

               <td>
                 <input type="radio" value="5-8" name="edad">De 5 a 8</input>
                 <input type="radio" value="9-14" name="edad">De 9 a 14</input>
                 <input type="radio" value="15-18" name="edad">De 15 a 18</input>
                 <input type="radio" value="adultos" name="edad">Adultos</input>
               <td>
             </tr>
             <tr>
               <td colspan="2" rowspan="2">
                 <label for="guia">Desearemos visita guiada</label>
                 <input type="checkbox" name="guia" id="guia"><br>
                 <label for="educativa">Desearemos asistir al aula educativa (solo ninios)</label>
                 <input type="checkbox" name="educativa" id="educativa">
               </td>
             </tr>
             <tr>
               <td colspan="2">

               </td>
             </tr>
             <tr>
               <td><label for="observaciones">Observaciones:</label></td>
               <td></td>
             </tr>
             <tr>
               <td colspan="2">
                 <textarea name="observaciones" id="observaciones" cols="50" rows="7"></textarea>
               </td>
             </tr>
             <tr>
               <td colspan="2" align="right">
                 <input type="submit" name="enviar" id="enviar" value="Enviar">
               </td>
             </tr>
           </form>
         </table>
       </div>

       <table id="calendario">
         <caption><?php echo $meses[$month] . " " . $year ?></caption>
         <tr>
           <th>Lun</th>
           <th>Mar</th>
           <th>Mie</th>
           <th>Jue</th>
           <th>Vie</th>
           <th>Sab</th>
           <th>Dom</th>
         </tr>
         <tr bgcolor="silver">
           <?php
            $last_cell = $diaSemana + $ultimoDiaMes;
            // hacemos un bucle hasta 42, que es el máximo de valores que puede haber... 6 columnas de 7 dias
            for ($i = 1; $i <= 42; $i++) {
              if ($i == $diaSemana) {
                // determinamos en que dia empieza
                $day = 1;
              }
              if ($i < $diaSemana || $i >= $last_cell) {
                // celca vacia
                echo "<td>&nbsp;</td>";
              } else {
                // mostramos el dia
                if ($day == $diaActual)
                  echo "<td class='hoy'>$day</td>";
                else
                  echo "<td>$day</td>";
                $day++;
              }
              // cuando llega al final de la semana, iniciamos una columna nueva
              if ($i % 7 == 0) {
                echo "</tr><tr>\n";
              }
            }
            ?>
         </tr>
       </table>
     </div>

     <div class="red_abajo">
       <div></div>
     </div>
   </body>

   </html>