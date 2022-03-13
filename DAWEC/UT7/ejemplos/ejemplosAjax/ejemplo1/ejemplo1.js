addEventListener('load', function(){
    var btn = this.document.querySelector("#btn");
    btn.addEventListener("click", envioform, false);
}, false);

function envioform(){
    var xhr;
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP"); 
        }
        
        xhr.open ('GET', 'videoclub.xml',true);
        xhr.send (null);
    
        xhr.onreadystatechange = muestracontenido;
        
    
        function muestracontenido (){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                   let fich = xhr.responseXML; 
                   let arrayTitulo = fich.querySelectorAll("Titulo");
                   alert (arrayTitulo.length);

                    
                }else{
                    //document.getElementById('contenedor').value="Codigo de error " + xhr.status;
                }
            }  
        }
}
