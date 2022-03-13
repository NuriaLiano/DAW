
addEventListener('load', inicio, false);
var nombreAlumno;
var nota1,nota2,nota3;
var botonResultadoFinal;
var notaMedia;
var aptoNoApto;
var botonContinuar,botonSalir;
var contadorAlumnos=0;

function inicio() {
    nombreAlumno = document.getElementById("nombre");
    nota1 = document.getElementById("nota1Alumno");
    nota2 = document.getElementById("nota2Alumno");
    nota3 = document.getElementById("nota3Alumno");
    botonResultadoFinal = document.getElementById("btnResultadoFinal");
    notaMedia = document.getElementById("notaMedia");
    aptoNoApto = document.getElementById("AptoOnoApto");
    botonContinuar = document.getElementById("btnContinuar");
    botonSalir = document.getElementById("btnSalir");

    botonResultadoFinal.addEventListener('click', final, false);
    botonSalir.addEventListener('click', salir, false);
}



function calcularMedia(nombre,not1,not2,not3){

    contadorAlumnos++;

    let n1= parseFloat(not1.value);
    let n2= parseFloat(not2.value);
    let n3= parseFloat(not3.value);

    var media= (n1+n2+n3)/3;

    if(media<5){

        return [media.toFixed(2),"No apto"];
    }else{

        return [media.toFixed(2),"Apto"];
    } 
}

function final(){

    let [med,apt]=calcularMedia(nombre,nota1,nota2,nota3);

    notaMedia.value=med;
    aptoNoApto.value=apt;
}


function salir(){

    alert("El número total de alumnos evaluados es "+contadorAlumnos);
    contadorAlumnos=0;
}



