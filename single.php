<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido del post -->
<nav>
	<ul class="main-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
	</ul>
</nav>
<h1>SINGLE</h1>
<?php if ( have_posts() ) : the_post(); ?>
  <section>
    <h1><?php the_title(); ?></h1>
    <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
    <?php the_content(); ?>
    <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
    <address>Por <?php the_author_posts_link() ?></address>
    <?php the_category (); ?>
    <!-- Comentarios -->
   <?php comments_template(); ?>
  </section>
<?php else : ?>
  <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<h3>--------------- INICIO SIDEBAR ---------------</h3>
<?php get_sidebar(); ?>
<h3>--------------- FIN SIDEBAR ---------------</h3>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>