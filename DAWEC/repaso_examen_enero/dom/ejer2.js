addEventListener('load', inicio, false);


function inicio (){
    var p = document.querySelector("p");
    var btnpulsar = document.getElementById("pulsar");
    var btncambiar = document.getElementById("cambiar");
    btnpulsar.addEventListener('click', function(){
        
    
    alert(p.getAttributeNames());
    alert(p.getAttribute(p.getAttributeNames()));
    }, false);
    
    btncambiar.addEventListener('click', function(){
        p.setAttribute((p.getAttributeNames()), "nuevo titulo");
        alert(p.getAttribute(p.getAttributeNames()));
    }, false); 
}