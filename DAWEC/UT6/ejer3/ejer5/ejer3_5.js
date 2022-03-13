addEventListener('load', inicio, false);
function inicio(){
    var enlace = document.querySelector("a");
    alert(enlace.getAttribute("href"));
}