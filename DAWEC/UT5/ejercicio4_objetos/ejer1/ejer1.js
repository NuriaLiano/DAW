/*Crear un modelo de objetos llamado cd_musica que contenga las
propiedades: titulo, grupo y fecha y un método que nos devuelve
una cadena con esta información.
•->NO -> Hacer un programa que cree tres objetos con la información que se
solicita por pantalla y después los muestre utilizando el método
creado para ello.
• Una vez que nos funcione vamos a crear un array de objetos
música.
• Visualizamos la información de todos.
• Añadimos una nueva propiedad al modelo que será su precio.
• Les asignamos sus precios a todos.
• Caculamos el precio total del lote. */


addEventListener('load', inicio, false);


function inicio (){
    let btn_crear_obj = document.getElementById("btncrearobj");
    let btn_cambiar_precio = document.getElementById("btncambiarprecio");
    let btn_total = document.getElementById("btntotal");
    let mostrartodo = document.getElementById("mostrartodo");

    //crear el array
    let arrayObjetos = new Array();

    //funcionalidad al boton de añadir objetos al array
    btn_crear_obj.addEventListener('click', function(){
        arrayObjetos= añadirObjetos(arrayObjetos);
    }, false);

    let btn_mostrar = document.getElementById("btnmostrar");
    btn_mostrar.addEventListener('click', function(){
        
        mostrartodo.value ="";
        for (let i = 0; i < arrayObjetos.length; i++) {
            mostrarObjetos(arrayObjetos[i]);
            
        }
    }, false);

    btn_cambiar_precio.addEventListener("click", function(){
        for (let i = 0; i < arrayObjetos.length; i++) {
            var aleatorio = Math.floor((Math.random() * (100 - 1 + 1)) + 1)
            arrayObjetos[i].precio = aleatorio;
        }
               
        //document.body.innerHTML += "<input type='text' id='ver'>";
        
    }, false);

    var total = 0;
    btn_total.addEventListener('click', function(){
        for (let i = 0; i < arrayObjetos.length; i++) {
            total = total + arrayObjetos[i].precio;
            
        }
        alert("El precio total es: " + total);
    }, false);

}
function añadirObjetos(obj){
    let titulo=document.getElementById("titulo");
    let grupo=document.getElementById("grupo")
    let fecha=document.getElementById("fecha");

    //crear los objetos
    let cd1 = new Cd_musica (titulo.value, grupo.value, fecha.value);
    obj.push(cd1);
    //obj.push();
    return obj;
}
function mostrarObjetos(array){
    mostrartodo.value = mostrartodo.value + array.mostrar();
    
}


