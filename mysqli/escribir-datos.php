<?php


$conexion = new mysqli('localhost','root','','prueba_sqli');

if($conexion->connect_errno){
    die('Lo siento, hubo un problema con el servidor');
}else{
    //Puede ser inseguro
    //$sql = "INSERT INTO usuarios (id,nombre,edad) VALUES(null,'Luis',50)";
    //$conexion->query($sql);
    /*
    if($conexion->affected_rows >= 1){
        echo 'Filas agregadas: '.$conexion->affected_rows;
    }
    */
    
}