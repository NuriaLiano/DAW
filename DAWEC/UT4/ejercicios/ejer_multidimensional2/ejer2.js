addEventListener('load', inicio, false);

var alumnos;

function inicio() {
    
    //generar numero de alumnos para realizar la encuesta
    alumnos = Math.floor(Math.random()*(50-0)+0);
    
    encuestados = crearEncuesta(alumnos);

    alumno();
    crearEncuesta(alumnos);
    verEncuesta();
    hombres_universidad();
    mujeres_universidad();
    hombres_sueldoPromedio()

}


function alumno() {
    let alumnoArray = [];

    let cedula = Math.floor(Math.random()*(99999-11111)+11111);
    let sexo = Math.floor(Math.random()*(2-0)+1); //se pone 1 al final por que si no el rango no está bien, es entre 2 y 1
    let trabaja = Math.floor(Math.random()*(2-0)+1);
    let sueldo = 0;
    if (trabaja == 1) {
        sueldo = Math.floor(Math.random()*(3000-300)+300);
    }
    
    alumnoArray.push(cedula, sexo, trabaja, sueldo);
    //document.write(alumnoArray);
    return alumnoArray; //esto es un array normal

}

function crearEncuesta(alumnos) {
    //saber cuantas encuentas genera
    let encuestaArray = [];

    for (let i = 0; i < alumnos; i++) {
        encuestaArray.push(alumno());  //encuestaArray se convierte en un array bidimensional
    }

    //document.write(encuestaArray);
    return encuestaArray;

}

function verEncuesta() {
    let texto = "";

    for (let i = 0; i < encuestados.length; i++) {
        texto += `<p>La cedula es: ${encuestados[i][0]}</p>`; //saca todas las filas de la primera columna /cedula/

        if (encuestados[i][1] == 1) { //saca todas las filas de la segunda columna /sexo/
            texto += `<p>es hombre</p>`;
        }else{
            texto += `<p>es mujer</p>`;
        }

        if (encuestados[i][2] == 1) { //saca todas las filas de la segunda columa /trabaja/
            texto += `<p>trabaja y cobra ${encuestados[i][3]} </p>`; // si trabaaja saca la ultima columna/sueldo/
        }else{
            texto += `<p>No trabaja</p>`;
        }
        
    }
    document.write(texto);
}

function hombres_universidad() {
    //se calcula con la fila 2 del array /sexo/
    let hombres=0;
    for (let i = 0; i < encuestados.length; i++) {
        if (encuestados[i][1] == 1) {
            hombres++;
        }
    }
    document.write("Los hombres de la universidad son: " + hombres + "<br/>" + "El porcentaje es: " + ((hombres * 100)/encuestados.length).toFixed(2) + "%" +"<br/>" );
}

function mujeres_universidad() {
    //se calcula con la fila 2 del array /sexo/
    let mujeres=0;
    for (let i = 0; i < encuestados.length; i++) {
        if (encuestados[i][1] == 2) {
            mujeres++;
        }
    }
    document.write("Las mujeres de la universidad son: " + mujeres  + "<br/>" +"El porcentaje es: " + ((mujeres * 100)/encuestados.length).toFixed(2) + "%"  +  "<br/>" );

}

function hombres_sueldoPromedio() {
    let hombres_sueldo_promedio = 0;
    let sueldo_promedio = 0;
    let media = 0;
    //se calcula con la fila 2 del array /sexo/
   
    for (let i = 0; i < encuestados.length; i++) {

        if ((encuestados[i][1] == 1)&&(encuestados[i][2] == 1) ) {
            hombres_sueldo_promedio++;
            sueldo_promedio += encuestados[i][3];
            media = sueldo_promedio/hombres_sueldo_promedio;
        }

    }
    document.write("Los hombres con sueldo promedio son: " + hombres_sueldo_promedio  + "<br/>" +"El porcentaje es: " + ((hombres_sueldo_promedio * 100)/hombres_sueldo_promedio).toFixed(2) + "%"  +  "<br/>" 
        + " El sueldo promedio es: " + media+  "<br/>");
}

function mujeres_sueldoPromedio() {
    let mujeres_sueldo_promedio = 0;
    let sueldo_promedio = 0;
    let media = 0;
    //se calcula con la fila 2 del array /sexo/
   
    for (let i = 0; i < encuestados.length; i++) {

        if ((encuestados[i][1] == 1)&&(encuestados[i][2] == 1) ) {
            mujeres_sueldo_promedio++;
            sueldo_promedio += encuestados[i][3];
            media = sueldo_promedio/mujeres_sueldo_promedio;
        }

    }
    document.write("Las mujeres con sueldo promedio son: " + mujeres_sueldo_promedio  + "<br/>" +"El porcentaje es: " + ((mujeres_sueldo_promedio * 100)/mujeres_sueldo_promedio).toFixed(2) + "%"  +  "<br/>" 
        + " El sueldo promedio es: " + media+  "<br/>");
}

