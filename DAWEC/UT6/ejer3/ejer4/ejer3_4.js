addEventListener('load', inicio, false);
function inicio(){

    var btncrear = document.querySelector("#crear");
    var btnborrar = document.querySelector("#borrar");

    var enlaces = document.querySelectorAll("a");

    
    btncrear.addEventListener("click", function(){
        for (let i = 0; i < enlaces.length; i++) {
            enlaces[i].setAttribute("href", "www.google.es");
        }      
    }, false);
    
    btnborrar.addEventListener('click', function(){
        for (let i = 0; i < enlaces.length; i++) {
            enlaces[i].removeAttribute("href");
        }
    }, false);



}