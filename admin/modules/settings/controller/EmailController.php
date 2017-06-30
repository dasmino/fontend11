<?php 
class EmailController extends Controller{
	public $info;
	//public $loadPages;
	public function __construct(){
		parent::__construct();
		$this->info = $this->loadModel('Email');
	}
	public function index(){
		global $_web;
		$this->view->appendCss = '<link rel="stylesheet" href="'.base_url().'tmp/public/plugins/bootstrap-switch/css/bootstrap-switch.min.css'.'">';
		$this->view->appendJs = '<script type="text/javascript" src="'.base_url().'tmp/public/plugins/bootstrap-switch/js/bootstrap-switch.min.js'.'"></script>';
		if (isset($_POST['ok'])) {
			if ($_SESSION['group_id'] == '22' || $_SESSION['group_id'] == '20') {
				$email_mailler 			= trim(addslashes($this->input->post('email_mailler')));
				$email_pass 			= trim(addslashes($this->input->post('email_pass')));
				$data_insert = array(
					'email_mailler'	=> $email_mailler,
					'email_pass'	=> $email_pass,
					'email_check'=> ($_POST['sendmail']=='on') ? 1 : 0,
				);
				$this->info->update($data_insert);
				$this->view->data['success'] = lang('success_settings');
			}else{
				$mess = array(
							'flash_warning' => "Bạn không có quyền này!!!"
						);
				Session::create($mess);
				return redirect(base_url().'settings/email/index');
			}
		}
		if (isset($_SESSION['flash_warning'])) {
			$this->view->data['flash_warning'] = Session::get('flash_warning');
			unset($_SESSION['flash_warning']);
		}
		$this->view->data['options']  = $this->info->getInfo();
		$this->view->render('email');
	}
}