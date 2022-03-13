addEventListener('load', inicio, false);


//crear array bidimensional
var alumnos = new Array();
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
    mediaAlu = document.getElementById("mediaAlu");

    //text area para imprimir los resultados
    resultado = document.getElementById("resultado");

    //Eventos para los botones
    nombreNotas.addEventListener('click', verAlumnos, false);
    mediaAlu.addEventListener('click', mediaAlumno, false);
    
    mediaEvalu = document.getElementById("mediaEval");
    mediaEvalu.addEventListener('click', mediaEval, false);
}

function verAlumnos() {
    //document.write(alumnos + "<br/>"); ES OTRA FORMA DE IMPRIMIR EL ARRAY SOLO QUE SALE TODO EN LA MISMA LINEA Y CONCOMAS
    for (let i = 0; i < alumnos.length; i++) {
        document.write("<br/>");
        for (let j = 0; j < alumnos[i].length; j++) {
            document.write(alumnos[i][j] + " ");
            //resulado.value = 
        }
    }
}
function mediaAlumno() {
    var media = 0, suma = 0;
    var medias = [];
    let res = "";

    for (let i = 0; i < alumnos.length; i++) {
        for (let j = 1; j < alumnos[i].length; j++) {
            //document.write(alumnos[i][j] + " ");
            suma += alumnos[i][j];
            //resulado.value = 
        }
        media = suma /(alumnos.length);
        medias.push(media.toFixed(1));
        suma = 0;
        res += "La media de " + alumnos[i][0] + " es " + medias[i] + "\n";
        
    }
    resultado.value = res;
}

function mediaEval() {
    
    for (let i = 0; i < alumnos[i].length; i++) {
        for (let j = 1; j < alumnos[j].length; j++) {
            document.write(alumnos[i][j] + " ");
            //suma += alumnos[j][i];
            
        }
    }
        
}