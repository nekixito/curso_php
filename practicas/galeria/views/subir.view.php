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
		<h1 class="titulo">Subir Foto</h1>
	</header>

	<div class="contenedor">
		<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER[PHP_SELF]); ?>">
			
			<label for="foto">Selecciona tu foto</label>
			<input type="file" id="foto" name="foto">

			<label for="titulo">Título de la foto</label>
			<input type="text" id="titulo" name="titulo">

			<label for="texto">Descripción</label>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

			<input type="submit" class="submit" value="Subir Foto">

		</form>
	</div>


	<footer>
		<p class="copyright">
			Galería creada por Miguel.
		</p>
	</footer>


</body>
</html>