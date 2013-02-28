<?php 

app_require('app/admin/menu.class');

$menu_name = 'mytheme';
$new_wp_menu = new WP_MENU($menu_name, 'theme');
add_action('admin_menu', array($new_wp_menu, 'configure'));

// register admin head
function admin_register_head() {
	$menu_name = 'mytheme';
	if($_REQUEST['page'] == NULL) return false;
	if( $_REQUEST['page'] == $menu_name . '-menu') {
	}
}
add_action('admin_head', 'admin_register_head');
?>