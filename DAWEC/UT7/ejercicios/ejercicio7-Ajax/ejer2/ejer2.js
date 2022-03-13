addEventListener('load', inicio, false);

function inicio(){
    
    
    var btn = this.document.querySelector("#btn");
    btn.addEventListener("click", formulario, false);
}

function formulario (){
    let nombre=document.querySelector("#nombre").value;
    let edad=document.querySelector("#edad").value;
    let dni=document.querySelector("#dni").value;
    let sexo=document.querySelector("#sexo").value;
    let peso=document.querySelector("#peso").value;
    let altura=document.querySelector("#altura").value;
    //alert(email);
    var xhr;
    xhr = new XMLHttpRequest();
    
    
    
    //form data
    var datos = new FormData();
    //variable valor
    datos.append('nombre', nombre);
    datos.append('edad', edad);
    datos.append('dni', dni);
    datos.append('sexo', sexo);
    datos.append('peso', peso);
    datos.append('altura', altura);

    
    //fichero que valida
    let url="pagina1.php";

    xhr.open ("POST", url, true);
    xhr.send (datos);

    xhr.onreadystatechange = muestracontenido;
    

    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
               document.querySelector("#contenedor").value = "creado con exito";
            }else{
                document.querySelector('#contenedor').innerHTML="Codigo de error " + xhr.status;
            }
        }  
    }
}
