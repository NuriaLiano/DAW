addEventListener('load', inicio, false);

function inicio (){
    var p = document.querySelector("p");
    var a = document.querySelector("p a");
    
    
    //numero de atributos
    alert("El elemento tiene: " + ( p.getAttributeNames().length + a.getAttributeNames().length));
    //ver nombre y valor

    var valP = p.getAttributeNames();
    var valA = a.getAttributeNames();
    for (let i = 0; i < valP.length; i++) {
        v = valP[i];
        alert("valor de los atributos de P: " + p.getAttribute(v));
    }
    alert("valor de los atributos de A: " + a.getAttribute(valA));
    //acceder por nombre y ver valor
    var btn = document.getElementById("enviar");
    btn.addEventListener("click", function(){
        var introDatos = document.getElementById("datos");
        for (let j = 0; j < valP.length; j++) {
            v = valP[j];
            if (v == introDatos.value) {
                var temp = v;
            }
        }
        if (temp == introDatos.value) {
            alert("valor del atributo es: " + p.getAttribute(temp));
        }else if(a.getAttributeNames() == introDatos.value) {
            alert("valor del atributo es: " + a.getAttribute(valA));
        }else{
            alert("no va");
        }

    }, false);
    
}