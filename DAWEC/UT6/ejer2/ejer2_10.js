addEventListener('load', inicio, false);
var arrayPalabras = new Array("Hambre", "Salchicha", "Cebar", "Morder");

function inicio() {
    var btn = document.querySelector("#btn");
    btn.addEventListener('click', function() {
        var aleatorio = Math.floor(Math.random() * arrayPalabras.length);
        var valor = arrayPalabras[aleatorio];
        //extraer cada letra
        valor.charAt(1);
        for (let i = 0; i < valor.length; i++) {
            var nuevoDiv = document.createElement("div");
            nuevoDiv.textContent = valor[i];
            document.body.appendChild(nuevoDiv);
        }
    }, false);
}