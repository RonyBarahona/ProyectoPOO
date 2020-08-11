<?php
 session_start();
 session_destroy();
 setcookie("token","",time()-1,"/");
 setcookie("carpetas","",time()-1,"/");

 header("Location: index.html");
?>