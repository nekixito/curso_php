<?php require 'header.php' ?>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo"><a href="#">Titulo del artículo</a></h2>
				<p class="fecha">12 de Julio del 2019</p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
					</a>
				</div>
				<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, at.</p>
				<a href="#" class="continuar">Continuar Leyendo</a>
				
			</article>
		</div>

		<div class="post">
			<article>
				<h2 class="titulo"><a href="#">Titulo del artículo</a></h2>
				<p class="fecha">12 de Julio del 2019</p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
					</a>
				</div>
				<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, at.</p>
				<a href="#" class="continuar">Continuar Leyendo</a>
				
			</article>
		</div>

		<?php require 'paginacion.php' ?>
	</div>
	
	<?php require 'footer.php' ?>