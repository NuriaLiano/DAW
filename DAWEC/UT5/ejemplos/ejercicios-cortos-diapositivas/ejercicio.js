addEventListener('load', inicio, false);
var s = 0;

function inicio() {

    document.write(sumar(5, 3));
    document.write("<br/>");
    document.write(sumar(1, 2, 3, 4, "m", 5));
    document.write("<br/>");
    document.write(sumar(100, 200, 300));

    document.write("<br/>");
    separar("=", "perro", "gato", "lechuza");
    document.write("<br/>");
    separar("/", "15-08-15", "16-09-15", "28-12-15", "31-12-15");
    document.write("<br/>");
    separar("-----", "Maria", "Luis", "Juan", "Valeria", "Carlos", "Jesus");
}

function sumar() {
    for (let i = 0; i < arguments.length; i++) {
        if (!isNaN(arguments[i])) {
            s = s + arguments[i];
        }
    }
    return s;
}

function separar() {
    let arrarSeparado = new Array();

    for (let i = 1; i < arguments.length; i++) {
        arrarSeparado.push(arguments[i]);
    }
    document.write(arrarSeparado.join(arguments[0]));
}