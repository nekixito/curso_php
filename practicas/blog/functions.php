<?php 



function conexion($bd_config){
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=blog_practica','root','');
		return $conexion;
		
	} catch (Exception $e) {
		return false;
	}
}

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripcslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}



 ?>