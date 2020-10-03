<?php
/*
 * Template Name: Página Radio
 *
 * @package WordPress
 * @subpackage Tema_NA
 * @since Tema NA 1.0
 */
?>
  <?php get_header(); ?>

  <body class="pagina2">
  	<?php
		if (function_exists("na_preload"))
			na_preload();
	?>
  	<?php
           wp_nav_menu( array(
             'menu' => 'primary',
             'theme_location' => 'menu_principal',
             'depth' => 2,
             'container' => 'div',
             'container_class' => 'collapse navbar-collapse contenido-menu',
             'container_id' => 'navbar-ex1-collapse',
             'menu_class' => 'nav navbar-nav',
             #'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
             #'walker' => new wp_bootstrap_navwalker()
           ));
         ?>

	   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex1-collapse">
             <span class="sr-only">Desplegar navegación</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">
             <img src="<?= get_template_directory_uri() ?>/img/LogoNA.png" alt="Logo N.A.">
           </a>
         </div>
       </div>
     </nav>

     <div class="top-background-image">
       <img src="<?= get_template_directory_uri() ?>/img/FondoNA.jpg" class="img-responsive" />
     </div>

     <div class="container">
       <div class="row">
         <div class="col-xs-12 col-sm-12 ">
           <?php if ( have_posts() ) : the_post(); ?>
             <div class="titulo">
               <h1><?php the_title(); ?></h1>
             </div>
             <div class="cotenido">
               <?php the_content(); ?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     </div>

  <?php get_footer(); ?>
  </body>
</html>
