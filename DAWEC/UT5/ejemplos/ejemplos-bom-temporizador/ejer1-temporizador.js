addEventListener('load', inicio, false);

var btn_tempo;
var contar = 0;
var tempo;

function inicio (){

    btn_tempo = document.getElementById("temporizador");
    btn_tempo.addEventListener('click', function (){
        
        
        tempo = setInterval(contador(), 1000);

        parar();

        


    }, false);

}

function contador (){
    contar ++;
}
function parar (){
    clearInterval(tempo); 
    alert("Has tardado " + contar + " segundos");  
}