
addEventListener('load', inicio, false);

var alumnos = [
    ["Ernesto", 10, 2, 6],
    ["Luisa", 1, 4, 6],
    ["Javier", 9, 6, 6],
    ["Maria", 3, 2, 6],
    ["Julian", 9, 2, 9],
    ["Natividad", 3, 5, 8],
    ["Lorena", 9, 1, 1],
    ["Carolina", 7, 7, 6]];

var resultado;
var nombreYnotas;
var mediaAlumnos;
var mediaEval;
var nombreIntro;
var verNombreIntro;
var mayorMenorNota;
var suspensos;

function inicio() {

    nombreYnotas = document.getElementById("nombreNotas");
    mediaAlumnos = document.getElementById("mediaAlumno");
    mediaEval = document.getElementById("mediaEvaluacion");
    resultado = document.getElementById("res");
    nombreIntro = document.getElementById("introduceNombre");
    verNombreIntro = document.getElementById("verNombreIntroducido");
    mayorMenorNota = document.getElementById("mayorMenorNota");
    suspensos = document.getElementById("suspensos");

    nombreYnotas.addEventListener('click', listaAlumnos, false);

    mediaAlumnos.addEventListener('click', function () {


        let lista = mediasAlumnos();
        let texto = "";

        for (let i = 0; i < lista.length; i++) {

            texto += "La media de " + alumnos[i][0] + " es " + lista[i] + "\n";

        }

        resultado.value = texto;

    }, false);

    mediaEval.addEventListener('click', function () {


        let lista = mediasEval();
        let texto = "";
       
        for(let i=0;i<lista.length;i++){

            texto+="La media de la "+(i+1)+" evaluación es "+lista[i]+"\n";
        }

        resultado.value = texto;

    }, false);


    verNombreIntro.addEventListener('click', nombreYmedia, false);

    mayorMenorNota.addEventListener('click', mayorYmenorNota, false);

    suspensos.addEventListener('click', function () {

        let lista = eliminarSuspensos();
        let texto = "";

        for (let i = 0; i < lista.length; i++) {

            texto += "Los suspensos son " + lista[i] + "\n";
        }

        resultado.value = texto;

    }, false);

}

function listaAlumnos(){

    let texto = "Listado de alumnos\n";

    for (let i = 0; i < alumnos.length; i++) {

        texto+="Nombre de alumno: "+alumnos[i][0]+" ";

        for (let j = 1; j < alumnos[i].length; j++) {

            texto+= " Nota "+[j]+"->"+alumnos[i][j];

        }
        texto+="\n";
    }
    resultado.value =texto;

}

function mediasAlumnos() {

    let medias = [];
    let suma = 0;
    let media = 0;

    for (let i = 0; i < alumnos.length; i++) {

        suma = 0;

        for (let j = 1; j < alumnos[i].length; j++) {

            suma = suma + alumnos[i][j];

        }

        media = suma / 3;
        medias.push(media.toFixed(2));
    }

    return medias;
}

function mediasEval() {

    let mediasEval = [];

    /*let suma1 = 0;
    let media1 = 0;
    let suma2 = 0;
    let media2 = 0;
    let suma3 = 0;
    let media3 = 0;


    for (let i = 0; i < alumnos.length; i++) {

        suma1 += alumnos[i][1];
        suma2 += alumnos[i][2];
        suma3 += alumnos[i][3];
    }

    media1 = suma1 / alumnos.length;
    media2 = suma2 / alumnos.length;
    media3 = suma3 / alumnos.length;
    mediasEval.push(media1.toFixed(2));
    mediasEval.push(media2.toFixed(2));
    mediasEval.push(media3.toFixed(2));*/

    let suma = 0;
    let media = 0;

    for (let i = 1; i < 4; i++) {

        suma = 0;

        for (let j = 0; j < alumnos.length; j++) {

            suma = suma + alumnos[j][i];
        }

        media = suma / alumnos.length;
        mediasEval.push(media.toFixed(2));
    }

    return mediasEval;

}

function nombreYmedia() {

    let alumnoBuscar = nombreIntro.value;
    let lista = mediasAlumnos();
    let texto = "";

    for (let i = 0; i < lista.length; i++) {

        if (alumnos[i][0] == alumnoBuscar) {

            texto += "La media de " + alumnos[i][0] + " es " + lista[i] + "\n";
        }
    }
    resultado.value = texto;

}

function mayorYmenorNota() {

    let lista = mediasAlumnos();

    let ordenadas = lista.sort();

    let notaAlta = ordenadas.pop();

    let notaBaja = ordenadas.shift();

    resultado.value = "La nota mas alta es: " + notaAlta + "\n La nota mas baja es: " + notaBaja;
}

function borrar(nombre,arr){

    for(let i=0;i<arr.length;i++){

        if(arr[i][0]==nombre){

            arr.splice(i,1);
        }
    }
}


function eliminarSuspensos() {

    let listaSuspensos = [];
    let lista = mediasAlumnos();


    for (let i = 0; i < lista.length; i++) {

        if (lista[i] < 5) {

            var nombre = alumnos[i][0];
            listaSuspensos.push(nombre);

            //NO FUNCIONA
            //borrar(nombre,alumnos);
        }   

    }
    return listaSuspensos;
}













