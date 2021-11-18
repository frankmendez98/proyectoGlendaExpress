<?php

if (!function_exists('layout')) {
	function layout($view, $view_data = array(), $extras = array()) {

        $menu_data = array();
		echo view('template/header',$extras);
		echo view('template/menu',$menu_data);
		echo view($view, $view_data);
		echo view('template/footer');
		echo view('template/scripts',$extras);
        return true;
	}
}
?>