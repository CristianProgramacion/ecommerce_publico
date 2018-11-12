<?php @sesion.start();
//traer todas las variables de sesion
$_SESSION = array();
//destruir las variables de la sesion
session_destroy();

//redirigir al index del logueo
header("location:../");

 ?>