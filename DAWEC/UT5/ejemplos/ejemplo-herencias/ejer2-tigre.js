function tigre (nombre, especie, numPatas, tieneCola, nvictimas){
    animal.call(this, nombre, especie, numPatas, tieneCola);
    this.nvictimas = nvictimas;
    this.otravictima = function(){
        this.nvictimas++;
    }
}