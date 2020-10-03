<?php get_header(); ?>

<body class="uno">
	<?php
		if (function_exists("na_preload"))
			na_preload();
	?>
	<?php
	wp_nav_menu(
		array(
			'menu' => 'primary',
			'theme_location' => 'menu_principal',
			'depth' => 2,
			'container' => 'div',
			'container_class' => 'collapse navbar-collapse contenido-menu',
			'container_id' => 'navbar-ex1-collapse',
			'menu_class' => 'nav',
			#'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
			#'walker' => new wp_bootstrap_navwalker()
		)
	);
	?>
	<div class="navbar navbar-fixed-top menuPrincipal">
		<div class="navbar-header">
			<a class="brand" href="#"><img src="<?= get_template_directory_uri() ?>/img/LogoNA.png" alt="Neuróticos Anónimos"></a>
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex1-collapse">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</div>

	<div class="bar-header">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- HeaderTopAds -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5750766974376423"
     data-ad-slot="4802459696"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

        <div class="container bodyBck">
    <div class="row">
        <div class="col-lg-12">
            <div class="sticky-container">
                <ul class="sticky">
                    <li>
                        <img src="images/facebook-circle.png" width="32" height="32">
                        <p><a href="https://www.facebook.com/codexworld" target="_blank">Like Us on<br>Facebook</a></p>
                    </li>
                    <li>
                        <img height="32" src="images/twitter-circle.png" width="32" height="32">
                        <p><a href="https://twitter.com/codexworldblog" target="_blank">Follow Us on<br>Twitter</a></p>
                    </li>
                    <li>
                        <img src="images/gplus-circle.png" width="32" height="32">
                        <p><a href="https://plus.google.com/codexworld" target="_blank">Follow Us on<br>Google+</a></p>
                    </li>
                    <li>
                        <img src="images/linkedin-circle.png" width="32" height="32">
                        <p><a href="https://www.linkedin.com/company/codexworld" target="_blank">Follow Us on<br>LinkedIn</a></p>
                    </li>
                    <li>
                        <img src="images/youtube-circle.png" width="32" height="32">
                        <p><a href="http://www.youtube.com/codexworld" target="_blank">Subscribe on<br>YouYube</a></p>
                    </li>
                    <li>
                        <img src="images/pin-circle.png" width="32" height="32">
                        <p><a href="https://www.pinterest.com/codexworld" target="_blank">Follow Us on<br>Pinterest</a></p>
                    </li>
                </ul>
            </div>
		</div>
    </div>
</div>


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
			<div class="item item2">
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
					<img src="<?= get_template_directory_uri() ?>/img/mundo.png" class="img-responsive" />
				</div>
			</div>
			<br />
			<h1>Nuestros servicios</h1>
			<p>
				El <span class="text-danger">Movimiento Buena Voluntad 24 horas. de Neuróticos Anónimos</span> presta servicios de ayuda los 265 días del año. Algunos son
			</p>
			<div class="row servicios">
				<?php
					if (function_exists("getPrincipalesServicios"))
						getPrincipalesServicios();
				?>
				<div class="col-xs-12">
					<br />
					<button class="btn btn-link btn-lg btn-block" id="btnDemasServicios">Conoce nuestros demás servicios</button>
				</div>
			</div>

			<div class="row servicios demasServicios" style="display: none">
				<?php
					if (function_exists("getDemasServicios"))
						getDemasServicios();
				?>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>
</body>
</html>
