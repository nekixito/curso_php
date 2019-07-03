<?php 
//$semana=array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
$persona = array('telefono'=>'5566778899','edad'=>33,'apellido'=>'meza','pais'=>'mexico');

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
 		/*
 			foreach ($semana as $dia) {
 				echo '<li>'.$dia.'</li>';
 			}
 		*/
 			foreach ($persona as $dato => $valor) {
 				echo '<li>'.$dato.' : '.$valor.'</li>';
 			}
 		 ?>
 	</ul>
 </body>
 </html>