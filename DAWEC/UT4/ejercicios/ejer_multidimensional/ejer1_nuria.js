addEventListener('load', inicio, false);

//declaracion del array 2x2
var alumnos = new Array(7);

alumnos[0] = new Array("Ernesto",10,2,6);
alumnos[1] = new Array("Luisa",1,4,6);
alumnos[2] = new Array("Javier",9,6,6);
alumnos[3] = new Array("Maria",3,2,6);
alumnos[4] = new Array("Julián",9,2,9);
alumnos[5] = new Array("Natividad",3,5,8);
alumnos[6] = new Array("Lorena",9,1,1);
alumnos[7] = new Array("Carolina",7,7,6);


function inicio() {

    nombreNotas = document.getElementById("nombreNotas");
    mediaAlumnos = document.getElementById("mediaAlu");
    mediaEval = document.getElementById("mediaEval");
    nombre = document.getElementById("introduceNombre");
    botonUsuario = document.getElementById("boton_usuario");
    botonAltaBaja = document.getElementById("altaBaja");
    suspensos = document.getElementById("suspensos");
    //text area para imprimir los resultados
    resultado = document.getElementById("resultado");

    //Eventos para los botones
    nombreNotas.addEventListener('click', visualizar, false);
    mediaAlumnos.addEventListener('click', media, false);
    mediaEval.addEventListener('click', mediasEvaluacion, false);
    botonUsuario.addEventListener('click', buscarAlumno, false);
    botonAltaBaja.addEventListener('click', altaBaja,false);
    //suspensos.addEventListener('click', , false);

}

function visualizar() {

    var res = "";
    for (let i = 0; i < alumnos.length; i++) {
        res += "Nombre: " + alumnos[i][0]+" ";
        for (let j = 0; j < alumnos[i].length; j++) {
            res += "Notas: "+ [j] + " = " + alumnos[i][j]+" ";
        }
        res+="\n";
    }
    resultado.value =res;
}

function media() {
    var media = 0, suma = 0;
    var medias = [];
    let res = "";

    for (let i = 0; i < alumnos.length; i++) {
        for (let j = 1; j < alumnos[i].length; j++) {
            suma += alumnos[i][j];
        }
        media = suma /(alumnos[i].length -1);
        medias.push(media.toFixed(1));
        suma = 0;
        res += "La media de " + alumnos[i][0] + " es " + medias[i] + "\n";
    }
    //document.write(medias.join(" - "));
    resultado.value = res;
    return medias;
  
}

function mediasEvaluacion() { 
    var medias = [];
    var suma = 0;
    var res = "";

    for (let i = 1; i < alumnos[i].length; i++) {
        for (let j = 0; j < alumnos.length; j++) {
            suma += alumnos[j][i];
        }
        media = suma /(alumnos.length);
        //alert(media);
        medias.push(media.toFixed(1));
        suma = 0;
        res += "La media de la "+(i+1)+" evaluación es "+medias[i]+"\n";
        
    }
    resultado.value = res;
    //document.write(medias.join(" - "));
    return medias;
}

function buscarAlumno (){
    let nombreA = nombre.value; 
    let notas = media();
    let res = "";
    for (let i = 0; i < notas.length; i++) {
        if (alumnos[1][0] == nombreA) {
            res += "La media de " + alumnos[i][0] + " es " + listaAlumnos[i] + "\n";
        }
        
    }
    resultado.value = res;
    //arrayMedias.find(element => element == "");
}    
function altaBaja() {

    let notas = media();
    let listaordenada = notas.sort();
    let notaAlta = listaordenada.pop();
    let notaBaja = listaordenada.shift();

    resultado.value = "La nota mas alta es: " + notaAlta + "\n La nota mas baja es: " + notaBaja;
}

function borrar(nombre,array){
    for(let i=0;i<arr.length;i++){
        if(array[i][0]==nombre){
            array.splice(i,1);
        }
    };
}



function eliminarSuspensos() { // no c onsigo que eleimina
    let suspensos = [];
    let notas = media();
    for (let i = 0; i < notas.length; i++) {
        if (notas[i] < 5) {
            var nombre = alumnos[i][0];
            suspensos.push(nombre);
        }   
    }
    resultado.value = suspensos;
    return suspensos;
}

