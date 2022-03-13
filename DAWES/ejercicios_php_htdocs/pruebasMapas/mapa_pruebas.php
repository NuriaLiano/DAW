<?php
        $localizaciones=array(); 
        $usuario="root";
        $password="";
        $server="localhost";
        $bbdd_nombre="dwes_05_mapa";
        $db=new mysqli($server,$usuario,$password,$bbdd_nombre);
        $query =  $db->query("SELECT * FROM localizaciones");
        //$afectadas = mysql_num_rows($db);  
        //echo $afectadas;

        while( $row = $query->fetch_assoc() ){
            $nombre = $row['nombre'];
            $longitud = $row['longitud'];                              
            $latitud = $row['latitud'];
            $tipo=$row['tipo'];
            /* cada fila se añade en un array */
            $localizaciones[]=array( 'nom'=>$name, 'lat'=>$latitud, 'lon'=>$longitud, 'tipo'=>$tipo );
        }


        //echo $localizaciones[0]['nombre'].": In stock: ".$localizaciones[0]['lat'].", sold: ".$localizaciones[0]['lon'].".<br>";
        //echo $localizaciones[1]['nombre'].": In stock: ".$localizaciones[1]['lat'].", sold: ".$localizaciones[1]['lon'].".<br>";
    ?>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBppUeFiZp6QUnGok9TvjHKXqHRLGGOt8A&callback=initMap"></script> 
    <script type="text/javascript">
    var map;
    var Markers = {};
    var infowindow;
    var localizaciones = [
        <?php for($i=0;$i<sizeof($localizaciones);$i++){ $j=$i+1;?>
        [
            'AMC Service',
            '<p><a href="<?php echo $localizaciones[0]['tipo'];?>">Book this Person Now</a></p>',
            <?php echo $localizaciones[$i]['lat'];?>,
            <?php echo $localizaciones[$i]['lon'];?>,
            0
        ]<?php if($j!=sizeof($localizaciones))echo ","; }?>
    ];
    var origin = new google.maps.LatLng(localizaciones[0][2], localizaciones[0][3]);

    function initialize() {
      var mapOptions = {
        zoom: 9,
        center: origin
      };

      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        infowindow = new google.maps.InfoWindow();

        for(i=0; i<localizaciones.length; i++) {
            var position = new google.maps.LatLng(localizaciones[i][2], localizaciones[i][3]);
            var marker = new google.maps.Marker({
                position: position,
                map: map,
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(localizaciones[i][1]);
                    infowindow.setOptions({maxWidth: 200});
                    infowindow.open(map, marker);
                }
            }) (marker, i));
            Markers[localizaciones[i][4]] = marker;
        }

        locate(0);

    }

    function locate(marker_id) {
        var myMarker = Markers[marker_id];
        var markerPosition = myMarker.getPosition();
        map.setCenter(markerPosition);
        google.maps.event.trigger(myMarker, 'click');
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <body id="map-canvas">

<?php
session_start();
require_once("datos.php");
$con = mysqli_connect($host, $user, $pass, $db_name) or die('Error con la conexion de la base de datos');

if (isset($_POST['categoria']) && !empty($_POST['categoria'])) {
  $ct = $_POST['categoria'];
    $query = "select * from marcador where categoria = $ct";
    $result = mysqli_query($con, $query);   
    $rows = $result->num_rows;
    if($rows == 0){
        $_SESSION['busqVac'] = "No se ha encontrado ningun marcador con esta categoria";
        header("Location: usuario.php");
    }
    
} else {
    $_SESSION['busqError'] = "Selecciona una categoria por favor";
    header("Location: usuario.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mapa Mptril</title>
  <meta name="viewport" content="initial-scale=1.0">
  <meta charset="utf-8">
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
</head>
<body>
  <h1>Mis mapas</h1>
  <div id="map"></div>
  <?php 

      $query = "select * from marcador where categoria = $ct";
      $result = mysqli_query($con, $query);   
      $i = 1;
      $rows = $result->num_rows;
      $resultado = "";
      while($row = mysqli_fetch_array($result)){
        extract($row);
        if($i == $rows) {
           $resultado .= $nombre."|".$descripcion."|".$coordenadas;
        } else {
           $resultado .= $nombre."|".$descripcion."|".$coordenadas."/";
        }
        $i++;
      }
      mysqli_close($con);

   ?>
  <script>
      function initMap() {
       
        var divMapa = document.getElementById('map');
        var resultado = "<?php echo $resultado; ?>";
        var markers = [];
        var infowindowActivo = false;
        var myLatLng = {
            lat: 40.417079,
            lng: -3.703892
        };
        var map = new google.maps.Map(divMapa,{
          zoom: 13,
          center: myLatLng
        });
        resultado = resultado.split("/");

        for (var i = 0; i < resultado.length; i++) {
          resultado[i] = resultado[i].split('|');

          var latlong = resultado[i][2].split(',');
          myLatLng = {
              lat: Number(latlong[0]),
              lng: Number(latlong[1])
          };

          markers[i] = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: resultado[i][0]
          });

          var contentString = '<h1 id="firstHeading" class="firstHeading">' +
              resultado[i][0] + '</h1>'+ '<div id="bodyContent">'+
              '<p><b>' + resultado[i][0] + '</b></p><p>' + resultado[i][1] +
              '</p></div>';

          markers[i].infoWindow = new google.maps.InfoWindow({
            content: contentString
          });

          google.maps.event.addListener(markers[i], 'click', function(){     
            if(infowindowActivo){
              infowindowActivo.close();
            }                 
            infowindowActivo = this.infoWindow;
            infowindowActivo.open(map, this);
          });

        }
      }
  </script>
  <a href="usuario.php">Volver</a>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUcMXEkbv5a0aV1dqPRd4onZpmRgZbbx0&callback=initMap"></script>
</body>
</html>
?>