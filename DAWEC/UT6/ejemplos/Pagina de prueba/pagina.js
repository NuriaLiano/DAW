
addEventListener('load', inicio, false);

function inicio (){
    var cabecera1 = document.querySelectorAll("h3");
    
    for(var i = 0; i <cabecera1.length; i++){
    alert(cabecera1[i].nodeType);
    alert(cabecera1[i].nodeValue);
    }
    alert(cabecera1.length);
}

