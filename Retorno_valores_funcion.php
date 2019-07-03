<?php 


function sumar($numero1,$numero2){
	$resultado=$numero1+$numero2;
	return $resultado;
	
}

$resSuma = sumar(3,5);
echo $resSuma."<br />";



function saludo($nombre){

	return 'Saludos '.$nombre.'!';
	
}

echo saludo('Miguel')."<br />";
echo saludo('Gabriel')."<br />";
echo saludo('Rafael')."<br />";


 ?>