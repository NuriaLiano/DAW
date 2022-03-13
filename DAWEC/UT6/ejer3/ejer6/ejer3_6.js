addEventListener('load', inicio, false);
function inicio(){
    var btnfuente = document.querySelector("#aumentar");
    var btnrefuente = document.querySelector("#reestablecerfuente");
    var btncolor = document.querySelector("#color");
    var btnrecolor = document.querySelector("#reestablecercolor");
    
    //para la seccion uno
    var btnfuentes1 = document.querySelector("#aumentars1");
    var btnrefuentes1 = document.querySelector("#reestablecerfuentes1");
    var btncolors1 = document.querySelector("#colors1");
    var btnrecolors1 = document.querySelector("#reestablecercolors1");
    //
    //para la seccion dos
    var btntipos2 = document.querySelector("#tipos2");



    btnfuente.addEventListener('click', function(){
        var secciones = document.querySelectorAll("section");
        for (let i = 0; i < secciones.length; i++) {
            secciones[i].style.fontSize = "x-large";
        }
        //location.reload();
    }, false);
    btnrefuente.addEventListener("click", function(){
        var secciones = document.querySelectorAll("section");
        for (let i = 0; i < secciones.length; i++) {
            secciones[i].style.fontSize = "unset"; 
        }
    }, false);

    btncolor.addEventListener('click', function(){
        var secciones = document.querySelectorAll("section");
        for (let i = 0; i < secciones.length; i++) {
            secciones[i].style.backgroundColor = "green";
        }
    }, false);

    btnrecolor.addEventListener('click', function(){
        var secciones = document.querySelectorAll("section");
        for (let i = 0; i < secciones.length; i++) {
            secciones[i].style.backgroundColor = "unset";
        }
    }, false);

    btnfuentes1.addEventListener('click', function(){
        var secciones = document.querySelectorAll("section");
        for (let i = 0; i < secciones.length; i++) {
            secciones[0].style.fontSize = "40px";
        }
    }, false);
    
    btnrefuentes1.addEventListener('click', function(){
        var secciones = document.querySelectorAll("section");
        for (let i = 0; i < secciones.length; i++) {
            secciones[0].style.fontSize = "unset"; 
        }
    }, false);
    
    btncolors1.addEventListener('click', function(){
        var secciones = document.querySelectorAll("section");
        for (let i = 0; i < secciones.length; i++) {
            secciones[0].style.backgroundColor = "purple";
        }
    }, false);
    
    btnrecolors1.addEventListener('click', function(){
        var secciones = document.querySelectorAll("section");
        for (let i = 0; i < secciones.length; i++) {
            secciones[0].style.backgroundColor = "unset";
        }
    }, false);

    btntipos2.addEventListener('click', function(){
        var secciones = document.querySelectorAll("section");
        for (let i = 0; i < secciones.length; i++) {
            secciones[1].style.fontFamily= "monospace";
        }
    }, false);


}