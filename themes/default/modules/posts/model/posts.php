<?php 
class Posts{
    private $cate;
    private $posts;
    private $comments;
    public function __construct(){
        global $_web;
        $this->lang        = $_web['lang'];
        $this->posts     = new system\Model($this->lang.'_posts');
        $this->cate     = new system\Model($this->lang.'_categories_posts');
        $this->comments     = new system\Model($this->lang.'_comments_posts');
    }
    public function getBreadcrumbsCategory($idCate, $data = array()) {
        $this->cate->where("id",$idCate);
        $this->cate->where("status",1);
        $category = $this->cate->getOne();

        $category['link'] = base_url().alias($category['title']).'-c'.$category['id'].'.htm';
        $data[]           = array(
            'name' => (isset($category['title']) ? $category['title'] : ''),
            'href'  => $category['link'],
        );
        if (isset($category['parent_id']) && $category['parent_id'] > 0) {
            $data = $this->getBreadcrumbsCategory($category['parent_id'], $data);
        }
        return $data;
    }
    public function getposts(){
        $this->posts->where('status',1);
        $this->posts->orderBy("create_time", "DESC");
        $result  = $this->posts->get();
        return $result;
    }
    public function getcate($id){
        $this->cate->where('id',$id);
        $this->cate->where('status','1');
        $result  = $this->cate->getOne();
         return $result;
    }
    public function getPostRandom(){
        $this->posts->where('status',1);
        $this->posts->orderBy("RAND()");
        $result  = $this->posts->get();
        return $result;
    }
    public function getPostLienquanAction2($cateid,$id){
        $sql = "SELECT * FROM "
        .$this->lang."_posts WHERE ".
        $this->lang."_posts.cate_id like '%".$cateid."%' AND ".$this->lang."_posts.id != '".$id."' ORDER BY rand() LIMIT 0,5";
        $result = $this->posts->rawQuery($sql);
        return $result;
    }
    public function getAllPost($start,$limit){
        $select = $this->lang."_posts.id,"
        .$this->lang."_posts.title,".$this->lang."_posts.alias,".$this->lang."_posts.thumbnail,".$this->lang."_posts.description,"
        .$this->lang."_posts.create_time, user.id as id_user, user.username";
        $this->posts->where( $this->lang."_posts.status",1);
        $this->posts->orderBy("create_time", "DESC");
        $this->posts->join('user', 'user.id = '.$this->lang.'_posts.author_create', 'LEFT');
        $result = $this->posts->get(null,array($start,$limit),$select);
        return $result;
    }
    public function getNoibat($start,$limit){
        $select = $this->lang."_posts.id,"
        .$this->lang."_posts.title,".$this->lang."_posts.alias,".$this->lang."_posts.thumbnail,".$this->lang."_posts.description,"
        .$this->lang."_posts.create_time, user.id as id_user, user.username";
        $this->posts->where( $this->lang."_posts.status",1);
        $this->posts->orderBy("create_time", "DESC");
        $this->posts->join('user', 'user.id = '.$this->lang.'_posts.author_create', 'LEFT');
        $result = $this->posts->get(null,array($start,$limit),$select);
        return $result;
    }
    public function getDetail($id){
        $select = $this->lang."_posts.*, user.id as id_user, user.username";
        $this->posts->where( $this->lang."_posts.status",1);
        $this->posts->where( $this->lang."_posts.id",$id);
        $this->posts->join('user', 'user.id = '.$this->lang.'_posts.author_create', 'LEFT');
        $result = $this->posts->getOne(null,null,$select);
        return $result;
    }
    public function insert_comt($data){
        $this->comments->insert($data);
    }
    public function getCommentsByPostId($id){
        $this->comments->where("status",1);
        $this->comments->where("post_id",$id);
        $this->comments->orderBy("id","ASC");
        $result = $this->comments->get();
        return $result;
    }
}