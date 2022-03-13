
addEventListener('load', inicio, false);

//crear array para almacenar las imagenes
var arrayImg = new Array();
var contar = 0;
var btnOn, btnOff;

function inicio() {


    /*for (let i = 0; i < 7; i++) {
        arrayImg[i] = 'img/fot'+[i]+'.jpg';
        
        document.write('<img src="'+ arrayImg[i] +'">');
    }*/

    arrayImg = document.getElementsByTagName("img");
    for (let i = 0; i < arrayImg.length; i++) {
        arrayImg[i].addEventListener("click", function () {
            let url = this.getAttribute('src');
            window.open(url, "", `width=500,height=500`);
        }, false);

    }



    btnOn = document.getElementById("on");
    btnOn.addEventListener('click', function () {
        //crear temporizador
        tempo = setInterval(contador, 1000);
    
    }, false);

    btnOff = document.getElementById("off");
    btnOff.addEventListener('click', function () {
        parar();
    }, false);

}

function contador() {
    
        let url = arrayImg[contar].getAttribute('src');
        document.getElementById("visor").setAttribute("src", url);
        contar++;
    if (contar == 7) {
        contar = 0;
    }
    
}
function parar() {
    clearInterval(tempo);

}