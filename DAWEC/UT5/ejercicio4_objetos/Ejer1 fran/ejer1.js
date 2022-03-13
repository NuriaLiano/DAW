addEventListener('load', inicio, false);

var lista = [];

var introTitulo;
var introGrupo;
var introPrecio;
var introFecha;

var introDisco;
var introPrecioDiscos;

var resultado;
var verDiscos;

var imagen;
var verPrecio;

var listaImg;



function inicio() {

    introTitulo = document.getElementById("introTitulo");
    introGrupo = document.getElementById("introGrupo");
    introPrecio = document.getElementById("introPrecio");
    introFecha = document.getElementById("introFecha");

    introDisco = document.getElementById("introDisco");
    introPrecioDiscos = document.getElementById("meterPrecio");

    resultado = document.getElementById("resultado");
    verDiscos = document.getElementById("verDiscos");

    imagen = document.getElementById("abirImagen");
    verPrecio = document.getElementById("precioSeleccion");

    listaImg = document.getElementsByTagName('img');


    introDisco.addEventListener('click', function () {

        let tit = introTitulo.value;
        let gru = introGrupo.value;
        let fech = introFecha.value;
        let img = imagen.files[0].name;

        let disco = new Disco(tit, gru, fech,img);

        lista.push(disco);

        introTitulo.value = "";
        introGrupo.value = "";
        imagen.value = "";
        introFecha.value = "";

    }, false);


    verDiscos.addEventListener('click', function () {

        let texto = "";

        let precio = 0;

        for (let i = 0; i < lista.length; i++) {

            texto += lista[i].ver();
            precio += parseFloat(lista[i].precio);

            listaImg[i].setAttribute("src",`Img/${lista[i].imagen}`);

            listaImg[i].addEventListener('click',function(){
                
                verPrecio.innerHTML = lista[i].precio;
            },false);
        }

        resultado.value = texto;
        resultado.value += "La suma total del precio del lote es: " + precio.toFixed(2);

    }, false);


    introPrecioDiscos.addEventListener('click', function () {

       
        for (let i = 0; i < lista.length; i++) {

            let precioDis = Math.random() * (30 - 10);
            lista[i].precio= precioDis.toFixed(2);
        }

        introPrecio.value = "";


    }, false);


}