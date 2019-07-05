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
        return $this->nombre.' tiene '.$this->edad.' años y es de '. $this->pais.'<br>';   
    }
}

class Estudiante extends Persona {
    public $carrera;

    function __construct($nombre,$edad,$pais,$trabajo){
        parent::__construct($nombre,$edad,$pais);
        $this->trabajo = $trabajo;

    }
}

class Trabajador extends Persona {
    public $trabajo;

    function __construct($nombre,$edad,$pais,$trabajo){
        parent::__construct($nombre,$edad,$pais);
        $this->trabajo = $trabajo;

    }

}



$miguel = new Estudiante('Miguel N',33,'México','Desarrollador');
//echo $miguel->nombre.'<br>';

echo $miguel->mostrarInformacion();

$juan = new Trabajador('Juan',27,'México','Profesor');
echo $juan->mostrarInformacion();

