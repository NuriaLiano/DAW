addEventListener("load",inicio,false);
function inicio(){
	var vacas = new Array();
	var tigres = new Array();
	vaca.prototype = new animal();
	tigre.prototype = new animal();
	var animalA;
	var animalB;
	var boton1 = document.getElementById("v");
	boton1.addEventListener("click",function(){
		var A = document.getElementById("n").value;
		var B = document.getElementById("e").value;
		var C = document.getElementById("ndp").value;
		var D = document.getElementById("beta").value;
		var E = document.getElementById("llev").value;
		animalA = new vaca(A,B,C,D,E);
		vacas.push(animalA);
		document.getElementById("n").value="";
		document.getElementById("ndp").value="";
		document.getElementById("llev").value="";
	},false);
	var boton2 = document.getElementById("t");
	boton2.addEventListener("click",function(){
		var A = document.getElementById("n").value;
		var B = document.getElementById("e").value;
		var C = document.getElementById("ndp").value;
		var D = document.getElementById("beta").value;
		var F = document.getElementById("nvet").value;
		animalB = new tigre(A,B,C,D,F);
		tigres.push(animalB);
		document.getElementById("n").value="";
		document.getElementById("ndp").value="";
		document.getElementById("nvet").value="";
	},false);
	var boton3 = document.getElementById("ver1");
	boton3.addEventListener("click",function(){
		verVacas(vacas);
	},false);
	var boton4 = document.getElementById("ver2");
	boton4.addEventListener("click",function(){
		verTigres(tigres);
	},false);
}

function verVacas(array){
	document.getElementById("result1").innerHTML = "";
	for (var i = 0; i < array.length; i++) {
		document.getElementById("result1").innerHTML += array[i].verInfo()+", "+array[i].litrosLeche+"<br>";
	}
}

function verTigres(array){
	document.getElementById("result2").innerHTML = "";
	for (var i = 0; i < array.length; i++) {
		document.getElementById("result2").innerHTML += array[i].verInfo()+", "+array[i].nVictimas+"<br>";
	}
}