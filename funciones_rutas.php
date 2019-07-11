<?php


echo pathinfo('documento.txt',PATHINFO_BASENAME);
echo '<br>';
echo pathinfo('documento.txt',PATHINFO_EXTENSION);
echo '<br>';
$resultados = glob('*.php');
print_r($resultados);
echo '<br>';

$resultados2 = glob('*.{php,html,txt}', GLOB_BRACE);
print_r($resultados2);
echo '<br>';

$resultados2 = glob('sesiones/*.{php,html,txt}', GLOB_BRACE);
print_r($resultados2);
echo '<br>';

echo pathinfo('sesiones/cerrar.php',PATHINFO_DIRNAME);
echo '<br>';

echo basename('sesiones/cerrar.php');
echo '<br>';

echo basename('sesiones/cerrar.php','.php');
echo '<br>';

echo dirname('sesiones/cerrar.php');
echo '<br>';

?>