addEventListener('load', inicio, false);
var cont = 0;

function inicio() {
    var coche = document.querySelector("img");
    document.addEventListener('keypress', mover, false);
}

function mover(e) {
    coche.style.left = (cont += 20) + "px";
    if (coche.style.left == 500 + "px") {
        alert("HAS LLEGAO");
        alert("tecla presionada: " + String.fromCharCode(e.charCode) + "\ncodigo: " + e.charCode);
    }
}