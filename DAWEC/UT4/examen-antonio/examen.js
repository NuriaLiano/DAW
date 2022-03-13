// Función visualiza
function visualiza(valores) {
  return valores.join("");
}

// Función visualiza_array
function visualiza_array(valores) {
  return "[" + valores.join(", ") + "]";
}

// Función extrae_numeros
function extrae_numeros(valores) {
  return valores.filter(Number);
}

// Función extrae_letras
function extrae_cadenas(valores) {
  return valores.filter(function (elemento) {
    return typeof elemento == "string";
  });
}

// Función menores
function menores_que(valores, valor) {
  return valores.filter(function (elemento) {
    return elemento < valor;
  });
}

// Función elevado_a
function elevado_a(valores, valor) {
  return valores.map(function (elemento) {
    return parseFloat(Math.pow(elemento, valor));
  });
}

// Función suma
function suma(valores) {
  return valores.reduce(function (a, b) {
    return parseFloat(a) + parseFloat(b);
  });
}

// Variables para el ejercicio 3
var tiradas = [];

// Funciones para el ejercicio 3
// Función tirada
function tirada() {
  return parseInt(Math.random() * 6 + 1);
}

// Función visualiza_array_guiones
function visualiza_array_guiones(valores) {
  return valores.join("-");
}

// Función visual
function visual(tiradas) {
  let caja_tiradas = document.getElementById("tiradas");
  let txt_tiradas = visualiza_array_guiones(tiradas);
  caja_tiradas.innerHTML = `${txt_tiradas}`;
}

// Función maximo
function maximo(valores) {
  let indice = 0,
    mayor = Number.MIN_VALUE;

  for (let contador = 0; contador < valores.length; contador++) {
    if (valores[contador] > mayor) {
      indice = contador;
      mayor = valores[contador];
    }
  }

  return indice;
}

// Función minimo
function minimo(valores) {
  let indice = 0,
    menor = Number.MAX_VALUE;

  for (let contador = 0; contador < valores.length; contador++) {
    if (valores[contador] < menor) {
      indice = contador;
      menor = valores[contador];
    }
  }

  return indice;
}

// Función informe
function informe(tiradas) {
  // Nos guardamos una copia de tiradas
  let copia_tiradas = tiradas.slice();

  let informe = [];
  for (let contador = 1; contador <= 6; contador++) {
    // Con filter, obtenemos las ocurrencias de cada número
    let ocurrencias = copia_tiradas.filter(function (elemento) {
      return elemento == contador;
    });

    // Las metemos al array
    informe.push(ocurrencias.length);
  }

  // Para el mayor y el menor
  informe.push(maximo(informe));
  informe.push(minimo(informe));

  return informe;
}

// Función visual_estadistica
function visual_estadistica(tiradas) {
  let estadisticas = document.getElementById("estadisticas");
  let informe_tiradas = informe(tiradas);

  estadisticas.innerHTML = "";
  for (let contador = 1; contador <= 6; contador++) {
    estadisticas.innerHTML += `<span class="numero">Nº ${contador}</span>
      <input type="text" id="${contador}" readonly  value="${
      informe_tiradas[contador - 1]
    }" />

      <br><br>`;
  }

  estadisticas.innerHTML += `<p>Mayor: Nº <b>${informe_tiradas[6] + 1}</b></p>`;
  estadisticas.innerHTML += `<p>Menor: Nº <b>${informe_tiradas[7] + 1}</b></p>`;
}

// Evento de carga de la página
addEventListener(
  "load",
  function () {
    // Ejercicio 1
    let numeros = [2, 4, 6, 8, 10, 12, 13, 14, 18, 20, 30];
    let btn_sumar = document.getElementById("sumar");

    // Evento botón sumar
    btn_sumar.addEventListener(
      "click",
      function () {
        // Hacemos primero una copia y trabajamos sobre ella
        let copia_numeros = numeros.slice();

        let ejercicio_1 = document.getElementById("ejercicio_1");

        // Llamamos a las funciones
        let menores_que_10 = menores_que(copia_numeros, 10);
        let cuadrados = elevado_a(menores_que_10, 2);
        let suma_cuadrados = suma(cuadrados);

        // Mostramos el ejercicio_1 con template string
        ejercicio_1.innerHTML = `<p>Array original: <b>${visualiza_array(
          copia_numeros
        )}</b></p>`;
        ejercicio_1.innerHTML += `<p>Suma de los cuadrados de los menores que 10: <b>${suma_cuadrados}</b></p>`;
      },
      false
    );

    // Ejercicio 2
    var misterio = [
      "l",
      1,
      "a",
      2,
      2,
      5,
      "p",
      5,
      7,
      5,
      3,
      "e",
      6,
      "r",
      7,
      6,
      5,
      3,
      2,
      1,
      "s",
      9,
      9,
      9,
      6,
      "e",
      2,
      "v",
      5,
      "e",
      3,
      "r",
      2,
      "a",
      1,
      6,
      4,
      1,
      2,
      "n",
      2,
      "c",
      3,
      5,
      5,
      5,
      7,
      "i",
      4,
      "a",
      5,
      2,
      1,
      3,
      "e",
      6,
      "s",
      7,
      "l",
      4,
      "a",
      3,
      "c",
      2,
      3,
      1,
      5,
      3,
      2,
      "l",
      3,
      "a",
      4,
      "v",
      5,
      "e",
      6
    ];
    let btn_descifrar = document.getElementById("descifrar");

    // Evento botón extraer
    btn_descifrar.addEventListener(
      "click",
      function () {
        let ejercicio_2 = document.getElementById("ejercicio_2");

        // Llamamos a las funciones
        let clave_numerica = extrae_numeros(misterio);
        let clave_cadena = extrae_cadenas(misterio);

        // Mostramos el ejercicio_2 con template string
        ejercicio_2.innerHTML = `<p>Misterio: <b>${visualiza(
          misterio
        )}</b></p>`;
        ejercicio_2.innerHTML += `<p>Cadena clave: <b>${visualiza(
          clave_cadena
        )}</b></p>`;
        ejercicio_2.innerHTML += `<p>Cifra clave: <b>${visualiza(
          clave_numerica
        )}</b></p>`;
      },
      false
    );

    // Ejercicio 3
    let btn_tirar = document.getElementById("tirar");
    let btn_ver_tiradas = document.getElementById("ver_tiradas");
    let btn_ver_estadisticas = document.getElementById("ver_estadisticas");

    // Evento botón tirar
    btn_tirar.addEventListener(
      "click",
      function () {
        let txt_tirada = tirada();

        // Cambiamos el contenido de la caja
        let p_tirada = document.getElementById("tirada");
        p_tirada.innerHTML = txt_tirada;

        // Añadimos una tirada
        tiradas.push(txt_tirada);
      },
      false
    );

    // Evento botón ver_tiradas
    btn_ver_tiradas.addEventListener(
      "click",
      function () {
        if (tiradas.length > 0) {
          // Cambiamos el contenido de la caja
          visual(tiradas);
        } else {
          alert("No has tirado todavía");
        }
      },
      false
    );

    // Evento botón ver_estadisticas
    btn_ver_estadisticas.addEventListener("click", function () {
      if (tiradas.length > 0) {
        // Cambiamos el contenido de la caja
        visual_estadistica(tiradas);
      } else {
        alert("No has tirado todavía");
      }
    });
  },
  false
);