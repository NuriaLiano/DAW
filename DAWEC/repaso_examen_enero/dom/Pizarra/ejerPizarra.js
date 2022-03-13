addEventListener("load", inicio, false);

var divPrincipal;
var listaHijos;
var co;
var borrarTodo;
var goma;
var activo = false;


function inicio() {


    divPrincipal = document.getElementById("divPrincipal");
    co = document.getElementById("color");
    borrarTodo = document.getElementById("borrarTodo");
    goma = document.getElementById("goma");


    for (let i = 0; i < 83; i++) {

        for (let j = 0; j < 83; j++) {

            var newDiv = document.createElement("div");
            newDiv.setAttribute("style", "border: 1px solid black;width: 10px; height: 10px;  float: left; background-color: white");
            divPrincipal.appendChild(newDiv);
        }

    }


    listaHijos = divPrincipal.childNodes;

    divPrincipal.addEventListener('click',function(){


        if(activo == false){

        let color = co.value;

        for (let i = 0; i < listaHijos.length; i++) {

            listaHijos[i].addEventListener('mousemove',function(){

                if(activo == false){
                    
                    listaHijos[i].style.backgroundColor = color;
                }
    
               
    
            },false); 
        }

        activo = true;

        }else{

            alert("Pincel activado")
            activo = false;
        }



        
    
    },false);


    borrarTodo.addEventListener('click',function(){

        let lista = document.querySelectorAll("div")

        for (let i = 0; i < lista.length; i++) {

            lista[i].style.backgroundColor = "white";
        }
    },false);


    goma.addEventListener('click',function(){

        for (let i = 0; i < listaHijos.length; i++) {

            listaHijos[i].addEventListener('mousemove',function(){
    
                listaHijos[i].style.backgroundColor = "white";
    
            },false); 
        }
    },false);



}



