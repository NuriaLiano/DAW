function vaca(nombre,especie,numeroDePatas,tieneCola,litrosLeche){
		animal.call(this,nombre,especie,numeroDePatas,tieneCola);
		this.litrosLeche = litrosLeche;
		this.ordeñar = function(){
			this.litrosLeche--;
		}
}