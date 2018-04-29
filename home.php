<?php get_header(); ?>

<body class="uno">
	<div class="navbar navbar-fixed-top menuPrincipal">
		<div class="navbar-header">
			<a class="brand" href="#"><img src="<?= get_template_directory_uri() ?>/img/LogoNA.png" alt="Neuróticos Anónimos"></a>
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<i class="fa fa-bars"></i>
			</button>
		</div>
		<?php

wp_nav_menu( array(
  'menu' => 'primary',
  'theme_location' => 'menu_principal',
  'depth' => 2,
  'container' => 'div',
  'container_class' => 'collapse navbar-collapse contenido-menu',
  'container_id' => 'bs-example-navbar-collapse-1',
  'menu_class' => 'nav',
  #'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
  #'walker' => new wp_bootstrap_navwalker()
  )
);
?>
	</div>
	
	<div id="carrusel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		
		<div class="carousel-inner">
			<div class="item active">
				<div class="descripcion col-xs-12 col-sm-8 col-sm-offset-2">
					<h1>¿Quienes somos?</h1>
					<p>Somos hombres y mujeres que hemos descubierto y admitido que no podemos controlar nuestras emociones. Tenemos un solo propósito:</p>
					<p>Mantener nuestra condición emocional y ayudar a otros a recuperarse de la Neurosis</p>
					
					<a href="#" data-toggle="modal" data-target="#winUbicanos" class="btn btn-warning">Contáctanos</a>
				</div>
			</div>
			<div class="item">
				<div class="descripcion col-xs-12 col-sm-8 col-sm-offset-2">
					<h1>¿Quienes somos?</h1>
					<p>Somos hombres y mujeres que hemos descubierto y admitido que no podemos controlar nuestras emociones. Tenemos un solo propósito:</p>
					<p>Mantener nuestra condición emocional y ayudar a otros a recuperarse de la Neurosis</p>
				</div>
			</div>
		</div>

	</div>
		
	<div class="body">
		<div class="container">
			<h1>¿Que es la neurosis?</h1>
			<div class="row">
				<div class="col-sm-8">
					<p class="text-justify">Desde el punto de vista de <span class="text-danger">Neuróticos Anónimos</span>, la neurosis es una enfermedad emocional y mental cuyos síntomas causan destrucción y muerte a quien la padece; es progresiva y mortal si no es atendida a tiempo. Entre algunas de sus manifestaciones se encuentran: celos, miedos, agresividad, compulsiones maniaco-depresivas, soledad, adicciones, enfermedades psicosomáticas, suicidios, etc.</p>
					<p class="text-justify">
						En el Movimiento Buena Voluntad 24 hrs. de Neuróticos Anónimos los que sufren la enfermedad de la neurosis pueden ver, oír y hablar con personas que se han recuperado y aprenden también, que ellas pueden recuperarse. La esperanza y ayuda es ofrecida a través del Programa de Neuróticos Anónimos
					</p>
				</div>
				<div class="col-sm-4">
					<img src="img/mundo.png" class="img-responsive" />
				</div>
			</div>
			<br />
			<h1>Nuestros servicios</h1>
			<p>
				El <span class="text-danger">Movimiento Buena Voluntad 24 horas. de Neuróticos Anónimos</span> presta servicios de ayuda los 265 días del año. Algunos son
			</p>
			<div class="row servicios">
				<div class="col-xs-6 col-sm-3 item">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-home fa-stack-1x fa-inverse"></i>
					</span>
					
					<span class="nombre">Casa Hogar</span>
				</div>
				
				<div class="col-xs-6 col-sm-3 item">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-building fa-stack-1x fa-inverse"></i>
					</span>
					<span class="nombre">Visitas a domicilio</span>
				</div>
				
				<div class="col-xs-6 col-sm-3 item">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-cubes fa-stack-1x fa-inverse"></i>
					</span>
					<span class="nombre">Guardería</span>
				</div>
				
				<div class="col-xs-6 col-sm-3 item">
					<span class="fa-stack fa-5x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-child fa-stack-1x fa-inverse"></i>
					</span>
					<span class="nombre">Neura-teen</span>
				</div>
				<div class="col-xs-12">
					<br />
					<br />
					<br />
					<a href="#" class="btn btn-link btn-lg btn-block">Conoce nuestros demás servicios</a>
				</div>
			</div>
		</div>
	</div>
	
	<?php get_footer(); ?>home
</body>
</html>