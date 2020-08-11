function numeroCarpeta(max, min) {
    return Math.floor(Math.random() * (max - min)) + min;
}

var carpeta = ["Deportes", "Historia", "Motos", "Autos", "Paisajes"];

function leerCookie(nombre) {
    var lista = document.cookie.split(";");
    for (i in lista) {
        var busca = lista[i].search(nombre);
        if (busca > -1) { micookie = lista[i] }
    }
    var igual = micookie.indexOf("=");
    var valor = micookie.substring(igual + 1);
    return valor;
}

var valor = leerCookie("carpetas");
console.log(valor);

var listaCarpetas = valor.split("%2C");
console.log(listaCarpetas);

var imagenesTamaño = ["360", "280", "200", "400"];

function tamImagenes() {
    let eleccion = numeroCarpeta(4, 0);
    return imagenesTamaño[eleccion];
}


function LlenarPaguinaP() {
    for (var a = 1; a < 30; a++) {
        //var imagen = usuarios.carpetas[0]
        for (var i = 0; i < listaCarpetas.length; i++) {
            for (var j = 0; j < carpeta.length; j++) {
                if (listaCarpetas[i] == carpeta[j]) {
                    document.getElementById(`columnaPP${numeroCarpeta(1,6)} `).innerHTML += `
                    <div>
                        <button id="btnGuardar" class="btnImagenes" style="position: absolute; margin-left: 150px; margin-top: 10px;">
                        Guardar
                        </button>
                        <div id="botonImagen" onclick="zoom()" style="cursor: zoom-in;">
                            <img src="IMG/${j}/${a}.jpg "  class="img " style="height: ${tamImagenes()}px;" alt="stylesheet ">
                        </div>
                    </div>  `
                } else {
                    console.log("hay algun problema");
                }
            }
        }
    }
}

LlenarPaguinaP();



function zoom() {
    console.log("funciono");
}