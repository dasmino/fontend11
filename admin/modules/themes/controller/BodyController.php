<?php 
class BodyController extends Controller{
	public $modelWidgets;
	public $themes;
	public function __construct(){
		parent::__construct();
		$this->modelWidgets = $this->loadModel('Layout');
		$this->themes = $this->loadModel('themes');
	}
	public function index(){
		global $_web;
		if ($_SESSION['group_id'] == '22' || $_SESSION['group_id'] == '20') {
		 	$this->view->data['data'] = $this->modelWidgets->getWidgets();
			$data = $this->themes->getThemeByName();
			$body_theme = json_decode(base64_decode($data['body_theme']));
			$this->view->data['body_theme'] = $body_theme;
			$this->view->render('index_body');
		}else{
			$mess = array(
				'flash_warning' => "Bạn không có quyền này!!!"
			);
			Session::create($mess);
			return redirect(base_url().'settings/settings/manager');
		}
	}	
	
}