addEventListener('load', inicio, false);

function inicio (){
    var btn = document.getElementById("puntos");
    btn.addEventListener("click", function(){
        var pe = document.querySelectorAll("p");
        for (let i = 0; i < pe.length; i++) {
            var punto = document.createTextNode(".");
        pe[i].appendChild(punto);
            
        }
        
    }, false);
    

}
