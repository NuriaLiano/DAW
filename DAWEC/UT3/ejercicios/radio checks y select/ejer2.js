// Que esto se haga cuando cargue la página
addEventListener('load', function () {
    // Seleccionamos el formulario
    var formulario = document.getElementById("formulario");
    var opciones = document.getElementById("opciones");

    // Hacemos el evento de click sobre el propio formulario
    opciones.addEventListener("change", function() {
        var texto 
   	    texto = "El numero de opciones del select: " + document.formulario.miSelect.length
        var indice = document.formulario.miSelect.selectedIndex 
   	    texto += " \nIndice de la opcion escogida: " + indice 
   	    var valor = document.formulario.miSelect.options[indice].value 
   	    texto += " \nValor de la opcion escogida: " + valor 
   	    var textoEscogido = document.formulario.miSelect.options[indice].text 
   	    texto += " \nTexto de la opcion escogida: " + textoEscogido 
   	    alert(texto) 

        
    }, false);
}, false);