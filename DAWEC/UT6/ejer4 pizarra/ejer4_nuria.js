addEventListener('load', inicio, false);

var activo = false;

function inicio (){

    //colores
   var co = document.querySelector("#color");
    

    //var nFilas = prompt("Introduce el numero de filas que quieres");
    //var nColumnas = prompt("Introduce el numero de columnas");

    //sacar el div contenedor
    var contenedor = document.querySelector("#contenedor");

    
    let nCuadrados = parseInt(prompt("Introduce el numero de cuadrados (ancho x alto)"))
    
    contenedor.setAttribute("style","border:black solid 3px")
    
    contenedor.style.width = (nCuadrados * 12) + "px"
    contenedor.style.height = (nCuadrados * 12) + "px"

    for (let i = 0; i < nCuadrados; i++) {
        for (let j = 0; j < nCuadrados; j++) {
            let nuevoDiv = document.createElement("div")
            nuevoDiv.className = "hijosPizarra"

            contenedor.appendChild(nuevoDiv)

        }
    }

    var listaHijos = contenedor.childNodes;

    
    //PINTAR PIZARRA
    contenedor.addEventListener('click', function(){
        if(activo == false){
            var color = co.value;
            for (let i = 0; i < listaHijos.length; i++) {
                listaHijos[i].addEventListener('mousemove', function(){
                    if(activo == false){
                        listaHijos[i].style.backgroundColor = color;
                    }
                }, false);
            }
            activo = true;
        }else{
            alert("Vas a comenzar a pintar");
            activo = false;
        }
    }, false);

    
    var btnBorrar = document.querySelector("#borrar");
    btnBorrar.addEventListener('click', function(){
        let lista = document.querySelectorAll("div")

        for (let i = 0; i < lista.length; i++) {

            lista[i].style.backgroundColor = "white";
        }
    }, false);

    var btnGoma = document.querySelector("#goma");
    btnGoma.addEventListener("click", function(){
        for (let i = 0; i < listaHijos.length; i++) {

            listaHijos[i].addEventListener('mousemove',function(){
    
                listaHijos[i].style.backgroundColor = "white";
    
            },false); 
        }
    }, false);
    
    
}