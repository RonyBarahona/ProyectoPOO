<?php
    session_start();
    include_once("../empresas.php");
    header("Content-Type: application/json");
    $_POST = json_decode(file_get_contents('php://input'),true);
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            $usuario= new Empresa($_POST['nombre'], $_POST['email'],$_POST['password'],$_POST['carpetas']);
            if($usuario != null){
                $resultado= array(
                    "codigoResultado"=>1,
                    "mensaje"=>"Usuario Autenticado",
                    "token"=>sha1(uniqid(rand(),true))
                );
                $_SESSION["token"]=$resultado["token"];
                setcookie("token",$resultado["token"],time()+(60*60*24*31),"/"); 
                setcookie("carpetas",$_POST['carpetas'],time()+(60*60*24*31),"/");     
                $usuario->guardarEmpresa();
                echo json_encode($resultado);
            }else{
                echo '{"codigoResultado":0,"mensaje":"El usuario no existe"}';     
                }
        break;
    }

?>