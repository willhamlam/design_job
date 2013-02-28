<?php 
class WP_MENU {
	
	function __construct($name, $type, $loc = false){
		$this->type = $type;
		$this->loc = $loc;
		$this->name = $name;
	}

	private function find_my_menu_item($handle, $sub = false) {		
		if(!is_admin() || (defined('DOING_AJAX') && DOING_AJAX)) return false;
		global $menu, $submenu;
		$check_menu = $sub ? $submenu : $menu;
		if(empty($check_menu)) return false;
		foreach($check_menu as $k => $item) {
		  if($sub) {
		    foreach($item as $sm) {
		      if($handle == $sm[2]) return true;
		    }
		  }else {
		    if($handle == $item[2]) return true;
		  }
		}
		return false;
	}

	private function is_active(){
		if($this->type == 'theme') return $this->name == get_current_theme();
		if($this->type == 'plugin') return is_plugin_active($this->loc);
	}

	public function display_admin() {
		app_require('app/admin/admin');
	}

	public function configure(){
		if($this->is_active() && !$this->find_my_menu_item($this->name)) add_menu_page(
				$this->name,
				$this->name,
				'manage_options',
				$this->name . '-menu',
				array($this, 'display_admin')
		);
	}
}
 ?>