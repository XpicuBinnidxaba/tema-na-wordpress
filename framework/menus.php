<?php
/**
 * Menús gestionables desde el administrador de Wordpress.
 */
function menus_na() {
	register_nav_menus(array(
		'menu_principal' => __('Menu Principal', 'tema_na'),
		'menu_secundario' => __('Menu Secundario', 'tema_na'),
		'menu_bottom' => __('Bottom Menu', 'tema_na')
	));
}

add_action('init', 'menus_na');
?>
