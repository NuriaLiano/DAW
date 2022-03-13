addEventListener('load', inicio, false);


function inicio (){

    //elemento raiz de la pagina
    
    var objeto_html = document.documentElement;
    document.write("El elemento raíz es : " + objeto_html.nodeName);
    document.write("<br>");
    document.write("El elemento raíz es de tipo : " + objeto_html.nodeType);

    document.write("<br>");
    document.write("**********************************")
    document.write("<br>");
    //obtener los elementos head y body
    var objeto_head = objeto_html.firstChild;
    var objeto_body = objeto_html.lastChild;
    
    document.write("El primer hijo de html es: " + objeto_head.nodeName);
    document.write("<br>");
    document.write("El primer hijoz es de tipo : " + objeto_head.nodeType);
    document.write("<br>");
    document.write("El ultimo hijo de html es: " + objeto_body.nodeName);
    document.write("<br>");
    document.write("El ultimo hijo es de tipo : " + objeto_body.nodeType);

    document.write("<br>");
    document.write("**********************************")
    document.write("<br>");

    //otra forma de obtener head y body
    var objeto_head2 = objeto_html.childNodes[0];
    var  objeto_body2 = objeto_html.childNodes[1];

    document.write("El primer hijo de html es: " + objeto_head.nodeName);
    document.write("<br>");
    document.write("El ultimo hijo de html es: " + objeto_body.nodeName);

    document.write("<br>");
    document.write("**********************************")
    document.write("<br>");
    //si no se conoce la posicion 
    var objeto_head3 = objeto_html.childNodes.length;
    document.write("Cuantos hijos tiene HTML: " + objeto_head3);

    document.write("<br>");
    document.write("**********************************")
    document.write("<br>");

    //acceder directamente a body utilizando el atajo
    var objeto_body4 = document.body;



}