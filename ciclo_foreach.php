<?php 
$semana=array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Semana</title>
 </head>
 <body>
 	<h1>Semana</h1>
 	<ul>
 		<?php 
 			foreach ($semana as $dia) {
 				echo '<li>'.$dia.'</li>';
 			}
 		 ?>
 	</ul>
 </body>
 </html>