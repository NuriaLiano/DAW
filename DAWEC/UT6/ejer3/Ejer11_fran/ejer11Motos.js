addEventListener("load", inicio, false);

var boton;
var botonRepetir;
var listaSpamCoches;
var listaPCoches;

function inicio() {

    boton = document.querySelector("#boton");
    botonRepetir = document.querySelector("#botonRepetir");
    listaSpamCoches = document.querySelectorAll("span");
    listaPCoches = document.querySelectorAll("p");


    for (let i = 0; i < listaPCoches.length; i++) {

        listaPCoches[i].addEventListener('click', function () {

            let palabra = listaPCoches[i].textContent;

            for (let j = 0; j < listaSpamCoches.length; j++) {

                if (listaSpamCoches[j].textContent == ".........") {

                    listaSpamCoches[j].textContent = palabra;

                    j = 100;

                    listaPCoches[i].style = "opacity: 0";
                }
            }

        }, false);
    }



    boton.addEventListener('click', function () {

        if (listaSpamCoches[0].textContent == listaSpamCoches[0].id && listaSpamCoches[1].textContent == listaSpamCoches[1].id) {

            listaSpamCoches[0].style = "color:green";
            listaSpamCoches[1].style = "color:green";
            alert("Felicidades todo bien")

        } else {

            botonRepetir.style = "opacity: 1";

            if (listaSpamCoches[0].textContent != listaSpamCoches[0].id) {

                listaSpamCoches[0].style = "color:red";
            } else {

                listaSpamCoches[0].style = "color:green";
            }

            if (listaSpamCoches[1].textContent != listaSpamCoches[1].id) {

                listaSpamCoches[1].style = "color:red";
            } else {

                listaSpamCoches[1].style = "color:green";
            }

        }



    }, false);

    botonRepetir.addEventListener('click',function(){


        if (listaSpamCoches[0].textContent == listaSpamCoches[0].id) {

            for (let i = 0; i < listaPCoches.length; i++) {

                if(listaPCoches[i].textContent == listaSpamCoches[0].textContent){

                    listaPCoches[i].style =  "opacity: 0";
                }
                
            }

        } else {

            for (let i = 0; i < listaPCoches.length; i++) {

                if(listaPCoches[i].textContent == listaSpamCoches[0].textContent){

                    listaPCoches[i].style =  "opacity: 1";
                }
                
            }

            listaSpamCoches[0].textContent = ".........";
            listaSpamCoches[0].style = "color:black";
        }




        if (listaSpamCoches[1].textContent == listaSpamCoches[1].id) {

            for (let i = 0; i < listaPCoches.length; i++) {

                if(listaPCoches[i].textContent == listaSpamCoches[1].textContent){

                    listaPCoches[i].style =  "opacity: 0";
                }
                
            }
        } else {

            for (let i = 0; i < listaPCoches.length; i++) {

                if(listaPCoches[i].textContent == listaSpamCoches[1].textContent){

                    listaPCoches[i].style =  "opacity: 1";
                }
                
            }

            listaSpamCoches[1].textContent = ".........";
            listaSpamCoches[1].style = "color:black";
        }


    },false);


}

