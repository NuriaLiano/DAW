addEventListener('load', inicio, false);


function inicio (){
    let boton=document.getElementById("boton");
    let alumnos= [];
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
    let numMaterias=document.getElementsByName("materias")
    let alumno1=new Alumno(nombre.value, curso.value, numMaterias.value);
    guardandoAlumnos.push(alumno1);
    

    for (let i = 0; i < numMaterias.length; i++) {
        if(numMaterias[i].checked){
            contador++
        }
    }
    alumno = new Alumno(nombreAlumnop.value, curso.value, parseInt(contador));
    arrayAlumnos.push(alumno);


}
function mostrarAlumnos(alumnos){
    for (let index = 0; index < arrayAlumnos.length; index++) {
        resultadoMostrar.innerHTML += arrayAlumnos[index].visualizar() + "\n"
        
    }
    //areaMostrar.value=areaMostrar.value+alumnos.visualizando();
}