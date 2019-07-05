<?php

abstract class Persona{
    public function saludo(){
        return 'Hola';
    }
}

class Estudiante extends Persona{

}

$miguel = new Estudiante;
echo $miguel->saludo();