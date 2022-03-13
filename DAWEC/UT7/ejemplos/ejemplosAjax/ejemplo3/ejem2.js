
addEventListener('load', function(){
    
    var enlace1 = document.querySelector("#opcion1");
    enlace1.addEventListener("click", function(){
        var valor = document.querySelector("#opcion1");
        envioform(valor.id);
    }, false);

    var enlace2 = document.querySelector("#opcion2");
    enlace2.addEventListener("click", function(){
        var valor = document.querySelector("#opcion2");
        //alert(valor.id)
        envioform(valor.id);
    }, false);
    
}, false);

function envioform(valor){


    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP"); 
    }
    alert(valor);
    xhr.open ('GET', ''+valor+'.html',true);
    xhr.send (null);

    xhr.onreadystatechange = muestracontenido;
    

    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
                document.getElementById('contenedor').innerHTML= xhr.responseText; 
            }else{
                document.getElementById('contenedor').value="Codigo de error " + xhr.status;
            }
        }  
    }
    
}