<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Tema_NA
 * @since Tema NA 1.0
 */
?>
<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

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
				<ul>
					<li><a href="#"><i class="fas fa-2x fa-envelope"></i> &nbsp;&nbsp;&nbsp;CONTÁCTANOS</a></li>
					<li><a href="#"><i class="fas fa-phone fa-2x"></i>	&nbsp;&nbsp;&nbsp;LLÁMANOS</a></li>
					<li><a href="#" data-toggle="modal" data-target="#winUbicanos"><i class="fas fa-2x fa-map-marker-alt"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UBÍCANOS</a></li>

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


<!-- Ubicanos -->
	<div class="modal modal-na fade" id="winUbicanos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-8 barraDer">
							<button type="button" class="close visible-xs" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4>UBICA TU GRUPO</h4>
							<?php dynamic_sidebar('GoogleMaps-Widget');?>
						</div>
						<div class="col-xs-12 col-sm-4">
							<button type="button" class="close hidden-xs" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4>CONTÁCTANOS</h4>
							<br /><br />
							<?php dynamic_sidebar('ContactForm-Widget');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Ubicanos-->

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
