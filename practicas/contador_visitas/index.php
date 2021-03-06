<?php

function contar_usuarios(){
    $archivo = 'contador.txt';

    if(file_exists($archivo)){
       $cuenta = file_get_contents($archivo)+1;
       file_put_contents($archivo,$cuenta);
       return $cuenta;
    }else{
        file_put_contents($archivo,1);
        return 1;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador de visitas</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Contador de Visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo contar_usuarios(); ?></p>
        <p class="texto">Visitantes</p>
    </div>
</body>
</html>
