<?php 
class SocialnetworkController extends Controller{
	public $info;
	public function __construct(){
		parent::__construct();
		$this->info = $this->loadModel('Socialnetwork');
	}
	public function index(){
		global $_web;
		if (isset($_POST['ok'])) {
			if ($_SESSION['group_id'] == '22' || $_SESSION['group_id'] == '20') {
				$link_fb = trim(addslashes($this->input->post('link_fb')));
				$link_gg = trim(addslashes($this->input->post('link_gg')));
				$link_yt = trim(addslashes($this->input->post('link_yt')));
				$link_tt = trim(addslashes($this->input->post('link_tt')));
				$link_gm = trim(addslashes($this->input->post('link_gm')));
	 
				$data_insert = array(
					'link_facebook'		=> $link_fb,
					'link_google'		=> $link_gg,
					'link_tt'			=> $link_tt,
					'link_youtube'		=> $link_yt,
					'link_google_map'	=> $link_gm,
				);
				$this->info->update($data_insert);
				$this->view->data['success'] = lang('success_settings');
			}else{
				$mess = array(
							'flash_warning' => "Bạn không có quyền này!!!"
						);
				Session::create($mess);
				return redirect(base_url().'settings/socialnetwork/index');
			}
		}
		if (isset($_SESSION['flash_warning'])) {
			$this->view->data['flash_warning'] = Session::get('flash_warning');
			unset($_SESSION['flash_warning']);
		}
		$this->view->data['info']  = $this->info->getInfo();
		$this->view->render('socialnetwork');
	}
}