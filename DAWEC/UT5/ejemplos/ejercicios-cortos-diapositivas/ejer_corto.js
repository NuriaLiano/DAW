addEventListener('load', inicio, false);
var minus = new Array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");
var texto;

function inicio() {
    var boton = document.getElementById("boton");
    boton.addEventListener('click', extraerArray, false);
    var botonContar = document.getElementById("contar");
    botonContar.addEventListener('click', contarElemento, false);
}

function extraerArray() {
    for (let i = 0; i < minus.length; i++) {
        var primeraLetra = minus[i].charAt(0).toUpperCase();
        var ultimaLetra = minus[i].charAt(minus[i].length - 1).toUpperCase();
        document.write(",");
        var resto = minus[i].slice(1, -1);
        var mayus = (primeraLetra.concat(resto).concat(ultimaLetra));
        document.write(mayus);
    }
}

function contarElemento() {
    //Obtenemos el texto del campo
    var texto = document.getElementById("area").value;
    //Reemplazamos los saltos de linea por espacios
    texto = texto.replace(/\r?\n/g, " ");
    //Reemplazamos los espacios seguidos por uno solo
    texto = texto.replace(/[ ]+/g, " ");
    //Quitarmos los espacios del principio y del final
    texto = texto.replace(/^ /, "");
    texto = texto.replace(/ $/, "");
    //Troceamos el texto por los espacios
    var textoTroceado = texto.split(" ");
    //Contamos todos los trozos de cadenas que existen
    var numeroPalabras = textoTroceado.length;
    //Mostramos el número de palabras
    document.write("tiene " + numeroPalabras + " palabras");
}

function añadirPunto() {
    var texto = document.getElementById("area").value;
    let termino = "Espronceda";
    let posicion = texto.indexOf(termino);
}