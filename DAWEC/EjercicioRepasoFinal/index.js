addEventListener('load', inicio, false);


function inicio (){

    //arrays
    var descripcion = ["descri1", "descri2", "descri3"];
    var arrayObjetos = [];

    //recoger valores de los input
    var pizza = document.querySelector("#cantiPizza");
    var tortellini = document.querySelector("#cantiTorti");
    var lasagna = document.querySelector("#cantiLasagna");

    //recoger botones
    var btnRegistrar = document.querySelector("#registrar");
    var btnBorrar = document.querySelector("#borrar");

    var inputTotal = document.querySelectorAll('input[type=number]');

    btnBorrar.addEventListener('click', function(){
        for (let i = 0; i < inputTotal.length; i++) {
            inputTotal[i].value = "";
            
        }
    }, false)
    
    btnRegistrar.addEventListener('click', function(){
        

        //crear objeto
        var pedido = new PedidosObj(1, descripcion, recogerRadios());
        
        
        var totalPizzas = pedido.calcular(parseInt(pizza.value),6.5);
        var totalTorte = pedido.calcular(parseInt(tortellini.value),16.5);
        var totalLasa = pedido.calcular(parseInt(lasagna.value),12.5);

        inputTotal.value = totalPizzas + totalTorte + totalLasa;


    }, false);

}

function recogerRadios (){
    //recoger la forma de pago
    var pago = "";
    var sel = document.querySelectorAll('input[type="radio"]');
    for (let i = 0; i < sel.length; i++) {
        if(sel[i].checked){
           pago = sel[i].value;
           //alert(pago);
        }
    }
    return pago;
}
 
function crearJSON (pizza, torte, lasa){
    var xhr;
    xhr = new XMLHttpRequest();
    
    
    
    //form data
    var datos = new FormData();
    //variable valor
    datos.append('nombre', nombre);
    datos.append('edad', edad);
    datos.append('dni', dni);
    datos.append('sexo', sexo);
    datos.append('peso', peso);
    datos.append('altura', altura);

    
    //fichero que valida
    let url="pagina1.php";

    xhr.open ("POST", url, true);
    xhr.send (datos);

    xhr.onreadystatechange = muestracontenido;
    

    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
               document.querySelector("#contenedor").value = "creado con exito";
            }else{
                document.querySelector('#contenedor').innerHTML="Codigo de error " + xhr.status;
            }
        }  
    }
}