function login() {

    axios({
        method: 'POST',
        url: 'Backend/API/api.php',
        data: {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value
        }
    }).then(result => {
        if (result.data.codigoResultado == 1) {
            window.location.href = "galeria-Paguinaprincipal.php"
        } else {
            document.getElementById('error1').style.display = "block";
        }
    }).catch(err => {
        console.log(err);
    });


}

function guardarUsuarios() {

    axios({
        method: 'POST',
        url: 'Backend/API/api-guardarUsuario.php',
        data: {
            email: document.getElementById('email2').value,
            password: document.getElementById('password2').value,
            carpetas: "Motos,Deportes"
        }
    }).then(result => {
        if (result.data.codigoResultado == 1) {
            window.location.href = "galeria-Paguinaprincipal.php"
        } else {
            console.log(result);
        }
    }).catch(err => {
        console.log(err);
    });


}