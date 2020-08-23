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
        for (var i = 0; i < listaCarpetas.length; i++) {
            for (var j = 0; j < carpeta.length; j++) {
                if (listaCarpetas[i] == carpeta[j]) {
                    let tama = tamImagenes();
                    document.getElementById(`columnaPP${numeroCarpeta(1,6)} `).innerHTML += `
                    <div>
                        <button  id="btnGuardar${j}${a}" onmouseover="zoom('btnGuardar${j}${a}')" style="position: absolute; visibility:hidden; margin-left: 150px; margin-top: 10px;" class="btnImagenes" >
                        Guardar
                        </button>
                        <button  id="btnOpc${j}${a}" onmouseover="zoom('btnOpc${j}${a}')" style="border-radius:100%; border-style:none; font-size:20px; background-color:rgb(137, 137, 138); color:black; position: absolute; visibility:hidden; margin-left: 160px; margin-top: ${tama-70}px; z-index:3;"  >
                        <ion-icon style="color:black;" name="ellipsis-horizontal-outline"></ion-icon>
                        </button>
                        <div type="button"  id="botonImagen"  onclick="verZoom(${j},${a})" onmouseover="zoom('btnGuardar${j}${a}','btnOpc${j}${a}')" onmouseout="zoomSalir('btnGuardar${j}${a}','btnOpc${j}${a}')" style="cursor: zoom-in;">
                            <img src="IMG/${j}/${a}.jpg "  class="img " style="height: ${tama}px;" alt="stylesheet ">
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

function cambiarMensajeInscripcion() {
    document.getElementById('MensajesInscripcion2').style.display = "block"
    document.getElementById('MensajesInscripcion').style.display = "none"
}

function cambiarMensajeInscripcion2() {
    document.getElementById('MensajesInscripcion3').style.display = "block"
    document.getElementById('MensajesInscripcion2').style.display = "none"
}

function cambiarMensajeInscripcion3() {
    document.getElementById('MensajesInscripcion4').style.display = "block"
    document.getElementById('MensajesInscripcion3').style.display = "none"
}

function cambiarMensajeInscripcion3() {
    document.getElementById('MensajesInscripcion4').style.display = "block"
    document.getElementById('MensajesInscripcion3').style.display = "none"
}

function Seccion2() {
    document.getElementById('seccion2').style.display = "block"
    document.getElementById('seccion1').style.display = "none"
}

function zoomSalir(id, id2) {
    document.getElementById(id).style.visibility = "hidden";
    document.getElementById(id2).style.visibility = "hidden";
    console.log("funciono");
}

function zoom(id, id2) {
    document.getElementById(id).style.visibility = "visible";
    document.getElementById(id2).style.visibility = "visible";

    console.log("funciono");
}

function cerragrande() {
    $('#exampleModal22').modal('hide');
}

function verZoom(carpeta, imagen) {
    document.getElementById('imagenGrande').innerHTML = `<img width="100%" height="100%" src="IMG/${carpeta}/${imagen}.jpg" alt="stylesheet"></img>`;
    $('#exampleModal22').modal('show');

}