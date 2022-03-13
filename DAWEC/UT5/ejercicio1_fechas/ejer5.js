addEventListener('load', inicio, false);

var numero;


function inicio(){

    //recoger valor del input
    
    btnIntroNum = document.getElementById("intronum");
    btnIntroNum.addEventListener('click', function () {
        numero = document.getElementById("num").value;

        //redondeo parse int
        document.getElementById("redondeo1").innerHTML = parseInt(numero);

        //redondeo ceil
        document.getElementById("redondeo2").innerHTML = Math.ceil(numero);

        //redondeo floor
        document.getElementById("redondeo3").innerHTML = Math.floor(numero);

        //redondeo round
        document.getElementById("redondeo4").innerHTML = Math.round(numero);

        //redondeo toFixed
        let n = 23.4567;
        let fix = n.toFixed(2);
        document.getElementById("redondeo5").innerHTML = fix;

        //redondeo toPrecision
        let nu = 23.4567;
        let prec = nu.toPrecision(2);
        document.getElementById("redondeo6").innerHTML = prec;

    }, false)
}