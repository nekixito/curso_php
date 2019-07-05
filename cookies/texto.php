<?php



if(isset($_COOKIE['font-size'])){
    $tamaño = htmlspecialchars($_COOKIE['font-size']);
}else{
    $tamaño='15px';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Texto</title>
    <style>
        p {
            font-size: <?php echo $tamaño; ?>
        }
    </style>
</head>
<body>
    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing 
    elit. Aliquid error nemo perferendis beatae dicta 
    illum molestiae, maiores iste expedita ducimus modi 
    eius porro reiciendis assumenda atque nobis quam odio? Minus.
    </p>
</body>
</html>