<?php 
class ThemesController extends Controller{
	public $themes;
	public function __construct(){
		parent::__construct();
		$this->themes = $this->loadModel('themes');
		
	}
	public function index(){
		global $_web;
		
		if (isset($_SESSION['flash_success'])) {
			$this->view->data['flash_success'] = Session::get('flash_success');
			unset($_SESSION['flash_success']);
		}
		if (isset($_SESSION['flash_warning'])) {
			$this->view->data['flash_warning'] = Session::get('flash_warning');
			unset($_SESSION['flash_warning']);
		}
		$this->view->render('index');
	}
	public function update_themes(){
		if (isset($_POST['data_path']) && isset($_POST['data_name']) && isset($_POST['data_body'])) {
			$data = array(
				'name_theme' 	=> $_POST['data_name'],
				'forder_theme' 	=> $_POST['data_path'],
				'body_theme' 	=> trim(addslashes($_POST['data_body']))
				);
			$this->themes->update($data);
			$data_success = array(
				'status' =>true,
			);
			$mess = array(
				'flash_success' => "Thay đổi thêm thành công!!!"
			);
			Session::create($mess);	
		}else{
			$data_success = array(
				'status' =>false,
			);
			$mess = array(
				'flash_warning' => "Bạn không có quyền này!!!"
			);
			Session::create($mess);	
		}
		echo json_encode($data_success); 
	}
}