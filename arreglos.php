<?php 
$semana=array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

$semana[7]='Falcon';

echo $semana[0].'<br />';
echo $semana[7].'<br />';

//Otra forma de declarar un arreglo
$arreglo=['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];

echo $arreglo[6].'<br />';

//Los arreglos pueden guardar elementos diferentes

$diverso=array('cadena de texto',1,array('asd',123),true);

echo $diverso[1].'<br>';


echo $semana[0].'<br />';
echo $semana[1].'<br />';
echo $semana[2].'<br />';
echo $semana[3].'<br />';
echo $semana[4].'<br />';
echo $semana[5].'<br />';
echo $semana[6].'<br />';



 ?>