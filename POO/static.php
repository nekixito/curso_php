<?php

class Persona{
    public static $dia = '12 de Diciembre';

    public static function saludo($nombre=null){
        if($nombre){
            return 'Hola, buen día '.$nombre.'<br>';
        }else{
            return 'Hola, buen día '.'<br>';
        }
    }
}

$miguel = new Persona;

echo Persona::$dia;
echo '<br>';
echo Persona::saludo('Miguel');