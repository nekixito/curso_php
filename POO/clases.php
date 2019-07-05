<?php       


class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo $this->nombre.'<br>';
        echo $this->edad.'<br>';
        echo $this->pais.'<br>';
        echo '<br>';
    }
}

$miguel = new Persona;

$miguel->nombre = 'Miguel N';
$miguel->edad = 33;
$miguel->pais = 'México';

$miguel->mostrarInformacion();

$juan = new Persona;

$juan->nombre = 'Juan P';
$juan->edad = 27;
$juan->pais = 'España';

$juan->mostrarInformacion();