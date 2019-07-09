<?php


$conexion = new mysqli('localhost','root','','prueba_sqli');

if($conexion->connect_errno){
    die('Lo siento, hubo un problema con el servidor');
}else{
    $statement = $conexion->prepare("INSERT INTO usuarios (id,nombre,edad) VALUES(?,?,?)");
    
    $statement->bind_param('ssi',$id,$nombre,$edad);
    $id=NULL;
    
    if(isset($_GET['nombre']) && isset($_GET['edad'])){
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
    }

    $statement->execute();
    
    if($conexion->affected_rows >= 1){
        echo 'Filas agregadas: '.$conexion->affected_rows;
    }else{
        echo 'No se agrego nada';
    }
    
    
}