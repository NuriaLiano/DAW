addEventListener('load', inicio, false);

//crear array bidimensional
var alumnos = [];


function inicio (){
    
    //text area para imprimir los resultados
    resultado = document.getElementById("resultado");

    Carga();
    visual();
    //RECORRER EL ARRAY
    /*for (let i = 0; i < alumnos.length; i++) {
        document.write("<br>");
        for (let j = 0; j < alumnos[i].length; j++) {
            document.write(alumnos[i][j]);
        }
        
        
    }*/

}

function Carga(){
    alumnos = new Array(3); // 3 filas x 4 columnas

    //var aleatorio = Math.floor(Math.random()*(6-3)+3);
    for (let a = 0; a < alumnos.length; a++) {
        for (let aa = 0; aa < alumnos.length; aa++) {
            alumnos[a]= new Array(4); 
        }
    }

    //rellena el arrayA
    for (let b = 0; b < alumnos.length; b++) {
        for (let bb = 0; bb < alumnos[b].length; bb++) {
            alumnos[b][bb] = Math.floor(Math.random()*(20-1)+1);
            
        }
        
    }

}

function visual(){
    var visual;
    //visualizaA
    //document.write("Ingles Aleman Frances Ruso <br/>");
    for (let i = 0; i < alumnos.length; i++) { //i es filas
        
        for (let j = 0; j < alumnos[i].length; j++) { //j es columnas
            
            visual += alumnos[i][j] + " ";
            //document.write("  ");
            
        }
        //document.write("<br/>");
        resultado.value= /*"Inglés Francés Alemán Ruso "+ "<br>" +*/ visual;
    }
    //document.write("<br/>");

}

