addEventListener("load", inicio, false);


function inicio (){
    var btn = document.querySelector("#btn");
    btn.addEventListener('click', function(){
        alert("soy un botón");       
    }, false);
}