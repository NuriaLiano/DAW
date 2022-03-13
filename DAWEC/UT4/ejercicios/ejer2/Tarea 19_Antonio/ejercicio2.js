// Declaramos los dos array como variables globales
var ejemplo1 = [];
var ejemplo2 = [];

// Función reiniciar
function reiniciar() {
    window.location.href = 'ejercicio1.html';
    location.reload();
}

// Manejador de eventos de la carga de la página
addEventListener("load", function () {
    var btn_ejemplo1 = document.getElementById("ejemplo1");
    var btn_ejemplo2 = document.getElementById("ejemplo2");
    var btn_concatenar = document.getElementById("concatenar");
    var btn_reiniciar = this.document.getElementById("reiniciar");

    // Manejador de eventos del botón ejemplo 1
    btn_ejemplo1.addEventListener("click", function() {
        let txt_numeros1 = document.getElementById("numeros1").value;
        ejemplo1 = txt_numeros1.split(",").map(Number);
    }, false);

    // Manejador de eventos del botón ejemplo 2
    btn_ejemplo2.addEventListener("click", function() {
        let longitud_numeros1 = ejemplo1.length;
        
        for (let contador = 0; contador < ejemplo1.length; contador++) {
            ejemplo1[contador] = parseInt(Math.random()*100);
        }
    }, false);

    // Manejador de eventos del botón concatenar
    btn_concatenar.addEventListener("click", function() {

    }, false);

    // Manejador de eventos del botón reiniciar
    btn_reiniciar.addEventListener("click", function() {
        reiniciar();
    }, false);
}, false);