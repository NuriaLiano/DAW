


addEventListener('load', inicio, false);

function inicio(){
        

    
    var xhr;
    xhr = new XMLHttpRequest();
    
    xhr.open('POST', 'superheroes.json', true),
    xhr.send(null);

    xhr.onreadystatechange = muestracontenido;

    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
               //var personaje = new Personajes();
                let fich = xhr.responseText;
                //console.log(arrayFich);
                let jsonPrueba = JSON.parse(fich).superheroes.members;
                let selectSuperHeroe = document.querySelector("#superheroe");

                for (let i = 0; i < jsonPrueba.length; i++) {
                    let optNuevo = document.createElement("option");
                    optNuevo.setAttribute("value", jsonPrueba[i].nombre);
                    let contenido = document.createTextNode(jsonPrueba[i].nombre)

                    optNuevo.appendChild(contenido);
                    selectPais.appendChild(optNuevo);
                }

                selectSuperHeroe.addEventListener('change', function(){
                    var seleccionado = this.options[selectSuperHeroe.selectedIndex].value;
                    //alert(seleccionado);
                    
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
                document.querySelector('#imprimir').innerHTML="Codigo de error " + xhr.status;
            }
        }  
    }
}







/*function inicio (){
    alert("prueba")
    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP"); 
    }
    
    xhr.open ('GET', 'superheroes.json',true);
    xhr.send (null);

    xhr.onreadystatechange = muestracontenido;
    

    function muestracontenido (){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
                
               let fich = xhr.responseXML; 
               let grupo= fich.querySelector("squadName");
               let ciudad= fich.querySelector("homeTown");
               let anio= fich.querySelector("formed");
               let base= fich.querySelector("secretBase");
               let activo= fich.querySelector("active");
               let miembros= fich.querySelector("members");
               let sele = document.createElement("select");
                for (let i = 0; i < fich.length; i++) {

                    /*let opcion = document.createElement("option");
                    sele.appendChild(opcion);*/
                    //document.querySelector("#imprimir").value = "prueba";
               // }
                //document.body.appendChild(sele);
                
            //}else{
                //document.getElementById('contenedor').value="Codigo de error " + xhr.status;
            //}
       // }  
    //}
    

//}*/