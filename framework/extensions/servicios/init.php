<?php
/**
* Less
* Hooks & Filters
*/

$totalPrincipalesServicios = 4;

function addThemeServicios(){
	wp_enqueue_script( 'script', get_template_directory_uri() . '/framework/extensions/servicios/servicios.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts', 'addThemeServicios');

include_once($extensionsDirectory.'/servicios/getServicios.php');
include_once($extensionsDirectory.'/servicios/pagina.php');
?>
