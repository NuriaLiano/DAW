addEventListener('load', inicio, false);

function inicio(){
        
    
    var btnLeer = this.document.querySelector("#btnLeer");
    btnLeer.addEventListener("click", leer, false);
}

function leer (){
    
    var xhr;
    xhr = new XMLHttpRequest();
    
    xhr.open('POST', 'paisesyciudades.json', true),
    xhr.send(null);

    xhr.onreadystatechange = muestracontenido;

    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
               //var persona = new Persona();
                let fich = xhr.responseText;
                //console.log(arrayFich);
                let jsonPrueba = JSON.parse(fich).listadoPaises.pais;
                
                let selectPais = document.querySelector("#paises");
               

                //document.querySelector("#contenedor").value = jsonPrueba.listadoPaises.pais[1].nombre;
                for (let i = 0; i < jsonPrueba.length; i++) {
                    //document.querySelector("#contenedor").value =
                    //alert(jsonPrueba.listadoPaises.pais[i].nombre);
                    
                    let optNuevo = document.createElement("option");
                    optNuevo.setAttribute("value", jsonPrueba[i].nombre);
                    let contenido = document.createTextNode(jsonPrueba[i].nombre)
                    //optNuevo.text = jsonPrueba.pais[i].nombre;
                    optNuevo.appendChild(contenido);
                    selectPais.appendChild(optNuevo);
                }

                selectPais.addEventListener('change', function(){
                    var seleccionado = this.options[selectPais.selectedIndex].value;
                    alert(seleccionado);
                    
                    var segunSelect = document.createElement("select");
                    segunSelect.setAttribute("id", "segunSelect");
                    for (let i = 0; i < jsonPrueba.length; i++) {
                        alert(jsonPrueba[i].nombre == seleccionado)
                        /*if(jsonPrueba[i].nombre == seleccionado){
                            var segunOpt = document.createElement("option");
                            segunOpt.setAttribute("value", jsonPrueba[i].nombre);
                            let contenido = document.createTextNode(jsonPrueba[i].nombre)
                            segunOpt.appendChild(contenido);
                            selectPais.appendChild(segunOpt);
                        }*/
                        
                    }

                }, false);

                
            }else{
                document.querySelector('#contenedor').innerHTML="Codigo de error " + xhr.status;
            }
        }  
    }
}