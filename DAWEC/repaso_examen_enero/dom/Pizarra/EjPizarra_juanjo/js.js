addEventListener('load', inicio, false);
var interruptor = false
var interruptorBorrar = false

var funcionPintar
var funcionBorrar

var btnBorrar
var btnBorrarTodo

var color

function inicio() {

    let nCuadrados = parseInt(prompt("Introduce el numero de cuadrados (ancho x alto)"))
    let pizarra = document.querySelector("#pizarra")
    pizarra.setAttribute("style","border:black solid 3px")
    
    pizarra.style.width = (nCuadrados * 12) + "px"
    pizarra.style.height = (nCuadrados * 12) + "px"

    for (let index = 0; index < nCuadrados; index++) {
        for (let index2 = 0; index2 < nCuadrados; index2++) {


            let nuevoDiv = document.createElement("div")
            nuevoDiv.className = "hijosPizarra"

            pizarra.appendChild(nuevoDiv)

        }
    }


    pizarra.addEventListener("mousedown", () => {

        let arrayDivs = document.querySelectorAll(".hijosPizarra")


        for (let index = 0; index < arrayDivs.length; index++) {


            funcionPintar = arrayDivs[index]

            funcionPintar.addEventListener("mousemove", pintarColor, false)
            funcionPintar.myParam = arrayDivs[index]


            interruptor = false

        }

    }, false)

    pizarra.addEventListener("mouseup", () => {
        interruptor = true
    }, false)

    /* ------------ */
    document.querySelector("#cogerColor").onchange = function () {

        color = this.value
        interruptorBorrar = false

    }

    /* ------------------ */

    btnBorrar = document.querySelector("#borrar")

    btnBorrar.addEventListener("click", () => {

        interruptorBorrar = true
        
    }, false)


    /* -------------- */

    btnBorrarTodo = document.querySelector("#borrarTodo")

    btnBorrarTodo.addEventListener("click", () => {
        let arrayHijos = document.querySelectorAll(".hijosPizarra")

        for (let index = 0; index < arrayHijos.length; index++) {

            arrayHijos[index].style.backgroundColor = "white"

        }

        interruptorBorrar = false
    }, false)

}


function pintarColor(e) {

    let divSeleccionado = e.currentTarget.myParam

    if (interruptor == false) {
        if (interruptorBorrar == true) {
            divSeleccionado.style.backgroundColor = ""
        } else {
            if (color == null) {
                divSeleccionado.style.backgroundColor = "black"
            } else {
                divSeleccionado.style.backgroundColor = color
            }
        }
    } else {
        divSeleccionado.removeEventListener("mousemove", pintarColor, false)
    }

}




