addEventListener('load', inicio, false);

//crear arrays

var arrayConcat = new Array();
var arrayA = new Array();
var arrayB = new Array();
var botonEjemplo1, botonEjemplo2, botonConcatenar, botonReiniciar;

function inicio() {
    
    botonEjemplo1 = document.getElementById("ejemplo1");
    botonEjemplo1.addEventListener('click',cargarArray, false);

    botonEjemplo2 = document.getElementById("ejemplo2");
    botonEjemplo2.addEventListener('click',function () {
        random();
    }, false);

    botonConcatenar = document.getElementById("concatenar");
    botonConcatenar.addEventListener('click', function () {
        concatenar();
    }, false);

    botonReiniciar = document.getElementById("reiniciar");
    botonReiniciar.addEventListener('click', function () {
        reiniciar();
    }, false);
}

function cargarArray() {
    //recoger valores del select
    var codA = document.getElementById("valoresA").value;
    //alert(codA);

    //crear arrays con los valores del select
    arrayA = [codA];
    
    //cargar array
    let num = document.getElementById("valoresA").value;
    arrayA = num.split(",").map(Number);
    //alert(arrayA);
    return arrayA;
}
function random() {
    for (let i = 0; i < arrayA.length; i++) {
        let num = parseInt(Math.random()*100);
        arrayB.push(num);
        
    }
    //alert(arrayB);
    valoresB.innerHTML = arrayB;

    return arrayB;
}

function concatenar() {
    arrayConcat = arrayA.concat(arrayB);
    resultado.innerHTML = arrayConcat;
}
function reiniciar() {
    window.location.href = 'ejer2B_Nuria.html';
    location.reload();
}