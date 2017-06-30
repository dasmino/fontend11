<?php 
class ContactController extends Controller{
	public $modelContact;
	//public $loadPages;
	public function __construct(){
		parent::__construct();
		$this->modelContact = $this->loadModel('Contact');
	}
	public function index(){
		global $_L;
		global $_web;
		$this->getFlashMessager('flash_success');
		if (isset($_POST['send_mess'])) {
			$name = trim(addslashes($_POST['name']));
			$phone = trim(addslashes($_POST['phone']));
			$email = trim(addslashes($_POST['email']));
			$mess = trim(addslashes($_POST['mess']));
			$diachi = trim(addslashes($_POST['diachi']));
			$data_mess = array(
				'name'	=> $name,
				'phone'	=> $phone,
				'email'	=> $email,
				'diachi'	=> $diachi,
				'content'	=> $mess,
				'create_time'	=> time()
			);
			$this->modelContact->insertContact($data_mess);
			$this->flashMessager("flash_success","Cảm ơn bạn đã gửi tin cho chúng tôi.");
			redirect('current');
		}
		// dd($this->view->flash['flash_success']);
		$this->view->render('index');
	}
	
}