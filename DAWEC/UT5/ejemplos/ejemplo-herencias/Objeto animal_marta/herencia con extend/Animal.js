class Animal {
    constructor(nombre, especie, numerodepatas, tienecola) {
        this.nombre = nombre;
        this.especie = especie;
        this.numerodepatas = numerodepatas;
        this.tienecola = tienecola;
    }
    mostrar() {
        let cadena = "El animal " + this.nombre + " es de la especie " + this.especie + ", tiene " + this.numerodepatas + " patas";
        if (this.tienecola == true) {
            cadena += " y tiene cola.";
        } else {
            cadena += " y no tiene cola.";
        }

        return cadena;
    }

}
class Vaca extends Animal {
    constructor(nombre,especie,numerodepatas,tienecola, litrosleche) {
        super(nombre,especie,numerodepatas,tienecola)
        this.litrosleche = litrosleche;
    }
    ordeñar() {
        if (this.litrosleche != 0) {
            this.litrosleche--;
        }
    }
}
class Tigre extends Animal {
    constructor(nombre,especie,numerodepatas,tienecola, nvictimas) {
        super(nombre,especie,numerodepatas,tienecola)
        this.nvictimas = nvictimas;
    }
    otraVictima() {
        this.nvictimas++;
    }
}