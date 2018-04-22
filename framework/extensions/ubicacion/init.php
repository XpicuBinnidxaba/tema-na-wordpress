<?php
/**
* Para la ubicación de grupos
* Hooks & Filters
*/

$key_googleMaps = "AIzaSyDksOeHNOatBXxpyejOzleqK6PZCQk2gq0";


function printOpcionMenu(){
	include("plantillas/linkMenuPie.html");
	include("plantillas/modal.html");
	
	#add_action( 'wp_enqueue_scripts', get_template_directory_uri()."/framework/extensions/");
}

function ubicanos_linkUbicanos(){
	do_action('pre_footer');
	
	
}
add_action('pre_footer','printOpcionMenu', 5);


function addScripts(){
	wp_enqueue_script("loadUbicacion_mapa", "https://maps.googleapis.com/maps/api/js?key=".$key_googleMaps);
	wp_enqueue_script("loadUbicacion", get_template_directory_uri()."/framework/extensions/ubicacion/js/load.js", array("jquery"));
}
add_action( 'wp_enqueue_scripts', 'addScripts' );

?>