<?php       


class Persona{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre,$edad,$pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;

    }

    public function mostrarInformacion(){
        echo $this->nombre.' tiene '.$this->edad.' años y es de '. $this->pais.'<br>';
        echo '<br>';
    }
}

$miguel = new Persona('Miguel N',33,'México');
$miguel->mostrarInformacion();

$juan = new Persona('Juan P',27,'España');
$juan->mostrarInformacion();