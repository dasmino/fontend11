<?php 
class ApiController extends Controller{
	public $themes;
	public function __construct(){
		parent::__construct();
		$this->themes = $this->loadModel('themes');
	}
	public function readthemes(){
		global $_web;
		if ($_POST['open'] ==$_web['security_api'] ) {
			$dir    = DIR_THEME;
			$result =	dirToArray($dir);
			$n =0;
			foreach ($result as $key1 => $value1) {
				$data = fopen($dir.$value1['name'].'/info.txt', 'r');
				if (!$data) {
					echo 'khong co file';
				}else{
					while (!feof($data)) {
						$html[$n][] = fgets($data);
					}
				}
				$n++;
			}
			$data_theme = $this->themes->getThemeByName();
			$htmlthemes ="";
			// dd($html);
			foreach ($html as $key => $value) {
				$info_theme = explode('|', $value[0]);
				$htmlthemes .= '<tr role="row" class="odd">
                        <td style="width:280px;height:180px;"><img src="'.base_url().'themes/'.$info_theme[3].'/'.$info_theme[2].'"></td>
                        <td>'.$info_theme[0].'<br/>'.$info_theme[1].'</td>
                        <td>'.$info_theme[4].'</td><td>';
                if($info_theme[3] == $data_theme['forder_theme'] && $info_theme[0] == $data_theme['name_theme']){
                	$htmlthemes .= '<a class="btn btn-success" href="#">'.lang('using').'</a>';
                }else{
                	$htmlthemes .= '<button data-bodytheme="'.base64_encode($info_theme[5]).'" data-name="'.$info_theme[0].'" data-path="'.$info_theme[3].'" type="button" class="btn btn-primary clickloadtheme" data-dismiss="modal">'.lang('active').'</button>';
                }       
                $htmlthemes .= '</td></tr>';
			}
			// dd($htmlthemes )
			$data = array(
			    	'status'	=> true,
			    	'html'		=> $htmlthemes,
			    );

			echo json_encode($data);
		}else{
			echo "Bạn lồn có quyền mình nói thẳng!!!!";
		}
	}
		
}