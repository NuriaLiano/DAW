addEventListener('load', inicio, false);

function inicio(){
    
    
    var btn = this.document.querySelector("#btn");
    btn.addEventListener("click", formulario, false);
}

function formulario (){
    let email=document.querySelector("#envioEmail").value;
    let contra1=document.querySelector("#envioContra1").value;
    let contra2=document.querySelector("#envioContra2").value;
    alert(email);
    var xhr;
    xhr = new XMLHttpRequest();
    
    
    let ruta="fichero.html";
    let envio1="envioEmail="+email;
    let envio2="envioContra1="+contra1;
    let envio3="envioContra2="+contra2;

    let url=ruta+"?"+envio1+"&"+envio2+"&"+envio3;

    xhr.open ("GET", url, true);
    xhr.send (null);

    xhr.onreadystatechange = muestracontenido;
    

    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
               document.querySelector("#contenedor").innerHTML = xhr.responseXML; 
            }else{
                //document.getElementById('contenedor').value="Codigo de error " + xhr.status;
            }
        }  
    }
}