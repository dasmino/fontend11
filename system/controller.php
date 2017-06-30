<?php 
use voku\Cart\Cart;
use voku\Cart\Storage\Session;
use voku\Cart\Identifier\Cookie;
class Controller{
	public $view,$input,$mod,$controller,$action,$id,$loadPages,$modelGlobals,$menu,$cart;
	public function __construct(){
		global $_web;
		global $_L;
		// dd($_L);
		$this->mod          = $_web['uri']['mod'];
		$this->controller   = $_web['uri']['controller'];
		$this->action       = $_web['uri']['action'];
		$this->id           = $_web['uri']['id'];

		$this->input = new Input();
		$this->view = new View(); 
		$this->loadLibrary('paging');
		$this->modelGlobals 	= $this->loadModelGlobals('GlobalsModel');
		$_web['menu']		 	= $this->getMenuGlobals();
		$_web['ava']		 	= $this->getAva();
		$_web['settings'] 		= $this->getSettingsGlobals();
		$_web['options'] 		= $this->getOptionsGlobals();
		$_web['widgets'] 		= $this->getWidgetsGlobals();
		$_web['banner'] 		= $this->getBannerGlobals();

		$_web['post'] 			= $this->modelGlobals->getPost();
		$_web['category_post'] 	= $this->modelGlobals->getCategoriPosts();

		// Lay theme
		$_web['theme'] 			= $this->getThemeGlobals();
		// Lấy hình thức thanh toán
		$_web['payment'] 		= $this->getPaymentGlobals();
		// dd($_web);

		$this->cart 			= new Cart(new Session, new Cookie);
		$_web['cart'] 			= $this->cart->contents();
		$_web['total_cart'] 	= $this->cart->total();
		$_web['total_item'] 	= $this->cart->totalItems();
		$_web['total_unique'] 	= $this->cart->totalUniqueItems();
		//dd($_web);
		$this->getFlashMessager('flash_success');
		if (isset($_POST['send_mess'])) {
			$name = trim(addslashes($_POST['name']));
			$phone = trim(addslashes($_POST['phone']));
			$email = trim(addslashes($_POST['email']));
			$mess = trim(addslashes($_POST['mess']));
			// $diachi = trim(addslashes($_POST['diachi']));
			$data_mess = array(
				'name'	=> $name,
				'phone'	=> $phone,
				'email'	=> $email,
				// 'diachi'	=> $diachi,
				'content'	=> $mess,
				'create_time'	=> time()
			);
			$this->modelGlobals->insertContact($data_mess);
			$this->flashMessager("flash_success","Cảm ơn bạn đã gửi tin cho chúng tôi.");
			redirect('current');
		}
	}
	public function loadModel($file, $mod = null) {
		global $_web;
		if ($mod === null) {
			if($_web['uri']['mod']=="api"){
				$path = DIR_MODULES . $this->mod . '/model/' . lcfirst($file) . '.php';
			}else{
				$path = DIR_THEME.$_web['theme']['forder_theme'].'/modules/'. $this->mod . '/model/' . lcfirst($file) . '.php';
			}
			if (file_exists($path)) {
				include_once $path;
				$obj = new $file();
				return $obj;
			} else {
				die('Không tồn tại file này' . lcfirst($path));
			}
		} else {
			$path = DIR_MODULES . $mod . '/model/' . lcfirst($file) . '.php';
			if (file_exists($path)) {
				include_once $path;
				$obj = new $file();
				return $obj;
			} else {
				die('Không tồn tại file này' . lcfirst($path));
			}
		}
	}
	public function loadLibrary($file) {
		$path = DIR_APP . 'libraries/' . lcfirst($file) . '.php';
		if (file_exists($path)) {
			include_once $path;
		} else {
			die('Không tồn tại file này' . lcfirst($path));
		}
	}
	public function isPost($key){
		if (isset($_POST[$key])) {
			return true;
		}else{
			return false;
		}
	}
	public function loadModelGlobals($file){
		$path = DIR_MODULES . lcfirst($file) . '.php';
		if (file_exists($path)) {
			include_once $path;
			$obj = new $file();
			return $obj;
		} else {
			die('Không tồn tại file này' . lcfirst($path));
		}
	}
	public function getMenuGlobals(){
		$data = $this->modelGlobals->getMenu(1);
		return $data;
	}
	public function getAva(){
		$data = $this->modelGlobals->getMenu(2);
		return $data;
	}
	
	public function getSettingsGlobals(){
		$data = $this->modelGlobals->getSettings();
		return $data;
	}
	public function getOptionsGlobals(){
		$data = $this->modelGlobals->getOptions();
		return $data;
	}
	public function getWidgetsGlobals(){
		$data = $this->modelGlobals->getWidgets();
		return $data;
	}
	public function getBannerGlobals(){
		$data = $this->modelGlobals->getBanner();
		return $data;
	}
	// Load theme
	public function getThemeGlobals(){
		$data = $this->modelGlobals->getTheme();
		return $data;
	}
	// Lấy hình thức thanh toán
	public function getPaymentGlobals(){
		$data = $this->modelGlobals->getPayment();
		return $data;
	}
	// set Messager flash
	public function flashMessager($key='flash_success',$mess='Messager Demo Success.'){
		$mess = array(
			$key => $mess
			//'flash_success' => lang('update_page_success'),
		);
		//Session::create($mess);

		if (isset($mess) && !empty($mess)) {
			foreach ($mess as $key => $value) {
				$_SESSION[$key] = $value;
			}
		}
	}
	public function getFlashMessager($key='flash_success'){
		if (isset($_SESSION[$key])) {
			$this->view->flash[$key] = $_SESSION[$key];
			unset($_SESSION[$key]);
		}
	}
	

	
}