function par(numero) {
	let par=false;
	if(numero%2==0) {
		$par=true;
	}
	return par;
}

var num=parseInt(prompt("Introduce un numero",""));

if(par(num)){
	alert("El numero es par");
}else {
	alert("El numero no es par");
}