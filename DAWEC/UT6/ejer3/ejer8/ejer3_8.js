addEventListener('load', inicio, false);



function inicio (){
    var google = document.querySelector("#google");
    var yahoo = document.querySelector("#yahoo");
    var wiki = document.querySelector("#wiki");

    var enlace = document.querySelector("a");

    google.addEventListener('click', function(){
        google.style.color = "blue";
        enlace.addEventListener('click', function(){
            enlace.setAttribute("href", "https://www.google.es");
        },  false);
    }, false);
    
    yahoo.addEventListener('click', function(){
        yahoo.style.color = "pink";
        enlace.addEventListener('click', function(){
            enlace.setAttribute("href", "https://www.yahoo.es");
        },  false);
    }, false);

    wiki.addEventListener('click', function(){
        wiki.style.color = "lightgreen";
        enlace.addEventListener('click', function(){
            enlace.setAttribute("href", "https://www.wikipedia.es");
        },  false);
    }, false);
    


}




