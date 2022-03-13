addEventListener('load', inicio, false);

var texto=document.getElementById("textoPintar");


function inicio(){
	let pizarra=document.getElementById("pizarra");
	let casillas =parseInt(prompt("Introduce el numero de casillas entre 1300 y 1550"));
		while(isNaN(casillas)){
			casillas =parseInt(prompt("Introduce el numero de casillas entre 1300 y 1550"));
		}

		if (casillas<1300) {
			casillas=1300;
		}
		else if (casillas>1550) {
			casillas=1550;
		}
	let pintar=false;
	let bTotal=document.getElementById("borrarTodo");
	let bParcial=document.getElementById("borradoParcial");
	let colorFondo=document.getElementById("colorDeFondo");
	let colorSelecionado=document.getElementById("colorSelecionado");


	
		//Añadir las Casillas de la Pizarra
	 for(var i=0;i<casillas;i++){
                var op=document.createElement('div');
                var te=document.createTextNode("");
                op.appendChild(te);
                op.className = "casilla";
                pizarra.appendChild(op);
            }

            //Pintar las casillas

       var divs = document.querySelectorAll('.casilla');

	   colorSelecionado.addEventListener('click',function(){
			pintar=true;
	   },false);
       
    for (var j = 0; j <divs.length; j++) {

    	divs[j].addEventListener('mouseover', function(){

    		if (pintar) {
    			let color=document.getElementById("colorSelecionado").value;
				this.style.backgroundColor = color;
    		}
    	
			
		}, false);

    	divs[j].addEventListener('click', function(){
			if (pintar) {
				pintar=false;
				texto.innerHTML="no pintando";
			}
			else{
				pintar=true;
				texto.innerHTML="pintando";
			}
		}, false);
	}

		//Borrado de casillas

		bParcial.addEventListener('click',function(){

			pintar=false;
			for(var k=0;k<divs.length;k++){

					divs[k].addEventListener('mouseover', function(){
						if (pintar) {
							this.style.backgroundColor = "white";
						}
							
				}, false);
		}

	},false);

	bTotal.addEventListener('click',function(){
		for(var l=0;l<divs.length;l++){
			divs[l].style.backgroundColor="white";
		}

	},false);


	//AMPLIACION:
	//Pintar el fondo de la pizarra

	colorFondo.addEventListener('click',function(){
		for(var m=0;m<divs.length;m++){
			let pcolor=document.getElementById("paletaFondo").value;
			divs[m].style.backgroundColor=pcolor;
		}
	},false);




}



