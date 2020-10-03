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
			<div class="col-xs-12 col-sm-3 contenedorMenu">
				<?php dynamic_sidebar('theme_infoContacto');?>
			</div>
			<div class="col-xs-12 col-sm-3 contenedorMenu">
				<h3>Enlaces de interes</h3>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu_bottom1',
						)
					);
				?>
				<ul>
					<li><a href="tel:+529515130280">Llámenos ahora</a></li>
					<li><a href="#" data-toggle="modal" data-target="#winUbicanos">Ubique nuestros grupos en el estado</a></li>

				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 contenedorMenu">
				<?php dynamic_sidebar('theme_acercaDe');?>
			</div>
			<!--
			<div class="col-xs-6 col-sm-3 menu">
				<h3>¿NECESITAS AYUDA?</h3>
				<ul>
					<li><a href="#"><i class="fa fa-2x fa-envelope"></i> &nbsp;&nbsp;&nbsp;CONTÁCTANOS</a></li>
					<li><a href="tel:+529515130280"><i class="fa fa-phone fa-2x"></i>	&nbsp;&nbsp;&nbsp;LLÁMANOS</a></li>
					<li><a href="#" data-toggle="modal" data-target="#winUbicanos"><i class="fa fa-2x fa-map-marker"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UBÍCANOS</a></li>

				</ul>
			</div>
			-->
		</div>
	</div>
</div>

<div class="footer datosContacto">
	<div class="container">
		Copyright <?= date("Y") ?> Movimiento Buena Voluntad 24 Horas de Neuróticos Anónimos
	</div>
</div>


<?php dynamic_sidebar('GoogleMaps-Widget');?>

<?php dynamic_sidebar('theme_final'); ?>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />
<link rel='stylesheet' id='fontawesome-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' type='text/css' media='all' />

<!--<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
