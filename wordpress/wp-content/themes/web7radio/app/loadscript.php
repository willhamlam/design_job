<?php 
/**
 * Ladda script
 */
function loadscript() {
	if (!is_admin()) {

		wp_deregister_script('jquery');

		wp_register_script('jquery', THEME_URL . '/assets/js/libs/jquery.js');
		wp_register_script('app', THEME_URL . '/assets/js/app.js');
		wp_register_script('template', THEME_URL . '/assets/js/libs/artTemplate.js');

		wp_enqueue_script('jquery');
		wp_enqueue_script('app');
		wp_enqueue_script('template');

		wp_enqueue_style( 'bootstrap', THEME_URL . '/assets/css/bootstrap/css/bootstrap.min.css' );
	}
}
add_action('init', 'loadscript');
 ?>