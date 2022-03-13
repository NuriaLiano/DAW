addEventListener("load", inicio, false);

var label;
var botonNo;
var divMover;

function inicio() {


label = document.querySelector("label");
botonNo = document.getElementById("no");
divMover = document.getElementById("mover");


document.addEventListener('mousemove',function(e){

    let x = e.screenX;
    let y = e.screenY;

    label.innerHTML = "Coordenada x: "+x+" y la coordenada y: "+y; 

    

},false);

document.addEventListener('mouseup',function(e){

    //alert(e.button);
},false);


botonNo.addEventListener('mouseover',function(){

    let altura = Math.floor(Math.random() * (500 - 120)) + 120;
    let lon = Math.floor(Math.random() * (500 - 120)) + 120;
    botonNo.style.position = "absolute";
    botonNo.style.top = altura+"px";
    botonNo.style.left = lon+"px";
},false);



divMover.addEventListener('click',function(){

    document.body.style.cursor = 'move';
    document.addEventListener('mousemove',mover,false);
    
},false);


divMover.addEventListener('dblclick',function(){

    document.body.style.cursor = 'auto'; 
    document.removeEventListener('mousemove',mover,false); 
},false);


}


function mover(e){

    let x = e.clientX;
    let y = e.clientY;

    divMover.style.top = y+"px";
    divMover.style.left = x+"px";
}