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
		wp_register_script('audioplayer', THEME_URL . '/assets/js/libs/audioplayer.js');
		wp_register_script('web7radio', THEME_URL . '/assets/js/web7radio.js');
		wp_register_script('calender', THEME_URL . '/assets/js/libs/jquery-ui-1.8.18.custom.min.js');
		wp_register_script('royalslider',THEME_URL. '/assets/js/libs/jquery.royalslider.min.js');

		wp_enqueue_script('jquery');
		wp_enqueue_script('app');
		wp_enqueue_script('template');
		wp_enqueue_script('audioplayer');
		wp_enqueue_script('web7radio');
		wp_enqueue_script('calender');
		wp_enqueue_script('royalslider');

		wp_enqueue_style( 'base', THEME_URL . '/assets/css/base.css' );
		wp_enqueue_style( 'common', THEME_URL . '/assets/css/common.css' );
		wp_enqueue_style( 'page', THEME_URL . '/assets/css/page.css' );
		wp_enqueue_style( 'calender', THEME_URL . '/assets/css/datepicker.css' );
		wp_enqueue_style( 'royalslider', THEME_URL . '/assets/css/royalslider.css' );
		wp_enqueue_style( 'rs-default', THEME_URL . '/assets/css/rs-default.css' );
	}
}
add_action('init', 'loadscript');
 ?>