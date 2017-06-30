<?php 
class Home{
	private $posts;
	public function __construct(){
		global $_web;
		$this->lang        = $_web['lang'];
        $this->posts     = new system\Model($this->lang.'_posts');
        $this->manager_view_home     = new system\Model($this->lang.'_manager_view_home_post');
	}
	public function getAllNews($start=null,$limit=null){
    	$select = $this->lang."_posts.id,".$this->lang."_posts.title,".$this->lang."_posts.alias,".$this->lang."_posts.description,".$this->lang."_posts.thumbnail,".$this->lang."_posts.create_time, user.id as id_user, user.username";
    	$this->posts->where( $this->lang."_posts.status",1);
    	$this->posts->join('user', 'user.id = '.$this->lang.'_posts.author_create', 'LEFT');
    	if ($start== null && $limit==null) {
    		$result = $this->posts->get(null,null,$select);
    	}else{
    		$result = $this->posts->get(null,array($start,$limit),$select);
    	}
    	return $result;
    }
    public function getManagerHome(){
        $this->manager_view_home->where("status",1);
        $this->manager_view_home->orderBy("position", "ASC");
        $result = $this->manager_view_home->get();
        return $result;
    }
}