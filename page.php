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
  </section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<h3>--------------- INICIO SIDEBAR ---------------</h3>
<?php get_sidebar(); ?>
<h3>--------------- FIN SIDEBAR ---------------</h3>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
