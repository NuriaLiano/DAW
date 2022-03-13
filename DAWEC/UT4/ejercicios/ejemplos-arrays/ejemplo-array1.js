addEventListener('load', inicio, false);

//crear array
var boton1, boton2, boton3, boton4, boton5, recogerPush;
var vec = new Array(1,2,3,4,5);
var vecConcat = new Array('hola', 'esto','es','un','array');

function inicio() {
    //primer boton
    botonPruebas = document.getElementById('boton1');
    botonPruebas.addEventListener('click', ejemplo1, false);

    //segundo boton
    botonPruebas2 = document.getElementById('boton2');
    botonPruebas2.addEventListener('click', ejemplo2, false);

    //tercer boton
    botonPruebas3 = document.getElementById('boton3');
    botonPruebas3.addEventListener('click', ejemplo3, false);

    //cuarto boton
    botonPruebas4 = document.getElementById('boton4');
    botonPruebas4.addEventListener('click', ejemplo4, false);

    //quinto boton
    botonPruebas5 = document.getElementById('boton5');
    botonPruebas5.addEventListener('click', ejemplo5, false);
    //recoger push
    recogerPush = document.getElementById("añadirNum");

    //sexto boton
    botonPruebas6 = document.getElementById('boton6');
    botonPruebas6.addEventListener('click', ejemplo6, false);
    
    //septimo boton
    botonPruebas7 = document.getElementById('boton7');
    botonPruebas7.addEventListener('click', ejemplo7, false);

    //optavo boton
    botonPruebas8 = document.getElementById('boton8');
    botonPruebas8.addEventListener('click', ejemplo8, false);

    //noveno boton
    botonPruebas9 = document.getElementById('boton9');
    botonPruebas9.addEventListener('click', ejemplo9, false);

    //decimo boton
    botonPruebas10 = document.getElementById('boton10');
    botonPruebas10.addEventListener('click', ejemplo10, false);

    //undecimo boton
    botonPruebas11 = document.getElementById('boton11');
    botonPruebas11.addEventListener('click', ejemplo11, false);

    //duodecimo boton
    botonPruebas12 = document.getElementById('boton12');
    botonPruebas12.addEventListener('click', ejemplo12, false);

    //decimotercero boton
    botonPruebas13 = document.getElementById('boton13');
    botonPruebas13.addEventListener('click', ejemplo13, false);

    //decimocuarto boton
    botonPruebas14 = document.getElementById('boton14');
    botonPruebas14.addEventListener('click', ejemplo14, false);

    //decimoquinto boton
    botonPruebas15 = document.getElementById('boton15');
    botonPruebas15.addEventListener('click', ejemplo15, false);

    //decimosexto boton
    botonPruebas16 = document.getElementById('boton16');
    botonPruebas16.addEventListener('click', ejemplo16, false);
    

}

function ejemplo1() {
    //recorrer array con for
    var f;
    for (f=0; f < vec.lenght; f++) {
        document.write(vec[f]+ " - ");
    }
    
}

function ejemplo2() {
    //recorrer array con for in
    for(var indice in vec){
        document.write(indice);
        document.write(vec[indice]+ " - ");
    }
    
}

function ejemplo3() {
    //recorrer array con for of
    for(var valor in vec){
        document.write("El valor es: " + valor + "<br/>");
    }
    
}

function ejemplo4() {
    //recorrer array con foreach callback
    vec.forEach(function (valor, indice, vec) { //utiliza una funcion anonima como llada a la funcion
        document.write("En el indice " + indice + " hay este valor " + valor + "<br/>");
    })    
}

function ejemplo5(){
    //añadir nuevos elementos a los arrays ARRAY PUSH
    vec.push(recogerPush.value);
    alert("La nueva longitud del array es: " + vec.length);
    //Con esto imprimimos el array y el elemento que recoge
    //document.write(`El elemento a añadir es: ${recogerPush.value} <br/>`);
    //document.write("El array es: " + vec);

    //elimina el contenido de la caja una vez que se ha agregado
    añadirNum.value = "";
    //establece el cursor al inicio del input
    añadirNum.focus();

}

function ejemplo6(){
    //añadir nuevos elementos a los arrays ARRAY CONCAT
    alert("La longitud del array original es: " + vec);
    var vecTemporal = vec.concat(vecConcat);
    document.getElementById("resul6").innerHTML = "La nueva longitud del arrayConcat es: " + vecTemporal;

}

function ejemplo7(){
    //añadir nuevos elementos a los arrays ARRAY JOIN
    document.getElementById("resul7").innerHTML = "La longitud del array original es: " + vec.join(" -- ");

}

function ejemplo8(){
    //añadir nuevos elementos a los arrays ARRAY REVERSE
    alert("El array original es: " + vec);
    document.getElementById("resul8").innerHTML = "El array es: " + vec.reverse();

}

function ejemplo9(){
    //añadir nuevos elementos a los arrays ARRAY UNSHIFT
    vec.unshift('nuevo', 'añadido');
    document.getElementById("resul9").innerHTML = "El array es: " + vec;

}

function ejemplo10(){
    //elimina el primer elementos a los arrays ARRAY SHIFT
    let eliminado = vec.shift();
    alert("El eliminado es " + eliminado);
    document.getElementById("resul10").innerHTML = "El array es: " + vec;
}

function ejemplo11(){
    //elimina el ultimo elementos a los arrays ARRAY POP
    let eliminado = vec.pop();
    alert("El eliminado del array es: " + eliminado);
    document.getElementById("resul11").innerHTML = "El array ahora es: " + vec;
}

function ejemplo12(){
    //devuelve un nuevo array con los valores pedidos
    let arrayTemporal = vec.slice(0,2); //funciona con rangos, saca desde la posicion 0 a la posicion 2
    document.getElementById("resul12").innerHTML = "El numero array es " + arrayTemporal;
}

function ejemplo13(){
    //ordena el array array alfabeticamente
    let arrayDesorden = new Array(3,2,4,5,1);
    arrayDesorden.sort(); //funciona con rangos, saca desde la posicion 0 a la posicion 2
    document.getElementById("resul13").innerHTML = "El numero array ordenado es " + arrayDesorden;
    
}

function ejemplo14(){
    //devuelve un array con la condicion de la funcion que queramos
    let tareasmap = vec.map(imprimirmap);
    document.getElementById("resul14").innerHTML = "Los elementos multiplicados por 10 son: " + tareasmap;
}
function imprimirmap(num) {
    return num * 10;
}

function ejemplo15(){
    //devuelve un array con los elementos del array original que pasen el if
    document.getElementById("resul15").innerHTML = "Los elementos que son  mayores de 3 son: " + vec.filter(imprimirfilter);
}
function imprimirfilter(num) {
    return num > 2; 
}

function ejemplo16(){
    //devuelve el resultado de la resta de los numeros del interior del array
    document.getElementById("resul16").innerHTML = vec.reduce(imprimirreduce);
}
function imprimirreduce(total, num) {
    return total - num;
}




