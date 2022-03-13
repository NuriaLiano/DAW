function ajax(url, datos) {

    $.ajax({
        type: "POST",
        url: url,
        contentType: "json",
        dataType: "json",
        
        //listado de donde sale y que es
        success: function(listado) {


            let html1 = "";
            //la variable html1 es donde esta todo el codigo html de la tabla que lo introducimos como texto normal
            if (listado.length === 0) {
                html1 = "<h1>No hay resultados de la bústqueda.</h1>";
            } else {
                html1 = "<h1>Resultado</h1>" +
                    "<table class='resultados' align='center'>" +
                    "<tr><td>Nombre</td><td>Procedencia</td><td>Altura</td><td>Peso</td><td>Poscion</td><td>Nombre Equipo</td></tr>";
                let i;
                

                for (i = 0; i < listado.length; i++) {
                    let jugadores = listado[i];
                    html1 += "<tr>";
                    html1 += "<td>" + jugadores.nombre + "</td>";
                    html1 += "<td>" + jugadores.procedencia + "</td>";
                    html1 += "<td>" + jugadores.altura + "</td>";
                    html1 += "<td>" + jugadores.peso + "</td>";
                    html1 += "<td>" + jugadores.posicion + "</td>";
                    html1 += "<td>" + jugadores.nombre_equipo + "</td>";
                    html1 += "</tr>";
                }
                html1 += "</table>";
            }
            //recoge etqieuta div para imprimir
            let contenedor = $("#cont_jugadores");
            //añade el contenido a la variable
            contenedor.html(html1);
        },
        data: JSON.stringify(datos)
            //convierte un objeto o valor de JavaScript en una cadena JSON, reemplazando opcionalmente valores si se especifica una función de reemplazo
    }, );

}


function mostrarJugadores() {
    //recoge lo introducido por el input
    let criterio = $("#criterio").val();
    //llama a la funcion creada anteriormente y le pasa la url de listar.php y el contenido de la variable datos
    ajax("api/listar.php", { "criterio": criterio });
}