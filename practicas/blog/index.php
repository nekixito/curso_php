<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
	header('Location: error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'],$conexion);
if(!$posts){
	header('Location: error.php');
}

//echo pagina_actual();
/*
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT 0,2");

$statement->execute();
$fotos = $statement->fetchAll();
*/

require 'views/index.view.php';

 ?>