addEventListener('load', inicio, false);

function inicio(){
    
    
    var btn = this.document.querySelector("#btn");
    btn.addEventListener("click", formulario, false);
}

function formulario (){
    let email=document.querySelector("#nombre").value;
    let contra1=document.querySelector("#comentarios").value;
    //alert(email);
    var xhr;
    xhr = new XMLHttpRequest();
    
    
    
    //form data
    var datos = new FormData();
    //variable valor
    datos.append('nombre', email);
    datos.append('comentarios', contra1);

    
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