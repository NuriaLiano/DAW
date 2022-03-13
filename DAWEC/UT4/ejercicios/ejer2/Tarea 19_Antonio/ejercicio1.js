// Variable global que almacena el array
var listaNumeros = [];

// Función calculos
function calculos(valores) {
    let resultado = [];

    resultado['suma'] = valores.reduce(function (a, b) { return a + b });
    resultado['media'] = resultado['suma'] / listaNumeros.length;

    // Para el mayor y el menor
    listaNumeros.sort((a, b) => a - b);
    copia_lista = listaNumeros.slice();
    resultado['menor'] = copia_lista.shift();
    resultado['mayor'] = copia_lista.pop();

    return resultado;
}

// Función reiniciar
function reiniciar() {
    window.location.href = 'ejercicio1.html';
    location.reload();
}

// Manejador de eventos de la carga de la página
addEventListener("load", function () {
    var btn_cargar = this.document.getElementById("cargar");
    var btn_calcular = this.document.getElementById("calcular");
    var btn_reiniciar = this.document.getElementById("reiniciar");

    // Manejador de eventos del botón cargar
    btn_cargar.addEventListener("click", function () {
        let txt_numeros = document.getElementById("numeros").value;
        listaNumeros = txt_numeros.split(",").map(Number);
    }, false);

    // Manejador de eventos del botón calcular
    btn_calcular.addEventListener("click", function () {
        let section_resultado = document.getElementById("resultado");
        section_resultado.innerHTML = `<p>La suma es: ${calculos(listaNumeros)['suma']}</p>`;
        section_resultado.innerHTML += `<p>La media es: ${calculos(listaNumeros)['media']}</p>`;
        section_resultado.innerHTML += `<p>El mayor es: ${calculos(listaNumeros)['mayor']}</p>`;
        section_resultado.innerHTML += `<p>El menor es: ${calculos(listaNumeros)['menor']}</p>`;
    }, false);

    // Manejador de eventos del botón reiniciar
    btn_reiniciar.addEventListener("click", function() {
        reiniciar();
    }, false);
}, false);