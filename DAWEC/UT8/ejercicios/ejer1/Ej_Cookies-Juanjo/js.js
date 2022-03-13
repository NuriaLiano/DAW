addEventListener('load', inicio, false);
var selectColores
var selectColorDivs
var numDivs
var colorDivs
var colorFondo

var btnCrearDivs
var btnEnviar
var btnAplicar

function inicio() {
    selectColorFondo = document.querySelector("#colorFondo")
    selectColorDivs = document.querySelector("#colorDivs")
    numDivs = document.querySelector("#numeroDivs")

    btnCrearDivs = document.querySelector("#crearDivs")
    btnEnviar = document.querySelector("#enviar")
    btnAplicar = document.querySelector("#aplicar")

    if (document.cookie) {

        function leerCookie(nombre) {
            var lista = document.cookie.split(";");
            for (i in lista) {
                var busca = lista[i].search(nombre);

                if (busca > -1) {
                    micookie = lista[i]
                }

            }
            var igual = micookie.indexOf("=");
            var valor = micookie.substring(igual + 1);
            return valor;
        }
        let colorDeDivs = leerCookie("colorDivs")
        let numeroDeDivs = parseInt(leerCookie("numeroDivs"))
        let colorDeFondo = leerCookie("colorFondo")

        for (let index = 0; index < numeroDeDivs; index++) {
            let crearNuevoDiv = document.createElement("div")
            crearNuevoDiv.setAttribute("class", "divCreado")
            crearNuevoDiv.setAttribute("style", "width: 100px; height: 100px; border: solid black 2px;")
            document.body.appendChild(crearNuevoDiv)
        }

        let arrayDivs = document.querySelectorAll(".divCreado")

        for (let index2 = 0; index2 < arrayDivs.length; index2++) {
            arrayDivs[index2].setAttribute("style", "width: 100px; height: 100px; border: solid black 2px; background-color: " + colorDeDivs + ";")

        }

        document.body.setAttribute("style", "background-color: " + colorDeFondo + ";")
    }

    selectColorFondo.addEventListener("change", (e) => {
        colorFondo = e.currentTarget.value

    }, false)

    selectColorDivs.addEventListener("change", (e) => {
        colorDivs = e.currentTarget.value
    }, false)

    btnEnviar.addEventListener("click", () => {
        let numeroDivs = parseInt(numDivs.value)

        for (let index = 0; index < numeroDivs; index++) {
            let crearNuevoDiv = document.createElement("div")
            crearNuevoDiv.setAttribute("class", "divCreado")
            crearNuevoDiv.setAttribute("style", "width: 100px; height: 100px; border: solid black 2px;")
            document.body.appendChild(crearNuevoDiv)
        }

        let arrayDivs = document.querySelectorAll(".divCreado")

        for (let index2 = 0; index2 < arrayDivs.length; index2++) {
            arrayDivs[index2].setAttribute("style", "width: 100px; height: 100px; border: solid black 2px; background-color: " + colorDivs + ";")

        }

        document.body.setAttribute("style", "background-color: " + colorFondo + ";")

    }, false)

    btnAplicar.addEventListener("click", () => {
        document.cookie = "colorFondo=" + colorFondo + ";expires=Fri, 31 Dec 9999 23:59:59 GMT"
        document.cookie = "colorDivs=" + colorDivs+ ";expires=Fri, 31 Dec 9999 23:59:59 GMT"
        document.cookie = "numeroDivs=" + parseInt(numDivs.value)+ ";expires=Fri, 31 Dec 9999 23:59:59 GMT"

    }, false)

}