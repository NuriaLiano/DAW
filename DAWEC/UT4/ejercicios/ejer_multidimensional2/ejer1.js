addEventListener('load', inicio, false);

//arraysA y B
var arrayA = [];
var arrayB = [];

var aleatorio = 0;



function inicio() {
    let btn_visualizar = document.getElementById("visualizar");
    btn_visualizar.addEventListener('click', function(){
        crearArrayA();
        crearArrayB();
        visualizarArrays();
        sumarArrays();
        restarArrays();
    }, false);
}

function crearArrayA(){
    //numero aleatorio para longitud de arrays
    aleatorio = Math.floor(Math.random()*(6-3)+3);

    //numero aleatorio para rellenar de arrays
    aleatorio2 = Math.floor(Math.random()*(10-1)+1);

    //alert(aleatorio);
    
    //crear el array
    arrayA = new Array(aleatorio);

    for (let a = 0; a < arrayA.length; a++) {
        for (let aa = 0; aa < arrayA.length; aa++) {
            arrayA[a]= new Array(aleatorio2); //al poner aleatorio 2 el array no es cuadrado, el numero de filas y columnas no son el mismo
            //aleatorio representa las filas
            //aleatorio2 representa las columnas

            //para que fuse cuadrado 
            //arrayA[a]= new Array(aleatorio);
            
        }
    }

    //rellena el arrayA
    for (let b = 0; b < arrayA.length; b++) {
        for (let bb = 0; bb < arrayA[b].length; bb++) {
            arrayA[b][bb] = Math.floor(Math.random()*(10-1)+1);
            
        }
        
    }
    return arrayA;

}
function crearArrayB(){
     //numero aleatorio para longitud de arrays
     aleatorio = Math.floor(Math.random()*(6-3)+3);

     //numero aleatorio para rellenar de arrays
     aleatorio2 = Math.floor(Math.random()*(10-1)+1);

     //crear el array
     arrayB = new Array(aleatorio);
 
     for (let b = 0; b < arrayB.length; b++) {
         for (let bb = 0; bb < arrayB.length; bb++) {
             arrayB[b]= new Array(aleatorio2); 
         }
    }

    //rellena el arrayA
    for (let a = 0; a < arrayB.length; a++) {
        for (let aa = 0; aa < arrayB[a].length; aa++) {
            arrayB[a][aa] = Math.floor(Math.random()*(10-1)+1);
        }    
    }
    
    return arrayB;
}

function visualizarArrays(){
    //visualizaA
    for (let i = 0; i < arrayA.length; i++) { //i es filas
        for (let j = 0; j < arrayA[i].length; j++) { //j es columnas
            document.write(arrayA[i][j]);
            document.write("  ");
            
        }
        document.write("<br/>");
        
    }
    document.write("<br/>");

    //visualizaB
    for (let h = 0; h < arrayB.length; h++) { //i es filas
        for (let k = 0; k < arrayB[h].length; k++) { //j es columnas
            document.write(arrayB[h][k]);
            document.write("  ");
            
        }
        document.write("<br/>");
        
    }
}

function sumarArrays(){
    //crear array para sumar
    var arraySumar = [];

    for (let a = 0; a < arrayA.length; a++) {
        arraySumar[a] = [];
        for (let aa = 0; aa < arrayA.length; aa++) {
            arraySumar[a][aa] = arrayA[a][aa] + arrayB[a][aa];
            
        }
        document.write("<br/>");
    }
    document.write(arraySumar);


}

function restarArrays(){
    //crear array para sumar
    var arrayRestar = [];

    for (let a = 0; a < arrayA.length; a++) {
        arrayRestar[a] = [];
        for (let aa = 0; aa < arrayA.length; aa++) {
            arrayRestar[a][aa] = arrayA[a][aa] - arrayB[a][aa];
            
        }
        document.write("<br/>");
    }
    document.write(arrayRestar);


}
