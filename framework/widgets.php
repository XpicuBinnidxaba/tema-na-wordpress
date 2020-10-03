<?php
/**
 * Crear una zona de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */

function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );

 register_sidebar(
   array(
       'name'          => __( 'ContactForm-Widget' ),
       'id'            => 'ContactForm-Widget',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );

 register_sidebar(
   array(
       'name'          => __( 'GoogleMaps-Widget' ),
       'id'            => 'GoogleMaps-Widget',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );

 register_sidebar(
   array(
       'name'          => __( 'theme_infoContacto' ),
       'id'            => 'theme_infoContacto',
       'before_widget' => '<div class="infoContacto">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>'
   )
  );

   register_sidebar(
   array(
       'name'          => __( 'theme_acercaDe' ),
       'id'            => 'theme_acercaDe',
       'before_widget' => '<div class="acercaDe">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>'
   )
 );

 register_sidebar(
   array(
       'name'          => __( 'theme_final' ),
       'id'            => 'theme_final',
       'before_widget' => '<div class="theme-final">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>'
   )
 );

}
add_action('init','mis_widgets');
?>
