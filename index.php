<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('') ?></title>
	<?php wp_head(); ?>
</head>

<body class="pagina2">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- El logotipo y el icono que despliega el menú se agrupan
	       para mostrarlos mejor en los dispositivos móviles -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".contenido-menu">
	      <span class="sr-only">Desplegar navegación</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="#">
	    	<img src="img\LogoNA.png" alt="Logo N.A.">
	    </a>
	  </div>

	  <!-- Agrupar elemento a ocultar al minimizar la barra -->
	  
	  <?php

wp_nav_menu( array(
  'menu' => 'primary',
  'theme_location' => 'menu_principal',
  'depth' => 2,
  'container' => 'div',
  'container_class' => 'collapse navbar-collapse contenido-menu',
  'container_id' => 'bs-example-navbar-collapse-1',
  'menu_class' => 'nav navbar-nav',
  #'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
  #'walker' => new wp_bootstrap_navwalker()
  )
);
?>
	  
	  
	  <div class="collapse navbar-collapse contenido-menu">
			<div class="menu">
				<ul class="nav navbar-nav">
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		          Nosotros <b class="caret"></b>
		        </a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Nosotros #1</a></li>
		          <li><a href="#">Nosotros #2</a></li>
		          <li class="divider"></li>
		          <li><a href="#">Nosotros #3</a></li>
		        </ul>
		      </li>
					<li><a href="#">Servicios</a></li>
					<li><a href="#">Testimonios</a></li>
					<li><a href="#">Datos y Estad&iacutesticas</a></li>
					<li><a href="#">Esc&uacutechanos</a></li>
					<li><a href="#">Ub&iacutecanos</a></li>
		    </ul>
			</div>
	  </div>
	</div>
</nav>


	<div class="container-fluid">
		<div class="row top-backgroung-image col-sm-12">
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9 ">
				<div class="titulo">
					<h1>CASA HOGAR</h1>
				</div>
				<div class="cotenido">
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis magna et mi dictum cursus. Nullam bibendum lorem a lorem porttitor ultrices. Ut ac dolor eget sem ullamcorper dignissim eu at urna. Phasellus mollis ligula vitae feugiat scelerisque. Integer ut risus magna. Nam sed lobortis diam. Pellentesque fermentum pharetra tincidunt. Cras viverra fermentum magna, eget pellentesque mi consequat at. Integer nec elit quam. Cras vel erat et nulla tristique tempor. Nunc rhoncus gravida mi vitae pharetra. Morbi eu erat eu enim convallis consectetur. Nam malesuada mollis convallis. In laoreet odio vitae ante feugiat accumsan. Vivamus tincidunt sapien ac odio tempus luctus. Aliquam luctus urna sapien.</p>

					<p>Suspendisse efficitur est eu eros tincidunt, a consequat metus tristique. Etiam venenatis iaculis lorem, venenatis fringilla mauris dapibus a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed commodo mi non ex porta fringilla. Vivamus sollicitudin nunc at dui tincidunt, sed rhoncus elit pretium. Vestibulum maximus mi eu dui cursus placerat. Aliquam erat volutpat. Phasellus porta nisl quam. Vivamus finibus lorem magna, sit amet laoreet elit pharetra in.</p>

					<p>Nullam vitae dui tortor. Morbi lacinia dolor sed risus convallis, nec volutpat enim luctus. Sed ut metus lectus. Suspendisse magna sapien, efficitur quis vulputate nec, congue vitae arcu. Mauris facilisis in augue eu faucibus. Vestibulum nisi massa, facilisis sit amet tincidunt eleifend, iaculis vitae ante. Nam semper nisl in turpis hendrerit, a suscipit tortor aliquet. Integer faucibus metus semper tempus varius. Pellentesque ornare, tellus vel ultricies consectetur, enim turpis dictum urna, et rhoncus arcu nisl at dui. Aliquam facilisis dui non velit rhoncus, sit amet tincidunt lacus congue. Cras eu lorem condimentum, euismod erat quis, vestibulum velit. Aenean sit amet tellus at nunc aliquam interdum ac ac felis. Cras cursus diam a dapibus rutrum. Donec auctor aliquet sem, quis luctus quam porttitor a.</p>

					<p>Proin rutrum nec elit eu feugiat. Nunc dignissim, est eget volutpat vulputate, sapien libero ultrices orci, non suscipit odio metus eu quam. Maecenas iaculis varius imperdiet. Nunc facilisis enim sapien, eu dignissim metus venenatis vel. Phasellus ligula ligula, suscipit sit amet ligula vitae, consectetur tristique libero. Donec venenatis luctus nisl ac congue. Praesent sollicitudin blandit ullamcorper. Fusce neque nibh, dignissim in ipsum nec, feugiat pellentesque elit. Ut ac urna in tortor lobortis aliquet. Integer ex quam, scelerisque ac placerat sed, sodales vel sem. Pellentesque accumsan dui eleifend lobortis tempus. Suspendisse sit amet ultricies nunc, vitae tincidunt nisi. Quisque dignissim quis tortor sit amet condimentum. Quisque pellentesque, elit nec convallis molestie, arcu elit eleifend felis, nec pellentesque leo felis id massa. Sed viverra, lacus ac eleifend varius, lacus diam auctor mi, eu gravida massa massa eget sem. Sed varius velit lacus, eu maximus ipsum fringilla eu.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<h1>MEDIA</h1>
				<!-- INICIO ELEMENTO MEDIA -->
				<div class="media-lista">
					<div class="col-xs-6 col-sm-12">
						<div class="media-item" data-context-item-id="fuAE3U1NvOs">
							<a href="#">
								<div class="media-header">
											<div class="img-responsive media-imagen" style="background-image: url(https://i.ytimg.com/vi/fuAE3U1NvOs/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&amp;rs=AOn4CLDoMFNpgPMk9lvSdUwwH36CCbBQsA);"></div>
								</div>
								<div class="media-descripcion">
									<p>Los cuatros caminos de la neurosis</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-12">
						<div class="media-item" data-context-item-id="fuAE3U1NvOs">
							<a href="#">
								<div class="media-header">
											<div class="img-responsive media-imagen" style="background-image: url(https://i.ytimg.com/vi/fuAE3U1NvOs/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&amp;rs=AOn4CLDoMFNpgPMk9lvSdUwwH36CCbBQsA);"></div>
								</div>
								<div class="media-descripcion">
									<p>Los cuatros caminos de la neurosis</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-12">
						<div class="media-item" data-context-item-id="fuAE3U1NvOs">
							<a href="#">
								<div class="media-header">
											<div class="media-imagen" style="background-image: url(https://i.ytimg.com/vi/fuAE3U1NvOs/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&amp;rs=AOn4CLDoMFNpgPMk9lvSdUwwH36CCbBQsA);"></div>
								</div>
								<div class="media-descripcion">
									<p>Los cuatros caminos de la neurosis</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- FIN ELEMENTO MEDIA -->
			</div>
		</div>

	</div>
	
	
	
	
	<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3 menu">
				<?php

wp_nav_menu( array(
  'menu' => 'primary',
  'theme_location' => 'menu_bottom',
  'depth' => 2,
  'container' => 'div',
  'container_class' => 'collapse navbar-collapse contenido-menu',
  'container_id' => 'bs-example-navbar-collapse-1',
  'menu_class' => 'nav navbar-nav',
  #'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
  #'walker' => new wp_bootstrap_navwalker()
  )
);
?>
			
			
			
				<h3>Acerca de neuróticos anónimos</h3>
				<ul>
					<li><a href="#">Misión, visión y valores</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Aviso de privacidad</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Contáctanos</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-3 menu">
				<h3>Servicios</h3>
				<ul>
					<li><a href="#">Casa Hogar</a></li>
					<li><a href="#">Visitas a domicilio</a></li>
					<li><a href="#">Neur-A-Teen</a></li>
					<li><a href="#">Juntas en sala</a></li>
					<li><a href="#">Visitas a domicilio</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-3 menu">
				<h3>Grupos</h3>
				<ul>
					<li><a href="#">B. V. Margarita Maza</a></li>
					<li><a href="#">Villa de la Buena Voluntad</a></li>
					<li><a href="#">B. V. Ampliación</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Contáctanos</a></li>
					<li><a href="#">Contáctanos</a></li>
				</ul>
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
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7628.074386956956!2d-96.72122559999998!3d17.07083330000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1518751179044" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-xs-12 col-sm-4">
						<button type="button" class="close hidden-xs" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4>CONTÁCTANOS</h4>
						<br /><br />
						<form onsubmit="javascript: return false;">
							<div class="form-group">
								<label for="txtNombre">NOMBRE COMPLETO: </label>
								<input type="text" class="form-control" id="txtNombre" name="txtNombre" />
							</div>
							<div class="form-group">
								<label for="txtCorreo">CORREO ELECTRÓNICO: </label>
								<input type="text" class="form-control" id="txtCorreo" name="txtCorreo" />
							</div>
							<div class="form-group">
								<label for="txtComentarios">COMENTARIOS: </label>
								<textarea id="txtComentarios" name="txtComentarios" class="form-control" rows="8"></textarea>
							</div>
							
							<div class="text-right">
								<button class="btn btn-lg btn-naranja">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>