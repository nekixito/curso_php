<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Galeria</title>
</head>
<body>
	<header class="contenedor">
		<h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])){ echo $foto['titulo']; } else { echo $foto['imagen']; } ?></h1>
	</header>

	<div class="contenedor">
		<div class="foto">
			<img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
			<p class="texto">
				<?php echo $foto['texto']; ?>
			</p>
			<a href="index.php" class="regresar"><ii class="fa fa-long-arrow-left"></ii> Regresar</a>
		</div>
	</div>


	<footer>
		<p class="copyright">
			Galería creada por Miguel.
		</p>
	</footer>


</body>
</html>