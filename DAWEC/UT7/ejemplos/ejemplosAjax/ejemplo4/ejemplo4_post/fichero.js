addEventListener('load', inicio, false);

function inicio(){
    
    
    var btn = this.document.querySelector("#btn");
    btn.addEventListener("click", formulario, false);
}

function formulario (){
    let email=document.querySelector("#envioEmail").value;
    let contra1=document.querySelector("#envioContra1").value;
    let contra2=document.querySelector("#envioContra2").value;
    //alert(email);
    var xhr;
    xhr = new XMLHttpRequest();
    
    
    
    //form data
    var datos = new FormData();
    //variable valor
    datos.append('envioEmail', email);
    datos.append('envioContra1', contra1);
    datos.append('envioContra2', contra2);

    alert(datos);
    //fichero que valida
    let url="fichero.php";

    xhr.open ("POST", url, true);
    xhr.send (datos);

    xhr.onreadystatechange = muestracontenido;
    

    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
               document.querySelector("#contenedor").value = xhr.responseText; 
            }else{
                document.querySelector('#contenedor').innerHTML="Codigo de error " + xhr.status;
            }
        }  
    }
}