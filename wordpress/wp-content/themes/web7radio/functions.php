<?php
// Set error reporting
error_reporting(1);
ini_set('display_errors', 'On');
ini_set('html_errors', 'On');

if ( ! defined( 'THEME_URL' ) )
	define( 'THEME_URL', get_template_directory_uri() );

if ( ! defined( 'THEME_DIR' ) )
	define( 'THEME_DIR', dirname(__FILE__) );

if ( ! defined( 'SITE_URL' ) )
	define( 'SITE_URL', get_site_url() );

if ( ! defined( 'AJAX_URL' ) )
	define( 'AJAX_URL', SITE_URL . '/wp-admin/admin-ajax.php' );

function app_require($path){
	require THEME_DIR . '/' . $path . '.php';
}

app_require('app/bootstrap');
