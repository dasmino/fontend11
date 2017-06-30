<?php 
class Bootstraps{
	public function __construct(){
		global $_web;
		$controllerName = ucfirst($_web['uri']['controller'])."Controller";
		$action = $_web['uri']['action'];
		if($_web['uri']['mod']=="api"){
			$path_controller = DIR_MODULES.$_web['uri']['mod']."/"."controller"."/".$controllerName.".php";
		}else{
			$path_controller = DIR_THEME.$_web['theme']['forder_theme'].'/modules/'.$_web['uri']['mod']."/"."controller"."/".$controllerName.".php";
		}
		// dd($path_controller);
		if (file_exists($path_controller)) {
			require_once $path_controller;
			$controller = new $controllerName;
			if (isset($action)) {
				$controller->$action();
			}
		}
	}
}