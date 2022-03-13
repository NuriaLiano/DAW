
addEventListener('load', function(){
    var btn = this.document.querySelector("#btn");
    btn.addEventListener("click", envioform, false);
}, false);

function envioform(){

    var seleccionado = document.getElementById("select").value;
    alert(seleccionado);

    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP"); 
    }
    xhr.open ('GET', ''+ seleccionado+'.txt',true);
    xhr.send (null);

    xhr.onreadystatechange = muestracontenido;

    
    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
                document.getElementById('dyn').value="Recibido:" + xhr.responseText; 
            }else{
                document.getElementById('dyn').value="Codigo de error " + xhr.status;
            }
        }  
    }
}
