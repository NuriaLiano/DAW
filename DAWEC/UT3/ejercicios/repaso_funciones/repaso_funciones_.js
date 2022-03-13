addEventListener('load', inicio, false);

var n_noches;
var precio;
var hotel;
var impuesto;
var formulario;
var opciones;
var opciones_destino;
var opciones_vuelo;
var imprimir_alquiler;
var estrellas;
var impuesto;
var coste_alquiler;
var coste_total;



function inicio() {
    //extraer datos
    impuesto = document.getElementById("impuesto");
    formulario = document.getElementById("form_hotel"); //se usa el id del form
    formulario_vuelo = document.getElementById("formulario_vuelo"); //se usa el id del form
    
    estreHotel = document.getElementById("hoteles_sel"); 
    //opciones = document.getElementById("hoteles"); //es el select
    opciones_vuelo = document.getElementById("vuelo"); 
    opciones_destino = document.getElementById("destino");
    //imprimir_alquiler = document.getElementById("alquiler"); //id del input readonly

    //HOTEL
        //evento del click para boton de hotel
    n_noches = document.getElementById("n_noches"); //es el select
    //alert(n_noches.value);
    opciones = document.getElementById("hoteles_sel");
    opciones.addEventListener('change', function () {
        var indice = hoteles_sel.selectedIndex;
        let estreHotel = hoteles_sel[indice].value; //recibe el valor de la etiqueta option
        alert(estreHotel); //imprime el valor del hotel etiqueta option
        
    }, false);
    

    boton_hotel = document.getElementById("boton_hotel");
    boton_hotel.addEventListener('click',function(){
        let total_hotel = coste_hotel(estreHotel, n_noches);
        alert(total_hotel);
    } , false);

    //VUELO Y DESTINO
    destino = document.getElementById("destino_sel");
    vuelo = document.getElementById("vuelo_sel");

    destino.addEventListener('change', function() {
        var indice_seleccionado = destino_sel.selectedIndex;
        let destino = destino_sel[indice_seleccionado].value;
        alert(destino); 
    }, false);

    vuelo.addEventListener('change', function() {
        var indice_sel = vuelo_sel.selectedIndex;
        let vuelo = vuelo_sel[indice_sel].value;
        alert(vuelo); 

    }, false);
    boton_vuelo = document.getElementById("boton_vuelo");
    boton_vuelo.addEventListener('click',function () {
        let total = coste_avion(destino, vuelo);
        alert(total);
    } , false);

    //FUNCION ALQUILER
    coste_alquiler = document.getElementById("coste_alquiler_lbl");

    //FUNCION COSTE FINAL
    coste_total = document

}

//############################# COSTE DE HOTEL ###########################
function coste_hotel(estreHotel, n_noches) {

    let precio_noche = 0.0;
    switch (estreHotel.value) {
        case 1:
            precio_noche = 40.0;
            break;
        case 2:
            precio_noche = 60.0;
            break;
        case 3:
            precio_noche = 80.0;
            break;
        case 4:
            precio_noche = 120.0;
            break;
        case 5:
            precio_noche = 160.0;
            break;

        default:
            break;
    }

    let impuesto = precio_noche * 0.02;
    let precio_total = n_noches.value * precio_noche + impuesto;

    return precio_total;
}

//###########################################################################

//############################# COSTE DE AVION ###########################
function coste_avion(destino, tipo_vuelo) {
    let descuento = 0.10;
    let precio_vuelo = 0.0;
    let total_vuelo = 0.0;

    switch (destino.value) {
        case "1":
            precio_vuelo = 200;
            break;
        case "2":
            precio_vuelo = 500;
            break;
        case "3":
            precio_vuelo = 70;
            break;
        case "4":
            precio_vuelo = 37;
            break; 
        default:
            precio_vuelo = 0;
            break;
    }
    if (tipo_vuelo.value == "ida_vuelta" ) {
        total_vuelo = precio_vuelo - descuento;
    }else{
        total_vuelo = precio_vuelo;
    }
    return total_vuelo;

}

//###########################################################################

//############################# COSTE DE ALQUILER ###########################

function coste_alquiler_coche(n_noches) {
    let dia_alquiler = 40;
    let descuento = 0;
    if ((n_noches.value >= 3) && (n_noches.value < 7)) {
        descuento = 20;

    } else if (n_noches.value >= 7) {
        descuento = 50;
    }
    let precio_alquiler_coche = n_noches.value * dia_alquiler - descuento;

    return precio_alquiler_coche;
}

function imprimir() {
    coste_alquiler_lbl.innerHTML=`El coste del aquiler es: ${coste_alquiler_coche(n_noches)}`;
    //coste_alquiler_coche(n_noches);
}

//###########################################################################

//############################# CALCULAR TOTAL ###########################

function calcularTotal(estreHotel, n_noches, destino, tipo_vuelo) {
    let total_costeHotel = coste_hotel(estreHotel, n_noches);
    let total_costeVuelo = coste_avion(destino, tipo_vuelo)
    let total_costeCoche = coste_alquiler_coche(n_noches);
    let total = total_costeHotel + total_costeCoche;
    return total;
}
function resultado() {
    coste_total_lbl.innerHTML=`El coste del aquiler es: ${calcularTotal(estreHotel, n_noches, destino, tipo_vuelo)}`;
    
}








