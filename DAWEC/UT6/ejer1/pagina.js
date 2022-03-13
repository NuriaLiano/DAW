addEventListener('load', inicio, false);

function inicio (){

    var nodoHTML = document.documentElement;

    console.log("Nombre: " + nodoHTML.nodeName);

    console.log("Tipo: " +nodoHTML.nodeType);

    console.log("Valor: " +nodoHTML.nodeValue);

    //cuantos hijos
    console.log(nodoHTML.nodeName + " tiene " + nodoHTML.childNodes.length + " hijos");

    //hijos de raiz
    for (let i = 0; i < nodoHTML.childNodes.length; i++) {
        console.log("El nombre del hijo "+ (i+1) + " es " +  nodoHTML.childNodes[i].nodeName + "<br>");
        console.log("El tipo del hijo "+ (i+1) + " es " + nodoHTML.childNodes[i].nodeType + "<br>");
        console.log("El valor del hijo "+ (i+1) + " es " + nodoHTML.childNodes[i].nodeValue + "<br>");
    
    }

    //acceder al body con atajo
    var nodoBody = document.body;

    //acceder a los hijos del body
    console.log(nodoBody.nodeName);
    
    console.log(nodoBody.childNodes.length);

    for (let i = 0; i < nodoBody.childNodes.length; i++) {
        console.log("El nombre del hijo "+ (i+1) + " es " +  nodoBody.childNodes[i].nodeName + "<br>");
        console.log("El tipo del hijo "+ (i+1) + " es " + nodoBody.childNodes[i].nodeType + "<br>");
        console.log("El valor del hijo "+ (i+1) + " es " + nodoBody.childNodes[i].nodeValue + "<br>");
    
    }


    //extraer el nodo del footer
    var nodoFooter = document.querySelector("footer");
    if (nodoFooter.hasChildNodes()) {
        var hijosEnlace = document.querySelectorAll("footer a");
        if ( hijosEnlace != null ) {
            for (let i = 0; i < hijosEnlace.length; i++) {
                console.log(hijosEnlace[i] + " " + " Tipo de nodo: " + hijosEnlace[i].nodeType);
                
            }
        }
       
    }

    //padre del elemento imagen
    var logo = nodoBody.querySelector("img");
    if (logo.getAttribute("src") == "logo.png") {
        
        console.log(logo.parentNode.nodeName);
        console.log(logo.parentNode.nodeType);
        console.log(logo.parentNode.nodeValue);
    }

    //hermano de nodo <h2>CONTENIDO PRINCIPAL</h2>
    var conPrin = nodoBody.querySelector("h2");
    if (conPrin.innerHTML == "CONTENIDO PRINCIPAL") {
        console.log(conPrin.nextSibling.nodeName)
        console.log(conPrin.nextSibling.nodeType);
        console.log(conPrin.nextSibling.nodeValue);
    }

    //hermano anterior de aside 
    var anteriorAside = nodoBody.querySelector("aside");
    console.log(anteriorAside.previousElementSibling.nodeName);

    //ultimo hijo de nodobody 
    var ultimoHijo = nodoBody.lastChild;
    if (ultimoHijo.nodeName == "#text") {
        let anteriorAside2 = ultimoHijo.previousChild;
        alert(anteriorAside2.nodeName);
    }

    //dentro de aside probar seleccion de nodos
    var arrayHache = nodoBody.querySelectorAll("h3");
    for (let i = 0; i < arrayHache.length; i++) {
        console.log("El nombre es " +  arrayHache[i].nodeName + "<br>");
        console.log("El tipo es " + arrayHache[i].nodeType + "<br>");
        console.log("El valor es " + arrayHache[i].nodeValue + "<br>");
        
    }

    //tiene atributos el parrafo 1 article
    var parrafo = nodoBody.querySelector("article");
    if (parrafo.hasAttributes() == false){
        console.log("No tiene atributos");
    }
    
    //añadir dos atributos a ese p
    parrafo.setAttribute("class", "hola");
    console.log("El atributo nuevo para class es " + parrafo.getAttribute("class"));

}