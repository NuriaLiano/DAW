addEventListener('load', inicio, false);
function inicio(){
    /*document.body.style.backgroundColor = "black";
    document.querySelector("p").style.color = "white";
    */
    var divs = document.querySelectorAll("div");
    for (let i = 0; i < divs.length; i++) {
        var namedivs = divs[i].getAttribute("id");
        if (namedivs == "gris-claro") {
            divs[i].addEventListener('click', function(){
                document.body.style.backgroundColor = "rgb(187, 185, 185)";
            }, false);
        }else if(namedivs == "gris-oscuro"){
            divs[i].addEventListener('click', function(){
                document.body.style.backgroundColor = "rgb(66, 66, 66)";
            }, false);
        }else if (namedivs == "gris-medio") {
            divs[i].addEventListener('click', function(){
                document.body.style.backgroundColor = "grey";
            }, false);
        }else if (namedivs == "reestablecer" ) {
            divs[i].addEventListener('click', function(){
                document.body.style.backgroundColor = "black";
            }, false);
        }
        
    }


}