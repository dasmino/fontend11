<?php 
class GoogleanalyticsController extends Controller{
	public $info;
	public function __construct(){
		parent::__construct();
		$this->info = $this->loadModel('Googleanalytics');
	}
	public function index(){
		global $_web;
		// $dir          = DIR_TMP.'cdn/';
		if (isset($_POST['ok'])) {
			if ($_SESSION['group_id'] == '22' || $_SESSION['group_id'] == '20') {
				$google_analytics = trim(addslashes($this->input->post('google_analytics')));
				$google_site_verification = trim(addslashes($this->input->post('google_site_verification')));
	 
				$data_insert = array(
					'google_analytics'	=> $google_analytics,
					'google_site_verification'	=> $google_site_verification,
				);
				$this->info->update($data_insert);
				$this->view->data['success'] = lang('success_settings');
			}else{
				$mess = array(
							'flash_warning' => "Bạn không có quyền này!!!"
						);
				Session::create($mess);
			}
		}
		if (isset($_SESSION['flash_warning'])) {
			$this->view->data['flash_warning'] = Session::get('flash_warning');
			unset($_SESSION['flash_warning']);
		}
		$this->view->data['info']  = $this->info->getInfo();
		$this->view->render('google_analytics');
	}
}