<?php       


class Usuario{
    public $nombre;
    protected $correo;

    function __construct($nombre,$correo){
        $this->nombre = $nombre;
        $this->correo = $correo;

    }

    public function mostrarInfo(){
        return $this->correo.'<br>';   
    }
}

class Miembro extends Usuario{
    public function mostrarCorreo(){
        return 'Este es el correo '.$this->correo.'<br>';   
    }
}

$miguel = new Miembro('Miguel','miguel@sitio.com');
echo $miguel->mostrarCorreo(); 
