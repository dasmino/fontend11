<?php 
class PostsController extends Controller{
	public $modelPosts;
	public function __construct(){
		parent::__construct();
		$this->modelPosts = $this->loadModel('Posts');
	}
	public function categories(){
		global $_web;
		if (isset($_GET['id'])) {
		$id 		= $_GET['id'];
		$link 		= base_url().'news.htm';
		$getAllpost = $this->modelPosts->getposts();
		$all_pages 	= getPostLienQuan($id,$getAllpost);
		$paging 	= new Paging(count($all_pages),$link);
		$limit 		= $_web['options']['pagination_number'];
		// Tổng số trang
		$count_page = $paging->findPages($limit);
		// Bắt đầu từ mẫu tin
		$start 		= $paging->rowStart($limit);
		// Trang hiện tại
		$curpage 	= ($start/$limit)+1;
		// Tạo session id_cate_now khi vào chuyên mục
		if($_SESSION['id_cate_now'] && $_SESSION['id_cate_now'] != ""){
			$_SESSION['id_cate_now'] 	= $id;
		} else{
			$data = array(
				'id_cate_now' => $id
			);
			Session::create($data);
		}
		//Xuất dữ liệu với truy vấn
		$this->view->data['menu'] 		= $this->modelPosts->getcate($id);
		$this->view->data['data'] 		= getLimitPosts($all_pages,$start,$limit);
		//$this->view->data['data'] 	= $this->modelPosts->getPosts($id);
		$this->view->data['pagination'] = $paging->pagesList1($id,$curpage); 
		//$this->view->data['data_asc'] = $this->modelPosts->posts_widgets();

		// SEO
		$this->view->title 				= stripslashes($this->view->data['menu']['title']);
		$this->view->description 		= stripslashes($this->view->data['menu']['description']);
		$this->view->keywords 			= stripslashes($this->view->data['menu']['note']);
		$this->view->author 			= $_web['settings']['slogan'];
		$this->view->render('index');
		}
	
	}
	public function detail(){
		global $_L;
		global $_web;
		if (isset($_GET['id']) && is_numeric($_GET['id'])) {
			$id = $_GET['id'];

			$this->view->data['data_comment'] = $this->modelPosts->getCommentsByPostId($id);
			if (isset($_POST['submit']) && $_SESSION['_token']==$_POST['_token']) {
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
					$data_comment = array(
						'username'		=> trim(addslashes($_POST['username'])),
						'email'			=> trim($_POST['email']),
						'content'		=> trim(addslashes($_POST['comment'])),
						'post_id'  		=> $id,
						'create_time' 	=> time(),
						'status'		=> 0
					);

					$this->modelPosts->insert_comt($data_comment);
				}
			}

			$token =  rand(0,1000000000);
			$this->view->data['_token'] = $token;
			$_SESSION['_token'] = $token;
			// Lấy chi tiết tin
			$this->view->data['data_posts'] = $this->modelPosts->getDetail($id);
			// End lấy chi tiết tin
			// Lấy bài viết liên quan
			if ($_SESSION['id_cate_now'] && $_SESSION['id_cate_now'] != null) {
				$getAllpost = $this->modelPosts->getPostRandom(); //Lấy tất cả bài viết
				$this->view->data['post_lien_quan'] = getPostLienQuan($_SESSION['id_cate_now'],$getAllpost,5); //Lấy bài viết thuộc cate đã xem từ trước
			}else{
				$this->view->data['post_lien_quan'] = $this->modelPosts->getPostLienquanAction2($this->view->data['data_posts']['cate_id'],$id);
			}
			// End lấy bài viết liên quan
			$this->view->title 			= stripslashes($this->view->data['data_posts']['title']);
			$this->view->description 	= stripslashes($this->view->data['data_posts']['description']);
			$this->view->keywords 		= stripslashes($this->view->data['data_posts']['tags']);
			$this->view->author 		= $_web['settings']['slogan'];
		}
		$this->view->render('detail_view');
		
	}

	
}