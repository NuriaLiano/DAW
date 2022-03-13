addEventListener('load', inicio, false);



function inicio (){
    var todoscheckbox;
    var casillas = document.querySelector("#casillas");
    var btnimprimir = document.querySelector("#imprimir");
    btnimprimir.addEventListener('click', function(){
       if (casillas.value >= 1 && casillas.value <=10) {
            for (let i = 1; i <= casillas.value; i++) {
                var texto = document.createTextNode("op. " + i);
                var nuevoinput = document.createElement("input");
                nuevoinput.setAttribute("type", "checkbox");
                nuevoinput.setAttribute("id", "fila");
                var label = document.createElement("label");
                label.appendChild(texto);
                document.body.appendChild(label);
                document.body.appendChild(nuevoinput);
                
            }
       }
       todoscheckbox = document.querySelectorAll("#fila");
       todoscheckbox.addEventListener("click", function(){
        
        for (let i = 0; i < todoscheckbox.length; i++) {
            alert(todoscheckbox[i].getAttribute("checked"))
            
        }
       }, false);
       

    }, false);
    

    var mensajes = document.querySelector("#mensajes");
        
        alert(todoscheckbox.length)
       for (let i = 0; i < todoscheckbox.length; i++) {
           alert(todoscheckbox[i].getAttribute("id"))
           
       }
    
    var marcartodo = document.querySelector("#todos");
    marcartodo.addEventListener("checked", function(){
        todoscheckbox.setAttribute("checked");
    }, false);


}