addEventListener('load',inicio,false);
var nombre;
var num1, num2, num3;
var resul_final;
var nota;
var apnoap;
var continuar, salir;
var contadorAlum = 0;

function inicio(){
  // Extraemos los datos
  nombre = document.getElementById("nombre");
  num1 = document.getElementById("num1");
  num2 = document.getElementById("num2");
  num3 = document.getElementById("num3");
  resul_final = document.getElementById("resultado_final");
  nota = document.getElementById("nota");
  apnoap = document.getElementById("apto_noapto");
  continuar = document.getElementById("continuar");
  salir = document.getElementById("salir");

  //llamar al boton resultado final
  resul_final.addEventListener('click', final, false);
  //hacemos el boton vinculado a la funcion imprimir
  salir.addEventListener('click', salir, false);
}

function calculoNota(nombre,num1, num2, num3) {
    
    let n1= parseFloat(num1.value);
    let n2= parseFloat(num2.value);
    let n3= parseFloat(num3.value);

    var media= (n1+n2+n3)/3;
    if (media < 5) {
        return [media.toFixed(2), "No apto"]; //to fixed saca x decimales
    }else{
        return [media.toFixed(2), "Apto"];
    }
    
}
function final() {
    let [med,apt]=calculoNota(nombre, num1, num2, num3);
    alert(med);
    contadorAlum ++;
    nota.innerHTML = med; //al ser label hay que utilizar el innerHTML
    //si fuese imprimir en un input text read only seria con variable.value
    apnoap.innerHTML = apt;
}
function salir() {
    alert("Alumnos evaluados:  "+contadorAlum);
    contadorAlum=0;
}