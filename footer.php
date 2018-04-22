<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3 menu">
				<h3>Acerca de neuróticos anónimos</h3>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu_bottom1',
						)
					);
				?>
			</div>
			<div class="col-xs-6 col-sm-3 menu">
				<h3>Servicios</h3>
				<?php wp_nav_menu(
						array(
							'theme_location' => 'menu_bottom2',
						)
					);
				?>
			</div>
			<div class="col-xs-6 col-sm-3 menu">
				<h3>Grupos</h3>
				<?php wp_nav_menu(
						array(
							'theme_location' => 'menu_bottom3',
						)
					);
				?>
			</div>
			
			<div class="col-xs-6 col-sm-3 menu">
				<h3>¿NECESITAS AYUDA?</h3>
				<?php wp_nav_menu(
						array(
							'theme_location' => 'menu_bottom4',
						)
					);
				?>
				
				<ul>
					<li><a href="#"><i class="fas fa-2x fa-envelope"></i> &nbsp;&nbsp;&nbsp;CONTÁCTANOS</a></li>
					<li><a href="#"><i class="fas fa-phone fa-2x"></i>	&nbsp;&nbsp;&nbsp;LLÁMANOS</a></li>
					<?php ubicanos_linkUbicanos(); ?>
					
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="footer datosContacto">
	<div class="container text-center">
		Oficina Intergrupal, Calle Margarita Maza de Juarez 218, Colonia Centro, Oaxaca<br />
		Teléfono +52 951 51 3 02 80<br />
		grupobvoaxaca@hotmail.com<br />
		<?= date("Y") ?>
	</div>
</div>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>