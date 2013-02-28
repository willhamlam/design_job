<?php 

function MyAjaxFunction(){  
	
}  
add_action( 'wp_ajax_nopriv_MyAjaxFunction', 'MyAjaxFunction' );  
add_action( 'wp_ajax_MyAjaxFunction', 'MyAjaxFunction' );

 ?>