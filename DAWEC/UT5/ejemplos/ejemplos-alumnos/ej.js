addEventListener("load", inicio, false);

function inicio(){
    let boton=document.getElementById("boton");
    let alumnos=new Array;
    var areaMostrar=document.getElementById("areaMostrar");
    boton.addEventListener("click", function(){
        alumnos=añadiendo(alumnos);
    }, false);
    let boton2=document.getElementById("boton2");
    boton2.addEventListener("click", function(){
        areaMostrar.value="";
        for(let i=0; i<alumnos.length; i++) {
            mostrarAlumnos(alumnos[i]);
        }
    }, false);
}

function añadiendo(guardandoAlumnos){
    let nombre=document.getElementById("nombre");
    let curso=document.getElementById("curso")
    let numMaterias=document.getElementById("materias");
    let alumno1=new Alumno(nombre.value, curso.value, numMaterias.value);
    guardandoAlumnos.push(alumno1);
    return guardandoAlumnos;
}
function mostrarAlumnos(alumnos){
    areaMostrar.value=areaMostrar.value+alumnos.visualizar();
}
