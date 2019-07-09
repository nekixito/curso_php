<?php


$conexion = new mysqli('localhost','root','','prueba_sqli');

if($conexion->connect_errno){
    die('Lo siento, hubo un problema con el servidor');
}else{
    /*Esto tiene problemas de seguridad si
    * se puede inyectar código
    */
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado=$conexion->query($sql);

    
    if($resultado->num_rows){
    /*
        echo '<pre>';
        var_dump($resultado->fetch_assoc());
        echo '</pre>';
    */
        while($fila = $resultado->fetch_assoc()){
            echo $fila['id'].'-'.$fila['nombre'].'<br>';
        }

    }else{
        echo 'No hay datos';
    }
}