addEventListener('load', inicio, false);

function inicio (){
    
    var btnsi = document.querySelector("#si");
    var btnno = document.querySelector("#no");


    //al pulsar no el raton se desplaza
    btnno.addEventListener("mouseover", function(e){
        let altura = Math.floor(Math.random() * (500 - 120)) + 120;
        let lon = Math.floor(Math.random() * (500 - 120)) + 120;
        btnno.style.position = "absolute";
        btnno.style.top = altura+"px";
        btnno.style.left = lon+"px";
    }, false);
    
}