<?php 

$texto = '< > & "" ';
$texto2 = ' Saludos A Todos    ';


echo htmlspecialchars($texto);
echo '<br />';
echo $texto2;
echo '<br />';
echo strlen($texto2);
echo '<br />';
$texto3 = trim($texto2);
echo trim($texto3);
echo '<br />';
echo strlen($texto3);
echo '<br />';
echo substr($texto3,10,5);
echo '<br />';
echo strtoupper($texto3);
echo '<br />';
echo strtolower($texto3);
echo '<br />';
echo strpos($texto3,'T');

 ?>