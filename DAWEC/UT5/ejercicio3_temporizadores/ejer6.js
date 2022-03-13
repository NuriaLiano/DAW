addEventListener('load', inicio, false);


var btn_ver, lugarllegada;
var array = [];
var llegadas = ["Roma", "París", "Londres"];
var salidas = ["Oviedo", "Santander", "Madrid"];

function inicio (){



    btn_ver = document.getElementById("botonVer");
    btn_ver.addEventListener('click', function(){

        //recoger valores de los select
        var sllegada = document.getElementById("llegada");
        var opcionllegada = sllegada.value;
        alert(opcionllegada);
        
        var ssalida = document.getElementById("salida");
        var opcionsalida = ssalida.value;
            alert(opcionsalida);


        //recoger valores del input radio button
        var radios = document.getElementsByName('transporte');
        for(i=0; i<radios.length; i++){
            
            if(radios[i].checked){
                var modotransporte=radios[i].value;
                alert(modotransporte);
            }
        }

        //intervalo para mostrar la progress bar
        if (i = 0) {
            i = 1;
            var barra = document.getElementById("barra");
            var width = 1;
            var id = setInterval(function(){
                if (width >= 100) {
                    clearInterval(id);
                    i = 0;
                }else{
                    tamano++;
                    barra.style.width = width + "%";
                }
            }, 10);
        }

        var temporizador = setTimeout(function(){

            var ven = window.open("","","width=300, height=300");
            
            ven.document.write(opcionllegada, opcionsalida, modotransporte);

        }, 1000);

        
        let texto="Viajes: \n";
        for(let indice=0; indice < array.length; indice++){
    
            texto += array[indice]+"\n";
        }
    
        resultado.value= texto;


    }, false);


}

function crear() {

    array = new Array(3);
    for (var i = 0; i < 3; i++) {
        array[i] = new Array(3);
    }

    for (let i = 0; i < 3; i++) {

        for (let j = 0; j < 3; j++) {
           
            array[i][j] = 0;
            array[i][j] = 0;
        }
    }
}

function mostrar() {

    medioTransporte = document.getElementsByName("transporte");
    for (let i = 0; i < medioTransporte.length; i++) {
        if (medioTransporte[i].checked) {

            tipo = medioTransporte[i].value;
        }
    }

    let width = (window.outerWidth - 300) / 2;
    let height = (window.outerHeight - 300) / 2;

    venta = window.open("", "", "width=300,height=300");
    venta.moveTo(width, height);

    let s = selectSalida.selectedIndex;
    let l = selectLlegada.selectedIndex;

    venta.document.write(`<img src="Img/image${l + 1}.jpeg" height="200" width="200"></img>`);

    venta.document.write("Salida: " + salidas[s]);

    venta.document.write("Destino: " + llegadas[l]);

    venta.document.write("Tipo de trasnporte: " + tipo);

}
