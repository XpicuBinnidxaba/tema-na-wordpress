<?php
/**
 * The front-page template file
 *
 * @package WordPress
 * @subpackage Tema_NA
 * @since Tema NA 1.0
 */
?>

  <?php get_header(); ?>

  <body class="uno">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  	   <div class="container">
         <!-- El logotipo y el icono que despliega el menú se agrupan para mostrarlos mejor en los dispositivos móviles -->
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".contenido-menu">
             <span class="sr-only">Desplegar navegación</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">
             <img src="<?= get_template_directory_uri() ?>/img/LogoNA.png" alt="Logo N.A.">
           </a>
         </div>

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
           ));
         ?>
      </div>
    </nav>

    <div class="top-background-image">
  		<img src="<?php echo get_template_directory_uri() ?>/img/FondoNa.jpg" class="img-responsive" />
  	</div>

    <h1>FRONT-PAGE</h1>

    <?php if ( have_posts() ) : the_post(); ?>
      <section>
        <h1>Títutlo: <?php the_title(); ?></h1>
        <h3>Contenido:</h3>
        <?php the_content(); ?>
      </section>
    <?php endif; ?>

    <?php get_footer(); ?>
  </body>
</html>
