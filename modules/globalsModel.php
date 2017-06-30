<?php 
class GlobalsModel{
	private $menu;
	private $settings;
	private $options;
	private $widgets;
	private $banner;
	private $post;
	private $category_posts;
	private $theme;
	private $payment;
	private $tuvan;
	public function __construct(){
		global $_web;
		$this->lang        		= $_web['lang'];
		$this->menu     		= new system\Model($this->lang.'_menu');
		$this->settings     	= new system\Model('web_settings');
		$this->options     		= new system\Model('web_options');
		$this->widgets     		= new system\Model($this->lang.'_widgets');
		$this->banner     		= new system\Model($this->lang.'_banner_images');
		$this->post     		= new system\Model($this->lang.'_posts');
		$this->category_posts   = new system\Model($this->lang.'_categories_posts');
		$this->theme  		= new system\Model('web_theme');
		$this->payment  		= new system\Model('web_payment');
		$this->tuvan     = new system\Model('web_tuvan');

	}
		
	public function insertContact($data){
		$this->tuvan->insert($data);
	}
	public function getMenu($position){
		$this->menu->where('position',$position);
		$this->menu->orderBy('sort','asc');
		$result  = $this->menu->get();
		return $result;
	}
	public function getSettings(){
		$this->settings->where('id',2);
		$result = $this->settings->getOne();
		return $result;
	}
	public function getOptions(){
		$this->options->where('id',1);
		$result = $this->options->getOne();
		return $result;
	}
	public function getWidgets(){
		$result = $this->widgets->get();
		return $result;
	}
	public function getBanner(){
		$this->banner->where('status',1);
		$result = $this->banner->get();
		return $result;
	}
	public function getPost(){
		$this->post->orderBy('create_time','desc');
		$result = $this->post->get();
		return $result;
	}
	public function getCategoriPosts(){
		$result = $this->category_posts->get();
		return $result;
	}
	public function getTheme(){
		$this->theme->where('id',1);
		$result = $this->theme->getOne();
		return $result;
	}
	public function getPayment(){
		$this->payment->where('status',1);
		$result = $this->payment->get();
		return $result;
	}
}