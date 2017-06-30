<?php 
class Info{
	public function __construct(){
		global $_web;
		$this->lang        = $_web['lang'];
		$this->manager     			= new system\Model($this->lang.'_manager_view_home');
		$this->posts     			= new system\Model($this->lang.'_posts');
		$this->dichvu     			= new system\Model($this->lang.'_dichvu_images');
	}
	public function getManagerView(){
		$select = $this->lang."_manager_view_home.*, user.id as id_user, user.username";
		$this->manager->join('user', 'user.id = '.$this->lang.'_manager_view_home.create_author', 'LEFT');
		$this->manager->orderBy($this->lang.'_manager_view_home.position','asc');
		$this->manager->where($this->lang.'_manager_view_home.status','1');
		$result  = $this->manager->get(null, null,$select);
		return $result;
	}
	public function getPostview(){
    	// $this->posts->orderBy('position','ASC');
    	$result = $this->posts->get();
    	return $result;
    }
    	public function getDichvu(){
		// $this->options->where('status',1);
		$result = $this->dichvu->get();
		return $result;
	}
}