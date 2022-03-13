addEventListener('load', inicio, false);

function inicio (){

    var categoria = ["comestibles", "hogar", "calzado", "ropa", "accesorios"];
    
    //rellenar select
    for (let i = 0; i < categoria.length; i++) {
        //document.write(categoria[i]);
        var opcion = document.createElement("option");
        opcion.setAttribute("value", categoria[i]);
        var sele = document.querySelector("#categorias");
        var contenido = document.createTextNode(categoria[i]);
        opcion.appendChild(contenido);
        sele.appendChild(opcion);
    }
    
    sele.addEventListener('change', function(){
         //mostrar codigo
     var autoincrementado = Math.floor(Math.random() * (9 - 0) + 0);
     var le = catElegida.charAt(0);
     var tra = catElegida.charAt(1)
     var posicion = categoria.findIndex(catElegida);
     var cod = le + tra + posicion + autoincrementado;
        var catElegida = this.options[sele.selectedIndex].value;
    }, false);

   
    document.getElementById("codigo").value = cod;
    



    var btnCrear = document.getElementById("crear");
    btnCrear.addEventListener('click', function(){
        var arrayArticulos = [];
        var articulo = new Articulo (catElegida, cod, descripcion, pvp);
        arrayArticulos.push(articulo);
        localStorage.setItem("articulo",articulo);
    }, false);

    


}

function catElegida (){
    
        
        var segunSelect = document.createElement("select");
        segunSelect.setAttribute("id", "segunSelect");
        

    }
