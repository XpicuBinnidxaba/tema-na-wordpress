<?php
/**
* Template Name: Plantilla Page-Contacto
*/
?>
<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<nav>
	<ul class="main-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
	</ul>
</nav>
<h1>PAGE.PHP</h1>
<?php if ( have_posts() ) : the_post(); ?>
  <section>
    <h1>Títutlo: <?php the_title(); ?></h1>
    <h3>Contenido:</h3>
    <?php the_content(); ?>
		<form method="post" action="">
      <label for="name">Nombre</label><br>
      <input type="text" id="name" placeholder="Escribe aquí tu nombre y apellidos"><br>
      <label for="subject">Asunto</label><br>
      <input type="text" id="subject" placeholder="Motivo de tu consulta"><br>
      <label for="message">Mensaje</label><br>
      <textarea id="message"></textarea><br>
      <button type="submit">Enviar datos</button><br>
  </form>
  </section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<h3>--------------- INICIO SIDEBAR ---------------</h3>
<?php dynamic_sidebar('sidebarx');?>
<h3>--------------- FIN SIDEBAR ---------------</h3>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
