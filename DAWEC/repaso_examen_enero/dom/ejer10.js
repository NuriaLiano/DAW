addEventListener('load', inicio, false);

var contador = 0;
var contadorCirculos = 0;

function inicio (){
    var btn = document.getElementById("pulsa");

    btn.addEventListener('click', crearCirculo, false);

    document.addEventListener('click', function(){
        if(contador == 1){
            clearInterval(cir);
            alert("Número de circulos: "+contadorCirculos);
        }else{
            cir = setInterval(crearCirculo, 100);
        }
        contador = 1;
    }, false);


    function crearCirculo (){
        //random tamaño
        Math.floor((Math.random()*(100 - 0) + 0));

        var nuevoCirculo = document.createElement("div");
        nuevoCirculo.style.borderRadius = "50%";
        nuevoCirculo.style.backgroundColor = "rgb(" +  Math.floor((Math.random()*(300 - 1) + 1)) + "," +  Math.floor((Math.random()*(300 - 1) + 1)) + "," +  Math.floor((Math.random()*(300 - 1) + 1)) + ")";
        
        var tamano = Math.random()*(120 + 10);
        nuevoCirculo.style.width = tamano + "px";
        nuevoCirculo.style.height =tamano  + "px";
        nuevoCirculo.style.position = "absolute";
        nuevoCirculo.style.top = (Math.random() * window.innerHeight - tamano) + "px";
        nuevoCirculo.style.left = (Math.random() * window.innerWidth -tamano) + "px";

        document.body.appendChild(nuevoCirculo);
        contadorCirculos++;
    }

}