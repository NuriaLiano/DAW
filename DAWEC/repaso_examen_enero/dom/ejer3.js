addEventListener('load', inicio, false);

function inicio (){
    var btn = document.querySelector("input");
    btn.addEventListener('click', function(){
        var a = document.createElement("a");
        a.setAttribute("href", "#");
        document.body.appendChild(a);
    }, false);

    var enlace1 = document.createElement("a");
    
    document.body.appendChild(enlace1);
    var enlace2 = document.createElement("a");
    
    document.body.appendChild(enlace2);

    var btncrear = document.querySelector("#crear");
    var btnborrar = document.querySelector("#borrar");

    btncrear.addEventListener('click', function(){
        enlace1.setAttribute("href", "#");
        document.body.appendChild(enlace1);
        enlace2.setAttribute("href", "#");
        document.body.appendChild(enlace2);
    }, false);

    btnborrar.addEventListener('click', function(){
        enlace1.removeAttribute("href");
        document.body.appendChild(enlace1);
        enlace2.removeAttribute("href");
        document.body.appendChild(enlace2);
    }, false);

    

}