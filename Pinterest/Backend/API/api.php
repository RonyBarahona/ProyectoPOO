<?php
    session_start();
    include_once("../usuario.php");
    header("Content-Type: application/json");
    $_POST = json_decode(file_get_contents('php://input'),true);
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            $usuario=Usuario::verificarUsuarios($_POST['email'], $_POST['password']);
            if($usuario){
                $resultado= array(
                    "codigoResultado"=>1,
                    "mensaje"=>"Usuario Autenticado",
                    "token"=>sha1(uniqid(rand(),true))
                );
                $_SESSION["token"]=$resultado["token"];
                setcookie("token",$resultado["token"],time()+(60*60*24*31),"/");
                setcookie("carpetas",$usuario["carpetas"],time()+(60*60*24*31),"/");
                echo json_encode($resultado);
            }else{
            setcookie("token","",time()-1,"/");
            setcookie("carpetas","",time()-1,"/");
            echo '{"codigoResultado":0,"mensaje":"El usuario no existe"}';}
        break;
    }




?>