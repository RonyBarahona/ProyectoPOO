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

    <script src="js/procesar.js "></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>




</body>

</html>