<?php 
	include '../conexion/conexion.php';
	//la clave es el valor que se coloca en deseos.js
	$clave_producto = htmlentities($_GET['clave']);
	$correo_user = $_SESSION['correo_user'];

	$sel = $con->prepare("SELECT id FROM deseos WHERE correo = ? AND clave_producto=?");
	$sel->execute(array($correo_user, $clave_producto));
	
	//sacar el numero del row

	$row = $sel->rowCount();

	if ($row == 0) {
		$clave= sha1(rand(0000,9999).rand(00,99));

		$ins = $con->prepare("INSERT INTO deseos VALUES (DEFAULT, :clave, :correo_user, :clave_producto)");
		    $ins->bindparam(':clave', $clave);
		    $ins->bindparam(':correo_user', $correo_user);
		    $ins->bindparam(':clave_producto', $clave_producto);
		    $ins->execute();
	}
		$ins = null;
		$con = null;
 ?>