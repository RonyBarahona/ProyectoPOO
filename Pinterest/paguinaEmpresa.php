<?php
session_start();
  if(!isset($_SESSION["token"])){
    header("Location: index.html");
  }

  if(!isset($_COOKIE["token"])){
    header("Location: index.html");
  }

  if($_SESSION["token"] != $_COOKIE["token"]){
    header("Location: index.html");
  }


?>


<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Pinterest - España</title>
    <link href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

</head>


<body>

<seccion id="seccion1" style="display:block;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 10px;">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <img src="IMG/logotipo.png" id="logotipo2">
                </li>
                <li class="nav-item active">
                    <button class=" btnStyle2 letra btnColor1 ">Inicio</button>
                </li>
                <li class="nav-item ">
                    <button class=" btnStyle2 letra btnColor2 " style="width: 90px; ">Siguiendo</button>
                </li>
                <li class="nav-item " style="margin-top: 15px; ">
                    <form class="form-inline my-2 my-lg-0 " style=" margin-left: 20px; ">
                        <input style="width: 910px; border-radius: 25px; height: 45px; " class="form-control mr-sm-2 " type="search " placeholder="Search " aria-label="Search ">

                    </form>
                </li>
                <li class="nav-item ">
                    <button class=" btnStyle3 letra btnColor3 "><svg style="color: #767676; " viewBox="0 0 24 24 " width="24 " height="24 "><path fill-rule="evenodd " d="M6 8a6 6 0 1112 0v2.917c0 .703.228 1.387.65 1.95L20.7 15.6a1.5 1.5 0 01-1.2 2.4h-15a1.5
                        1.5 0 01-1.2-2.4l2.05-2.733a3.25 3.25 0 00.65-1.95V8zm6 13.5A3.502 3.502 0 018.645 19h6.71A3.502 3.502 0 0112 21.5z "></path></svg>
                    </button>
                </li>
                <li class="nav-item ">
                    <button class=" btnStyle3 letra btnColor3 ">
                <svg style="color: #767676; " height="24 " width="24 " viewBox="0 0 24 24 " aria-hidden="true " aria-label=" " role="img "><path d="M18 12.5a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 18 12.5m-6 0a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 12
                        12.5m-6 0a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 6 12.5M12 0C5.925 0 1 4.925 1 11c0 2.653.94 5.086 2.504 6.986L2 24l5.336-3.049A10.93 10.93 0 0 0 12 22c6.075 0 11-4.925 11-11S18.075 0 12 0 "></path></svg>
            </button>
                </li>
                <li class="nav-item ">
                    <button class=" btnStyle3 letra btnColor3 ">
                <img  style="width: 22px; " alt=" " importance="auto " loading="auto " src="https://s.pinimg.com/images/user/default_75.png ">
            </button>
                </li>
                <li class="nav-item ">

                    <a href="loguot.php">cerra Sesion</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container" style="width:70%; background-color: rgb(255, 255, 255);">
        <div class="row">
            <div class="col-md-6">
                <img style="width:70%; margin-right: 0;" src="IMG/Emp1.jpg" alt="stylesheet">
            </div>
            <div id="MensajesInscripcion" class=" col-md-6 ">
                <h2 class="">Vamos a configurar tu perfil</h2><br>
                <h3 class="letrasInE">¿Cómo se llama tu negocio o marca?</h3>
                <input aria-invalid="false" class="form-control mr-sm-2 inputInE" style=" border-radius: 10px; height: 45px; " id="" placeholder="Nombre de la empresa" type="text" value="">
                <h3 class="letrasInE">¿Tienes un sitio web?</h3>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="Yes">
                    <div style="float:left; margin-right: 5px;" class="">Sí</div>
                    <input aria-invalid="false" class="form-control mr-sm-2 inputInE" style="margin-top: 0; width: 60%; border-radius: 10px; height: 45px; " id="" placeholder="www.misitioweb.com" type="url" value="">
                </div>
                <div>

                    <h3 style="margin-top: 1em;"></h3>
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="Not Yet">
                    <div class="">Aún no</div>
                </div>

                <div style="float:left;">
                    <h3 style="margin-top: 1em; float:left;" class="letrasInE">País&nbsp;/&nbsp;Región</h3>
                    <select id="" style="background-color: white; border: 1px solid rgb(151, 151, 151); border-radius: 8px; cursor: pointer; height: 40px; font-size: 16px; padding-left: 16px; width: 50%; appearance: none;">
                        </select>
                </div>
                <div>
                    <h3 class="letrasInE" style="float:left; margin-top: 1em;">Idioma</h3>
                    <select id="" style="background-color: white; border: 1px solid rgb(151, 151, 151); border-radius: 8px; cursor: pointer; height: 40px; font-size: 16px; padding-left: 16px; width: 60%; appearance: none;">
                        </select>
                </div>
                <br>
                <button type="button" onclick="cambiarMensajeInscripcion()" class="bt btn-primary" style="background-color: rgba(201, 197, 197, 0.521); color:rgb(158, 151, 151) ; left: 70%;">Siguiente</button>
            </div>
            <div id="MensajesInscripcion2" class=" col-md-6 " style="display:none;">
                <h2 class="">Describe tu marca</h2><br>
                <h8 class="">Obtén recomendaciones personalizadas basadas en tus detalles</h8>
                <h5 class="">¿En que se encuentra tu marca?</h5>
                <select placeholder="elige uno" id="" style="background-color: white; border: 1px solid rgb(151, 151, 151); border-radius: 8px; cursor: pointer; height: 40px; font-size: 16px; padding-left: 16px; width: 100%; appearance: none;">
                </select>
                <button type="button" onclick="" class="bt btn-primary" style="margin-top: 20em; margin-left: 20%; background-color: rgba(201, 197, 197, 0.521); color:rgb(158, 151, 151) ; left: 70%;" disabled="">volver</button>
                <button type="button" onclick="cambiarMensajeInscripcion2()" class="bt btn-primary" style="background-color: rgba(201, 197, 197, 0.521); color:rgb(158, 151, 151) ; left: 70%;">Siguiente</button>
            </div>
            <div id="MensajesInscripcion3" class=" col-md-6 " style="display:none;">
                <h2 class="">Describe tu marca</h2><br>
                <div data-test-id="biz-nux-account-type-step" class="">
                    <div class="">Obtén recomendaciones personalizadas basadas en tus detalles</div>
                </div>

                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="No estoy seguro">
                    <div style="float:left; margin-right: 5px;" class="">No estoy seguro/a</div>
                </div><br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="Blogger">
                    <div style="float:left; margin-right: 5px;" class="">Blogger</div>
                </div><br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="consumo">
                    <div style="float:left; margin-right: 5px;" class="">Bien de consumo, producto o servicio</div>
                </div><br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="Contratista">
                    <div style="float:left; margin-right: 5px;" class="">Contratista o proveedor de servicios</div>
                </div><br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="Persona">
                    <div style="float:left; margin-right: 5px;" class="">Persona influyente, personaje público o famoso</div>
                </div><br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="Tienda">
                    <div style="float:left; margin-right: 5px;" class="">Tienda minorista local o servicio local</div>
                </div><br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="Tienda en línea">
                    <div style="float:left; margin-right: 5px;" class="">Tienda en línea</div>
                </div><br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="Editor">
                    <div style="float:left; margin-right: 5px;" class="">Editor o medio de comunicación</div>
                </div><br>
                <button type="button" onclick="" class="bt btn-primary" style="margin-top: 5em; margin-left: 20%; background-color: rgba(201, 197, 197, 0.521); color:rgb(158, 151, 151) ; left: 70%;" disabled="">volver</button>
                <button type="button" onclick="cambiarMensajeInscripcion3()" class="bt btn-primary" style="background-color: rgba(201, 197, 197, 0.521); color:rgb(158, 151, 151) ; left: 70%;">Siguiente</button>

            </div>
            <div id="MensajesInscripcion4" class=" col-md-6 " style="display:none;">
                <h2 class="">¿En algún momento te va a interesar publicar anuncios en Pinterest?</h2><br>
                <h8 class="">Los anuncios ayudan a las marcas y los productos a llegar a más personas de los 400 millones que usan Pinterest todos los meses.</h8>
                <br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="Si">
                    <div style="float:left; margin-right: 5px;" class="">Sí, me interesa la publicidad</div>
                </div><br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="no">
                    <div style="float:left; margin-right: 5px;" class="">No, no estoy pensando en anunciarme</div>
                </div><br>
                <div style="margin-top: 1em;">
                    <input style="float:left; margin-right: 5px;" class="" id="" type="radio" value="aun no">
                    <div style="float:left; margin-right: 5px;" class="">Aún no lo he decidido</div>
                </div><br>
                <button type="button" onclick="" class="bt btn-primary" style="margin-top: 5em; margin-left: 20%; background-color: rgba(201, 197, 197, 0.521); color:rgb(158, 151, 151) ; left: 70%;" disabled="">volver</button>
                <button type="button" onclick="Seccion2()" class="bt btn-primary" style="background-color: rgba(201, 197, 197, 0.521); color:rgb(158, 151, 151) ; left: 70%;">Siguiente</button>


            </div>
        </div>
    </div>
    <!--<div class="" style="width: 28%;  background-color: ivory;">
        <div class="">
            <div class="">
                <div style="float:left;">
                    <h5 class="" style="margin-right: 100px; ">Configura la facturación</h5>
                </div>
                <div>
                    <img alt="icon" class="" style="width: 30px;" importance="auto" loading="auto" src="https://i.pinimg.com/originals/e1/67/10/e1671036e6344353357c0be190d2024e.png">
                </div><br>

            </div>
            <div style="margin-bottom:1em;">
                <div style="font-size: 14px;">Añade tu información de pago para empezar a publicar anuncios</div>
            </div>
        </div>
        <div class="" style="width: 100%;">
            <div style="float:left;">
                <button type="button" style="border-style: none; margin-right:1em; border-radius: 15px; width: 120px; height:50px;"><strong>la facturación</strong> </button>
            </div>
            <div>
                <button type="button" style="border-style: none; border-radius: 15px;"><strong>Quizá después</strong> </button>
            </div>
        </div>
    </div>-->
</seccion>

<section id="seccion2" style="display:none;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 10px;">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <img src="IMG/logotipo.png" id="logotipo2">
                </li>
                <li class="nav-item active">
                    <button class=" btnStyle2 letra btnColor1 ">Inicio</button>
                </li>
                <li class="nav-item ">
                    <button class=" btnStyle2 letra btnColor2 " style="width: 90px; ">Siguiendo</button>
                </li>
                <li class="nav-item " style="margin-top: 15px; ">
                    <form class="form-inline my-2 my-lg-0 " style=" margin-left: 20px; ">
                        <input style="width: 910px; border-radius: 25px; height: 45px; " class="form-control mr-sm-2 " type="search " placeholder="Search " aria-label="Search ">

                    </form>
                </li>
                <li class="nav-item ">
                    <button class=" btnStyle3 letra btnColor3 "><svg style="color: #767676; " viewBox="0 0 24 24 " width="24 " height="24 "><path fill-rule="evenodd " d="M6 8a6 6 0 1112 0v2.917c0 .703.228 1.387.65 1.95L20.7 15.6a1.5 1.5 0 01-1.2 2.4h-15a1.5
                        1.5 0 01-1.2-2.4l2.05-2.733a3.25 3.25 0 00.65-1.95V8zm6 13.5A3.502 3.502 0 018.645 19h6.71A3.502 3.502 0 0112 21.5z "></path></svg>
                    </button>
                </li>
                <li class="nav-item ">
                    <button class=" btnStyle3 letra btnColor3 ">
                <svg style="color: #767676; " height="24 " width="24 " viewBox="0 0 24 24 " aria-hidden="true " aria-label=" " role="img "><path d="M18 12.5a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 18 12.5m-6 0a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 12
                        12.5m-6 0a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 6 12.5M12 0C5.925 0 1 4.925 1 11c0 2.653.94 5.086 2.504 6.986L2 24l5.336-3.049A10.93 10.93 0 0 0 12 22c6.075 0 11-4.925 11-11S18.075 0 12 0 "></path></svg>
            </button>
                </li>
                <li class="nav-item ">
                    <button class=" btnStyle3 letra btnColor3 ">
                <img  style="width: 22px; " alt=" " importance="auto " loading="auto " src="https://s.pinimg.com/images/user/default_75.png ">
            </button>
            </li>
                <li class="nav-item ">
                <div class="dropleft "  style="border-radius:100%; margin-top:150%;">
                <a style=" border-radius:100%; width:25px;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"  aria-expanded="false" value="">
                 <ion-icon style="color:grey;" name="chevron-down-outline"></ion-icon>
                 </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="loguot.php">Cerrar Sesion</a>
                </div>
                </div>
                </li>

            </ul>
        </div>
    </nav>

    <div style="width:100%; ">
        <div class="row " style="padding-left:5rem; ">

            <div id="columnaPP1 " class="m-1 " style="width:18%; ">


            </div>

            <div id="columnaPP2 " class="m-1 " style="width:18%; ">

            </div>

            <div id="columnaPP3 " class="m-1 " style="width:18%; ">


            </div>

            <div id="columnaPP4 " class="m-1 " style="width:18%; ">

            </div>

            <div id="columnaPP5 " class="m-1 " style="width:18%; ">

            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal22" style="background-color: white;" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <button type="button" onclick="cerragrande()" class="salir2"><ion-icon id="iconoSalir" name="arrow-back-outline"></ion-icon></button>

        <div class="modal-dialog">
            <div class="modal-content" style="width: 200%; border-radius: 10px; left: -50%;">
                <div class="row">
                    <div id="imagenGrande" class="col-lg-6">
                        <img width="100%" height="100%" src="IMG/c2.jpg" alt="stylesheet">
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-2" style="">
                            <div style="float: left;">
                                <div class=""><button data-test-id="lego-button" aria-label="Más opciones" class="" style="display: block; border: none; padding: 0px; cursor: pointer; background: transparent; outline: none; border-radius: 50%;"><div data-test-id="lego-icon-wrapper" class="" style="border-radius: 50%;"><div class="" style="min-height: 44px; min-width: 44px;"><svg class="" height="20" width="20" viewBox="0 0 24 24" aria-label="Más opciones" role="img"><path d="M12 9c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3M3 9c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm18 0c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3z"></path></svg></div></div></button></div>
                            </div>

                            <div class="" style="float: left; margin-right: 15em;">
                                <div class=""><button data-test-id="lego-button" aria-label="Enviar" class="" style="display: block; border: none; padding: 0px; cursor: pointer; background: transparent; outline: none; border-radius: 50%;"><div data-test-id="lego-icon-wrapper" class="" style="border-radius: 50%;"><div class="" style="min-height: 44px; min-width: 44px;"><svg class="" height="20" width="20" viewBox="0 0 24 24" aria-label="Enviar" role="img"><path d="M21 14c1.1 0 2 .9 2 2v6c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2v-6c0-1.1.9-2 2-2s2 .9 2 2v4h14v-4c0-1.1.9-2 2-2zM8.82 8.84c-.78.78-2.05.79-2.83 0-.78-.78-.79-2.04-.01-2.82L11.99 0l6.02 6.01c.78.78.79 2.05.01 2.83-.78.78-2.05.79-2.83 0l-1.2-1.19v6.18a2 2 0 1 1-4 0V7.66L8.82 8.84z"></path></svg></div></div></button></div>
                            </div>

                            <div>
                                <button class="btn btn-primary" type="button" style="background-color: #e60023; border-style:none; border-radius:20px;"><strong> Guardar</strong></button>
                            </div>

                            <div data-test-id="closeup-title" class=""><br><br>

                                <h1 class="" style="margin-bottom: 1em;">▷ Disfruta de Tus Imagenes 💁🏼</h1>
                                <span class="">💁🏼 Los fondos más #hermosos par tu #móvil- #fondos #tumblr para tu #celular #fundostumblr #wallpappers #iphone #iphonewallpaper #fondosdepantallatumblr #apple #samsung #fondosiphone #imagenes…</span>

                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/controladorInscripcion.js "></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js "></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>


</body>

</html>