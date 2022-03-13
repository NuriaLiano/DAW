function animal(nombre,especie,numeroDePatas,tieneCola){
		this.nombre = nombre;
		this.especie = especie;
		this.numeroDePatas = numeroDePatas;
		this.tieneCola = tieneCola;
		this.verInfo = function(){
			var cadena = "";
			return cadena = this.nombre+", "+this.especie+", "+this.numeroDePatas+", "+this.tieneCola;
	}
}