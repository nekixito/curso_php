<?php 

$meses = array('Enero','Febrero','Marzo','Abril',
				'Mayo','Junio','Julio','Agosto','Septiembre',
				'Octubre','Noviembre','Diciembre');

$numeros= array(1,22,23,10,9,5,70,100,20);
rsort($numeros);

//sort($meses);
rsort($meses);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Meses del año</title>
 </head>
 <body>
 	<h1>Meses del año</h1>
 	<ul>
 		<?php 
 			/*
 			foreach ($meses as $mes) {
 				echo '<li>'.$mes.'</li>';
 			}
			*/

 			foreach ($numeros as $num) {
 				echo '<li>'.$num.'</li>';
 			}

 		 ?>
 	</ul>
 </body>
 </html>