<?php 

function calcular_area_triangulo($base,$altura){
	$resultado=($base*$altura)/2;
	return $resultado;
}

$area_trian = calcular_area_triangulo(10,10);

echo 'El triangulo tiene un área de '.$area_trian.' metros cuadrados.';

 ?>