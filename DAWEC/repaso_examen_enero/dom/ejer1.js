addEventListener('load', inicio, false);


function inicio (){

    var p = document.querySelector("p");
    var a = document.querySelector("a");

    alert((p.getAttributeNames().length + a.getAttributeNames().length));
    alert();
    var nombre = p.getAttributeNames();
    
    for (let index = 0; index < nombre.length ; index++) {
        var nombreP = nombre[index];
        alert(p.getAttribute(nombreP));

        
    }
    
}