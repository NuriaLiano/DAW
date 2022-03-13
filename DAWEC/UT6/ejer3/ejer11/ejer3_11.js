addEventListener('load', inicio, false);

var frase = ["Hello","good"];

function inicio (){


    var tema1 = document.querySelector("#tema1");
    var tema2 = document.querySelector("#tema2");
    var tema3 = document.querySelector("#tema3");


    tema1.addEventListener('click', function(){
        
        //imprimir array en un p nuevo
        var nuevoP = document.createElement("p");
        nuevoP.innerHTML = frase;
        document.body.insertBefore(nuevoP, tema2);
        
        //imprimir palabras para rellenar
        var primerP = document.createElement("p");
        var priPalabra = document.createTextNode("nuria");
        primerP.appendChild(priPalabra);
        document.body.insertBefore(primerP, nuevoP);

        var segundoP = document.createElement("p");
        var segPalabra = document.createTextNode("morning");
        segundoP.appendChild(segPalabra);
        document.body.insertBefore(segundoP, nuevoP);

        var segP;
        //funcionalidad a nuria y a morning
        primerP.addEventListener('click', function(){
            
            if (frase.indexOf(1)) {
                frase.splice(1, 0, "nuria");
            }else if(frase.indexOf("morning",1)){
                frase.splice(3, 0, "nuria");
            }    
            segP = document.createElement("p");
            segP.innerHTML = frase.join(" ");
            document.body.insertBefore(segP, tema2);
            


            if (frase.indexOf("nuria", 1)) {
                primerP.style.color = "green";
            }

            
        }, false);

        segundoP.addEventListener('click', function(){
            

            if (frase.indexOf(1)) {
                frase.splice(3, 0, "morning");
            }else if(frase.indexOf(1)){
                frase.splice(1, 0, "morning");
            }    
            
            segP.innerHTML = frase.join(" ");
            document.body.insertBefore(segP, tema2);
            


            if (frase.indexOf("morning", 3)) {
                primerP.style.color = "green";
            }



            /*var segP = document.createElement("p");
            segP.innerHTML = frase;
            document.body.insertBefore(segP, tema2);
            if (frase.indexOf("morning", 3)) {
                
            }
            if (frase.indexOf("nuria", 1)) {
                primerP.style.color = "green";
            }*/

            
        }, false);

    }, false);





}