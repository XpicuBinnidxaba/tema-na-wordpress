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
  * @subpackage Tema_NA
  * @since Tema NA 1.0
  */

 get_header(); ?>

 <body class="pagina2">

	 <nav>
		 <ul class="main-nav">
			 <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
		 </ul>
	 </nav>

 	<!--nav class="navbar navbar-default navbar-fixed-top" role="navigation"-->
	<nav class="navbar navbar-default" role="navigation">
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
 					<h1>INDEX - CASA HOGAR</h1>
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

 <?php get_footer(); ?>
