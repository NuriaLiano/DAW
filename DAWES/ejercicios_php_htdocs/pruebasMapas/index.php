<?php

    $url_servicio = "http://veterinario.laravel/rest";
    $curl = curl_init($url_servicio);

    //establecer http que usamos para la peticion
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta_curl = curl_exec($curl);
    curl_close($curl);

    $respuesta_decodificada = json_decode($respuesta_curl);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBppUeFiZp6QUnGok9TvjHKXqHRLGGOt8A&callback=initMap">
        </script>
        <title>Api Nuria</title>
    </head>
    <body>
        
    </body>
    </html>
