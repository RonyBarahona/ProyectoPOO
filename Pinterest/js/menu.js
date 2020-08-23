window.addEventListener("keydown", function(e) {
    // space and arrow keys
    if ([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
        e.preventDefault();
    }
}, false);


/*parent.addEventListener('wheel', function() {
    console.log('El boton intermedio (rueda) del ratón ha sido activado');
    var body = document.body; // For Safari
    var html = document.documentElement; // Chrome, Firefox, IE and Opera places the overflow at the html level, unless else is specified. Therefore, we use the documentElement property for these browsers
    body.scrollTop = 700;
    html.scrollTop = 700;
});*/


function iniciar() {
    var body = document.getElementById('slider-contenedor');
    setTimeout(function() {
        body.style.transform = "translate(-116%)"
        body.style.transition = "transform 0s"
        document.getElementById('volver').style.backgroundColor = "rgb(97, 140, 123)";
        document.getElementById('notas1').style.color = "rgb(97, 140, 123)";
        document.getElementById('elecciones3').style.backgroundColor = "rgb(97, 140, 123)";
        document.getElementById('elecciones1').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
        document.getElementById('elecciones2').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
        document.getElementById('elecciones4').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
    }, 4000);
    setTimeout(function() {
        body.style.transform = "translate(-232%)"
        body.style.transition = "transform 0s"
        document.getElementById('volver').style.backgroundColor = "rgb(0, 118, 211)";
        document.getElementById('notas2').style.color = "rgb(0, 118, 211)";
        document.getElementById('elecciones2').style.backgroundColor = "rgb(0, 118, 211)";
        document.getElementById('elecciones1').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
        document.getElementById('elecciones4').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
        document.getElementById('elecciones3').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
    }, 8000);
    setTimeout(function() {
        body.style.transform = "translate(-348%)"
        body.style.transition = "transform 0s"
        document.getElementById('volver').style.backgroundColor = "rgb(64, 122, 87)";
        document.getElementById('notas3').style.color = "rgb(64, 122, 87)";
        document.getElementById('elecciones1').style.backgroundColor = "rgb(64, 122, 87)";
        document.getElementById('elecciones4').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
        document.getElementById('elecciones2').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
        document.getElementById('elecciones3').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
    }, 12000);
    setTimeout(function() {
        body.style.transform = "translate(0%)"
        body.style.transition = "transform 0s"
        document.getElementById('volver').style.backgroundColor = "rgb(194, 139, 0)";
        document.getElementById('notas').style.color = "rgb(194, 139, 0)";
        document.getElementById('elecciones4').style.backgroundColor = "rgb(194, 139, 0)";
        document.getElementById('elecciones1').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
        document.getElementById('elecciones2').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
        document.getElementById('elecciones3').style.backgroundColor = "rgba(112, 124, 123, 0.699)";
    }, 16000);



}
iniciar();
var solo = setInterval('iniciar()', 16000);

function myFunction2() {
    var body = document.getElementById('slider-contenedor');
    body.style.transform = "translate(0%)"

}

function myFunction3() {
    var body = document.getElementById('slider-contenedor');
    body.style.transform = "translate(-116%)"
    body.style.transition = "transform 0s"

}

function myFunction4() {
    var body = document.getElementById('slider-contenedor');
    body.style.transform = "translate(-232%)"
    body.style.transition = "transform 0s"

}

function myFunction5() {
    var body = document.getElementById('slider-contenedor');
    body.style.transform = "translate(-348%)"
    body.style.transition = "transform 0s"

}


function myFunction() {
    var body = document.body; // For Safari
    var html = document.documentElement; // Chrome, Firefox, IE and Opera places the overflow at the html level, unless else is specified. Therefore, we use the documentElement property for these browsers
    body.scrollTop = 700;
    html.scrollTop = 700;

    //document.getElementById('volver').style.display = 'none';
    document.getElementById('cuerpo').style.overflowY = 'hide';
    $('#modalBajo').modal('show');

}



function myFunction1() {
    var body = document.body; // For Safari
    var html = document.documentElement; // Chrome, Firefox, IE and Opera places the overflow at the html level, unless else is specified. Therefore, we use the documentElement property for these browsers
    body.scrollTop = 0;
    html.scrollTop = 0;

    //document.getElementById('volver').style.display = 'none';

    $('#modalBajo').modal('hide');

}

function cuentaEmpresa() {
    $('#modalBajo2').modal('show');
}



/*function iniciar() {
    var coloresP = ["rgb(64, 122, 87)", "rgb(194, 139, 0)", "rgb(97, 140, 123)", "rgb(0, 118, 211)"];
    contador = 0;
    for (let index = 0; index < coloresP.length; index++) {
        const element = coloresP[index];
        document.getElementById('#volver').style.backgroundColor = element;
    }


}

setInterval('iniciar()', 1000);
*/


function cerrarModal() {
    $('#exampleModal').modal('hide')
}

function cerrarModal2() {
    $('#modalRegistro').modal('hide')
}

function cerrarModal3() {
    $('#modalBajo2').modal('hide')
}