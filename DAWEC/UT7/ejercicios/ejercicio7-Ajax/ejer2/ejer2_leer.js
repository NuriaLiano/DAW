addEventListener('load', inicio, false);

function inicio(){
        
    
    var btnLeer = this.document.querySelector("#btnLeer");
    btnLeer.addEventListener("click", leer, false);
}

function leer (){
    
    var xhr;
    xhr = new XMLHttpRequest();
    
    xhr.open('POST', 'datos.txt', true),
    xhr.send(null);

    xhr.onreadystatechange = muestracontenido;

    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
               var arrayPersonas = [];
               var texto = "";
               //var persona = new Persona();
                let fich = xhr.responseText;
                var arrayFich = fich.split("/");
                //console.log(arrayFich);
                for (let i = 0; i < arrayFich.length; i++) {
                    var arrayAux = arrayFich[i].split(",");
                    //alert(typeof(arrayAux));
                    //console.log(arrayAux[0]+" "+arrayAux[1]);
                    var persona = new Persona(arrayAux[0], arrayAux[1], arrayAux[2], arrayAux[3], arrayAux[4], arrayAux[5]);

                    arrayPersonas.push(persona);
                    //console.log(persona.informacion());
                    alert(persona.informacion());
                    //document.querySelector("#contenedor").value = persona.informacion();
                    texto += persona.informacion()
                   
                   document.querySelector("#contenedor").value = texto;
                }

                //document.querySelector("#contenedor").value = fich.split("*");
                /*let arrayTitulo = fich.querySelectorAll("nombre");
                for (let i = 0; i < arrayTitulo.length; i++) {
                    var nuevoP = document.createElement("p");
                    var texto = document.createTextNode(arrayTitulo[i]);
                    nuevoP.appendChild(texto);
                    document.body.appendChild(nuevoP);
                    
                }*/

            }else{
                document.querySelector('#contenedor').innerHTML="Codigo de error " + xhr.status;
            }
        }  
    }
}