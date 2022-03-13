addEventListener("load", inicio, false);

function inicio() {
    botonPruebas = document.getElementById('pruebas');
    botonPruebas.addEventListener('click', alerta, false);
}


function alerta() {
    alert("ALERTAAAA HAS PULSADO EL BOTON");
}