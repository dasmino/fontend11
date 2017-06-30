<?php 
class HomeController extends Controller{
	public $modelNews;
	public $modelHome;
	public $modelProduct;
	//public $loadPages;
	public $cart;
	public function __construct(){
		parent::__construct();
		$this->modelHome = $this->loadModel('Home');
		$this->modelProduct = $this->loadModel('Product');
	}
	public function index(){
		/*$this->view->title = "Thiết kê website";
		$this->view->description = "Bài học này sẽ giúp các bạn biết cách sử dụng thẻ meta Description sao cho hiệu quả và đúng quy tắc của Google.";
		$this->view->keywords = "PHP, Laravel, ZendFramework, Phalcon";
		$this->view->author = "Lê Ngọc Cường";*/
		$link = base_url().'home.htm';
		$this->view->data['data_home'] = $this->modelProduct->getProductHome();
		$this->view->data['khoai'] = 1234;
		$this->view->render('index');
	}
	public function getDetailProductHome(){
		global $_web;
		if (isset($_POST['id']) && is_numeric($_POST['id'])) {
			$id = $_POST['id'];
			$data = $this->modelProduct->getDetailProductByHome($id);
			$html = '';
			if (!empty($data)) {

				// xử lý tình trang hàng hóa
				$state = array('state_hot', 'state_arrival', 'state_new', 'state_old', 'state_no_sold','state_sale');
				$i=1;
				$name_state ='';
				if ($data['state']!="") {
					foreach ($state as $key => $value) {
						if (strpos($data['state'], '|'.$i.'|') !== false) {
							$name_state = lang($value);
						}
						$i++;
					}
				}
				// xu ly thoi gian khuyen mai
                $sale = false;
                if ($data['saleoff'] > 0) {
                    if ($data['time_start'] < time() && $data['time_end'] > time()) {
                        $sale = true;
                    }
                }
                $sticker_sale = ($sale==true) ? '<div class="sticker sticker-sale"></div>' : '';
                // sticker mặt hàng mới
                $sticker_new ='';
                if ($data['state']!="") {
                	  $pos = strpos($data['state'], "|3|");
                      if ($pos !== false) {
                        $sticker_new = '<div class="sticker sticker-new"></div>';
                      }
                }

                // xử lý giá khuyến mại
                $price='';
                $price_hidden='';
                if ($sale==true) {
                	$price = '<strong><span>$</span>'.$data['price'].'</strong>
							 <em>$<span>'.$data['saleoff'].'</span></em>';

					$price_hidden = $data['saleoff'];
                    
                }else{
                	$price = '<strong><span>$</span>'.$data['price'].'</strong>';
                	$price_hidden = $data['price'];
                }

                // xử lý ảnh
                $list_img='';
                if ($data['image_list']!="") {
                	$image_list = json_decode($data['image_list'],true);
                	if (!empty($image_list)) {
                		foreach ($image_list as $key => $value) {
                			$list_img .= '<a href="javascript:void(0)"><img alt="'.$value['att_title'].'" src="'.$_web['base_url_cdn'].$value['name'].'"></a>';
                		}
                	}
                }

				$html .= '<div class="col-md-6 col-sm-6 col-xs-3">
				              <div class="product-main-image">
				                <img src="'.$_web['base_url_cdn'].$data['avatar'].'" alt="'.$data['name'].'" data-BigImgSrc="'.$_web['base_url_cdn'].$data['avatar'].'" class="img-responsive flag">
				              </div>
				              <div class="product-other-images">
				                '.$list_img.'
				              </div>
				            </div>
				            <div class="col-md-6 col-sm-6 col-xs-9">
				              <h2>'.$data['name'].'</h2>
				              <div class="price-availability-block clearfix">
				                <div class="price">
				                  '.$price.'
				                </div>
				                <div class="availability">
				                  '.lang('availability').': <strong>'.$name_state.'</strong>
				                </div>
				              </div>
				              <div class="description">
				                <p>'.$data['short_info'].'</p>
				              </div>
				              <div class="product-page-options">
				                <div class="pull-left">
				                  <label class="control-label">'.lang('size').':</label>
				                  <select class="form-control input-sm size_popup" data-error="'.lang('error_size').'">
				                    <option value="">Chọn</option>
				                    <option value="L">L</option>
				                    <option value="M">M</option>
				                    <option value="XL">XL</option>
				                  </select>
				                </div>
				                <div class="pull-left">
				                  <label class="control-label">'.lang('color').':</label>
				                  <select class="form-control input-sm color_popup" data-error="'.lang('error_color').'">
				                  	<option value="">Chọn</option>
				                    <option value="Red">Red</option>
				                    <option value="Blue">Blue</option>
				                    <option value="Black">Black</option>
				                  </select>
				                </div>
				              </div>
				              <div class="product-page-cart">
				                <div class="product-quantity">
				                    <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm product_quantity">
				                </div>
				                <button class="btn btn-primary add2cart_popup" type="button" data-id="'.$data['id'].'">'.lang('add_to_cart').'</button>
				                <input type="hidden" class="hidden_product" value="'.$data['name'].'" />
                                <input type="hidden" class="hidden_price" value="'.$price_hidden.'">
				                <a href="'.base_url().'product/'.alias($data['name']).'-'.$data['id'].'.htm'.'" class="btn btn-default">'.lang('more_details').'</a>
				              </div>
				            </div>'.$sticker_sale.$sticker_new;
			}
			$data_mess = array(
				'status'	=> true,
				'html'		=> $html
			);
			echo json_encode($data_mess);
		}
	}
	public function setLang(){
		$lang = $this->input->post('lang');
		$cookie_name = "lang";
		$cookie_value = $lang;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/"); // 86400 = 1 day
		$data = array(
			'status' => true,
			'mess'	 => 'Success'
		);
		echo json_encode($data);
	}

	
}