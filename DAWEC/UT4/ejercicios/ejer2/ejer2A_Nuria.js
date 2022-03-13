addEventListener('load', inicio, false);

//crear array vacio para incluir los numeros
var arrayNumeros = new Array ();
var suma, recogerNumeros, botonCargarEjemplo, botonCalcular;

function inicio(){
    //recibe los numeros a introducir en el array
    recogerNumeros = document.getElementById("añadirNumeros");
    //boton Cargar ejemplo
    botonCargarEjemplo = document.getElementById("cargarEjemplo");
    botonCargarEjemplo.addEventListener('click', cargarArray, false);

    //boton Calcular
    botonCalcular = document.getElementById("calcular");
    botonCalcular.addEventListener('click', function () {
        let resultado = document.getElementById("resultado");
        resultado.innerHTML = `<p>La suma es: ${calculos(arrayNumeros)['suma']}</p>`;
        resultado.innerHTML += `<p>La media es: ${calculos(arrayNumeros)['media']}</p>`;
        resultado.innerHTML += `<p>El mayor es: ${calculos(arrayNumeros)['mayor']}</p>`;
        resultado.innerHTML += `<p>El menor es: ${calculos(arrayNumeros)['menor']}</p>`;
    }, false);

    //boton Reiniciar
    botonReiniciar = document.getElementById("reiniciar");
    botonReiniciar.addEventListener('click', function () {
        reiniciar();
    })

}

function cargarArray() {    
    //añadir nuevos elementos a los arrays ARRAY PUSH
    let num = document.getElementById("añadirNumeros").value;
    arrayNumeros = num.split(",").map(Number);

    return arrayNumeros;
}

function calculos(numeros) {
    let temp = [];
    temp['suma'] = numeros.reduce(function(a, b){return a + b});
    temp['media'] = temp['suma'] / arrayNumeros.length;

    //extraer el mayor y el menor
    temp.sort((a, b) => a -b);
    t = arrayNumeros.slice();
    temp['menor'] = t.shift();
    temp['mayor'] = t.pop();

    return temp;
}

// Función reiniciar
function reiniciar() {
    window.location.href = 'ejer2A_Nuria.html';
    location.reload();
}