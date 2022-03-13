addEventListener('load', inicio, false);


var n;

function inicio() {
    
    botonPruebas = document.getElementById('resultado');
    botonPruebas.addEventListener('click', es_par, false);
}
function es_par() {
    n =parseInt(document.getElementById('num').value);
    
    if (n % 2 == 0) {
        document.write('verdadero');
    } else {
        document.write('falso');
    }
    
}