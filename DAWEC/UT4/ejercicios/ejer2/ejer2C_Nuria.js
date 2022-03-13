addEventListener('load', inicio, false);

//variables globales
//arrays
var arrayA = [];
var arrayB = [];
var arrayConcat = [];
var seleccionA, seleccionB, sel;

function inicio() {
    
    //botones
    botonEjemplo1 = document.getElementById("ejemplo1");
    botonEjemplo2 = document.getElementById("ejemplo2");
    botonConcatenar = document.getElementById("concatenar");
    botonReiniciar = document.getElementById("reiniciar");

    //accion para los botones
    botonEjemplo1.addEventListener('click', function(){
        cargarArray();
    }, false);
    botonEjemplo2.addEventListener('click', function(){
        random();
    }, false)
    botonConcatenar.addEventListener('click', function(){
        concatenar();
    }, false);
    botonReiniciar.addEventListener('click', function(){
        reiniciar();
    }, false);

}

function cargarArray(sel) {

    //recoger contenido del select
    seleccionA = document.getElementById("selectA");
    seleccionB = document.getElementById("selectB");

    //recoger valor del option 
    sel = seleccionA.options[seleccionA.selectedIndex].text;
    //alert(sel);

    //definir valor 
    //alert(sel);
    arrayA[sel];

    //recoger valores del select
    var codA = document.getElementById("valoresA").value;
    //alert(codA);

    //crear arrays con los valores del select
    arrayA = [codA];

    if (arrayA.length <= sel  ) {
        //cargar array
        let num = document.getElementById("valoresA").value;
        arrayA = num.split(",").map(Number);
        alert(arrayA);

    }else{
        alert("error el array es incorrecto");
    }
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
    window.location.href = 'ejer2C_Nuria.html';
    location.reload();
}