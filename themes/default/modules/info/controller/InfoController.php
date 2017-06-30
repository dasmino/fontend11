<?php 
class InfoController extends Controller{
	public $modelInfo;
	//public $loadPages;
	public function __construct(){
		parent::__construct();
		$this->modelInfo = $this->loadModel('Info');
	}
	public function index(){
		$this->view->data['data_posts']   = $this->modelInfo->getPostview();

		$this->view->data['view_home'] = $this->modelInfo->getManagerView();
		dd($this->view->data['data_posts']);
		  foreach ($this->view->data['view_home']  as $key => $value) {
		   $this->view->data['view_home'][$key]['content'] = json_decode($value['content'],true);
		   foreach ($this->view->data['view_home'][$key]['content'] as $key1 => $value1) {

		    foreach ($this->view->data['data_posts'] as $key2 => $value2) {
		     if($value1['id'] == $value2['id']){
		      $this->view->data['view_home'][$key]['content'][$key1] = $this->view->data['data_posts'][$key2];
		     }
		    }


		   }
		  }

		$this->view->render('index');
	}
	public function dichvu(){
		$this->view->data['dichvu'] = $this->modelInfo->getDichvu();
		$this->view->render('dichvu');
	}
}