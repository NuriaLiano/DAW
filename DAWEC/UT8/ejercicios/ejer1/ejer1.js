addEventListener('load', inicio, false);

function inicio (){

    var btnResultado = document.querySelector("#verResultado");
    btnResultado.addEventListener('click', function(){
        
    },false);
    
    var btnAplicar = document.querySelector("#aplicar");
    btnAplicar.addEventListener('click', guardarCookies,false);



}



function guardarCookies(){

    //recoger valor del select seleccionado
    var colores = document.querySelector("#colores");
    colores.addEventListener("change", (e) => {
       var colorFondo = e.currentTarget.value
        //guardar en una cookie
        document.cookie = "fondo="+colorFondo;
    }, false);
    

    //recoger los divs a imprimir
    var divsImprimir = document.querySelector("#numdivs");
    document.cookie = "divs="+divsImprimir;

    //recoger color del select seleccionado
    var coloresDivs = document.querySelector("#coloresDivs");
    coloresDivs.addEventListener("change", function(){
        var colDivs = this.options[coloresDivs.selectedIndex];
        //guardar en una cookie
        document.cookie = "fondoDivs="+colDivs;
    }, false);

    //grosor para los divs
    var grosorDivs = document.querySelectorAll("#grosor");
    for (let i = 0; i < grosorDivs.length; i++) {
        
        
    }
    
}

function verCookies(){
    
    var fondoColor = leerCookie("fondo");
    //dar color de fondo
    document.body.style.backgroundColor=fondoColor;
   
    //imprimir divs
    var numDivs = leerCookie("divs");ç
    for (let i = 0; i < numDivs.length; i++) {
        var nuevoDiv = document.createElement("div");
        document.body.appendChild(nuevoDiv);
        nuevoDiv.style.backgroundColor=fondoColor.value;
    }

    //color de los divs


    

    
}

function leerCookie(nombre){
    var lista = document.cookie.split(";");
    for (i in lista) {
        var busca = lista[i].search(nombre);
        if (busca > -1) {
            micookie=lista[i]
        }
    }
    var igual = micookie.indexOf("=");
    var valor = micookie.substring(igual+1);
    return valor;
}