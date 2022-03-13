addEventListener('load', inicio, false);

var cantidad, unidad, metodo;

function inicio (){
    

    btn = document.getElementById("convertir");
    btn.addEventListener("click", function(){
            //recoger valor
        cantidad = document.getElementById("valor").value;

        //recoger unidad
        unidad = document.getElementById("unidad").value;

        //recoger metodo
        metodo = document.getElementById("metodo").value;

        document.getElementById("resultado").innerHTML = convertirMilisegundos(cantidad, unidad, metodo);
    

    }, false)

}

function convertirMilisegundos(cantidad, unidad, modo){
    if (arguments.length != 3) {
        alert("La funcion convertirMilisegundos requiere exactamente 3 parametros \n cantidad, unidad y modo");
    }else{
        var valor;
        switch (unidad){ 
            case 'se': valor = 1000; break; //pasa  de segundos a milisegundos
            case 'mi': valor = 60000; break; 
            case 'ho': valor = 86400000; break;
        }
        switch(modo){
            case 'mu': return cantidad/valor; break;
            case 'um': return cantidad*valor; break;
        }
    }
    return false;


}

