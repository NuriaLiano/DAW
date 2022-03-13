addEventListener('load', inicio, false);

//array clasificaciones
var clasificaciones = new Array ('manuel', 'byron', 'adela', 'paula', 'omar', 'oscar');


function inicio() {
    //OSCAR ELIMINADO boton
    boton = document.getElementById('visualizar');
    boton.addEventListener('click', imprimir, false);
}

function paulaAdelanta() {
    //extraer a paula y a adela del array
    clasificaciones.splice(3,1);
    //agregar al array
    clasificaciones.splice(2,0, 'PAULA');

    document.getElementById("paulaAdelanta").innerHTML =  " " + clasificaciones;
}

function oscarEliminado() {
    //eliminar el ultimo elemento del array con POP
    let eliminado = clasificaciones.pop();
    document.getElementById("oscarEliminado").innerHTML = " " + clasificaciones;
}

function nuevosConcursantes() {
    clasificaciones.splice(1, 0, "CRISTINA", "JORGE");
    document.getElementById("nuevosConcursantes").innerHTML =  " " + clasificaciones;
}

function nuevaAlaCabeza() {
    clasificaciones.unshift('MARTA');
    document.getElementById("nuevaAlaCabeza").innerHTML = " " + clasificaciones;
}

function visual(array) {
    //sustituir coma por *
    document.getElementById("original").innerHTML = clasificaciones.join(" * ");
}
function imprimir() {
    visual(clasificaciones);
    paulaAdelanta();
    oscarEliminado();
    nuevosConcursantes();
    nuevaAlaCabeza();
}