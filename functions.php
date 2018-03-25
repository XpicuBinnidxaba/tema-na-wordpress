<?php
$desarrollo = true;

include_once("framework/na_functions_init.php");

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


include_once("framework/menus.php");
?>