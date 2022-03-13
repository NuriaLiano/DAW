function tigre (nombre,especie,numeroDePatas,tieneCola,nVictimas){
		animal.call(this,nombre,especie,numeroDePatas,tieneCola);
		this.nVictimas = nVictimas;
		this.otraVictima = function(){
			this.nVictimas++;
		}
}