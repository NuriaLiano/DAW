// Que esto se haga cuando cargue la página
addEventListener('load', function () {
    // Seleccionamos el formulario
    var formulario = document.getElementById("formulario");
    var opciones = document.getElementById("opciones");

    // Hacemos el evento de click sobre el propio formulario
    formulario.addEventListener("change", function() {
        var texto 
   	    texto = "El numero de opciones del select: " + document.formul.miSelect.length 
   	    var indice = document.formul.miSelect.selectedIndex 
   	    texto += "nIndice de la opcion escogida: " + indice 
   	    var valor = document.formul.miSelect.options[indice].value 
   	    texto += "nValor de la opcion escogida: " + valor 
   	    var textoEscogido = document.formul.miSelect.options[indice].text 
   	    texto += "nTexto de la opcion escogida: " + textoEscogido 
   	    alert(texto) 

        
    }, false);
}, false);