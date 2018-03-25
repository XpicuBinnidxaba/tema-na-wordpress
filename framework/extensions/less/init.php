<?php
/**
* Less
* Hooks & Filters
*/
require_once($extensionsDirectory.'/less/function.php');
#add_action( 'wp_enqueue_scripts', array('less', 'add_stylesheet'));
add_filter( 'style_loader_tag', array('less', 'wp_enqueue_styles_less'), 5, 2);
?>