<?php

/*
if (file_exists('documento.txt')) {
    echo "El archivo existe";
}else{
    echo "El archivo no existe";
}
*/

//Sobreescribe el texto
//file_put_contents('documento.txt',"Hola \n");

//Sobreescribe el texto
//file_put_contents('documento.txt',"Miguel N",FILE_APPEND);

//Muestra el contenido
//echo file_get_contents('documento.txt');

/*
file_put_contents('documento.txt','');
for($i=1;$i<=10;$i++){
    file_put_contents('documento.txt',"$i \n",FILE_APPEND);
}
*/
$archivo = file('documento.txt');
echo '<pre>';
print_r($archivo);
echo '</pre>';
//echo $archivo[7];
?>