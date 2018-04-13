<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$desarrollo = true;

/**
 * Load Framework
 */
require_once( get_template_directory() . '/framework/na_functions_init.php' );

/**
* Incluye los css del tema
**/
function additional_custom_styles(){
	global $desarrollo;
	if ($desarrollo){
		wp_enqueue_style('tema_na', get_template_directory_uri().'/style.less' );

		wp_enqueue_script( 'tema-less', get_template_directory_uri() . '/framework/extensions/less/less.js');

	}else{
		wp_enqueue_style('tema_na', get_template_directory_uri().'/style.css' );
	}
}

add_action( 'wp_enqueue_scripts', 'additional_custom_styles');

require_once( get_template_directory() . '/framework/menus.php' );
require_once( get_template_directory() . '/framework/widgets.php' );
require_once( get_template_directory() . '/framework/filtros.php' );
?>
