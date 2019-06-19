<?php

#String: Cadena de texto
$nombre='Miguel';

#Integer: Números enteros
$numero=7;

#Double: Números con decimales
$numero_decimal = 7.7;

#Boolean: Verdadero o falso (true,false)
$valor_verdad=false;

#Array: Arreglo
#Object: Objeto
#Class: Clase
#Null: Cuando a una variable no se le ha asignado ningun valor

#Con las comillas dobles se puede hacer referencia a las variables
echo "Hola $nombre <br>";

#Concatenar
echo 'Adios '.$nombre.'<br>';

#Conocer el tipo de dato de una variable
echo gettype($nombre);

?>