addEventListener('load', inicio, false);
var cuadrado;

function inicio() {

    cuadrado = document.querySelector("div");

    cuadrado.addEventListener('click', function() {
        document.body.style.cursor = 'move';
        document.addEventListener('mousemove', mover, false);
    }, false);

    cuadrado.addEventListener('dblclick', function() {
        document.body.style.cursor = 'auto';
        document.removeEventListener('mousemove', mover, false);
    }, false);
}

function mover(e) {
    let x = e.clientX - 25;
    let y = e.clientY - 25;

    cuadrado.style.top = y + "px";
    cuadrado.style.left = x + "px";
}

