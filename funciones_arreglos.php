<?php 
//$persona = array('telefono'=>'5566778899','edad'=>33,'apellido'=>'meza','pais'=>'mexico');

$semana=array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

//Ejemplo1
//extract($persona);
//echo $telefono;

// Ejemplo 2
/*
echo array_pop($semana);
echo '<br />';
echo '<br />';
echo 'Despues del array_pop()<br />';
foreach ($semana as $dia) {
	echo $dia.'<br />';
}
*/

//Ejemplo 3
/*
echo join(' - ',$semana);
echo '<br />';
echo join('<br />',$semana);
echo '<br />';
*/

//Ejemplo 4
echo count($semana);
//sort($semana);
echo '<br />';
echo join(',',$semana);
echo '<br />';
$semana2 =array_reverse($semana);
echo join(',',$semana2);
echo '<br />';


 ?>