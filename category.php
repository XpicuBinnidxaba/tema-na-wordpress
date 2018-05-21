<?php
/**
 * The Category template file
 *
 * @package WordPress
 * @subpackage Tema_NA
 * @since Tema NA 1.0
 */
?>

<?php
/**
 * The page template file
 *
 * @package WordPress
 * @subpackage Tema_NA
 * @since Tema NA 1.0
 */
?>
  <?php get_header(); ?>

  <body class="pagina2">
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
         <div class="col-sm-12 col-md-9">

					 <h1><?php single_cat_title(); ?></h1>

					 <?php if ( have_posts() ) : ?>
             <section>
  				     <?php while ( have_posts() ) : the_post(); ?>
                   <div class="col-sm-12 col-md-4">
    					       <article>
    					         <header>
    					           <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    					           <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
    					 					<?php the_category (); ?>
    					         </header>
    					         <?php the_excerpt(); ?>
    					         <footer>
    					             <address>Por <?php the_author_posts_link() ?></address>
    					         </footer>
    					       </article>
                   </div>
  				     <?php endwhile; ?>
  				     <div class="pagination">
  				       <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
  				       <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
  				     </div>
  				   </section>
					 <?php else : ?>
					   <p><?php _e('Ups!, no hay entradas.'); ?></p>
					 <?php endif; ?>

         </div>
         <div class="col-xs-12 col-sm-3"><!-- INICIO ELEMENTO MEDIA -->
            <?php dynamic_sidebar('sidebar');?>
        </div><!-- FIN ELEMENTO MEDIA -->
       </div>
     </div>

  <?php get_footer(); ?>
  </body>
</html>
