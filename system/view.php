<?php 
class View{
	public $_fileView;
	public $_title;
	public $_description;
	public $_keywords;
	public $_author;
	public $_thumbnail;
	public $_appendCss;
	public $appendCss;
	public $_appendJs;
	public $appendJs;
	public $_appendPluginsModCss;
	public $_appendPluginsModJs;
	public function render($file,$fullFile = true, $template = "teamplate"){
		global $_web;
		
		if($_web['uri']['mod']=="api"){
			$path = DIR_MODULES . $_web['uri']['mod']."/view/".$file.".php";
		} else {
			$path = DIR_THEME.$_web['theme']['forder_theme'].'/modules/'. $_web['uri']['mod']."/view/".$file.".php";
		}
		// $path = DIR_MODULES . $_web['uri']['mod']."/view/".$file.".php";
		if ($fullFile == true) {
			$this->_fileView = $file;

			// append file js in folder Modules/resource/js
			if($_web['uri']['mod']=="api"){
				$pathJs = DIR_MODULES . $_web['uri']['mod'] .'/resource/js';
			} else {
				$pathJs = DIR_THEME.$_web['theme']['forder_theme'].'/modules/'. $_web['uri']['mod'] .'/resource/js';
			}
			// $pathJs = DIR_MODULES . $_web['uri']['mod'] .'/resource/js';
			if (file_exists($pathJs)) {
				$filesJs = array_diff(scandir($pathJs), array('.', '..'));
			}

			if (!empty($filesJs)) {
				$htmlJs = '<!--START LOAD JS MODULES '.strtoupper($_web['uri']['mod']).'-->';
				foreach ($filesJs as $value) {
					$info = pathinfo($value);
					if ($info["extension"] == "js") { 
						if($_web['uri']['mod']=="api"){
							$htmlJs .= '<script type="text/javascript" src="'.base_url().'/modules/'.$_web['uri']['mod'] .'/resource/js/'.$value.'"></script>';
						}else{
							$htmlJs .= '<script type="text/javascript" src="'.base_url().'themes/'.$_web['theme']['forder_theme'].'/modules/'.$_web['uri']['mod'] .'/resource/js/'.$value.'"></script>';
						}
					}
				}
				$htmlJs .= '<!--END LOAD CSS MODULES '.strtoupper($_web['uri']['mod']).'-->';
				$this->_appendJs = $htmlJs;
			}

			// append file css in folder Modules/resource/css
			if($_web['uri']['mod']=="api"){
				$pathCss = DIR_MODULES . $_web['uri']['mod'] .'/resource/css';
			} else {
				$pathCss = DIR_THEME.$_web['theme']['forder_theme'].'/modules/'. $_web['uri']['mod'] .'/resource/css';
			}
			// $pathCss = DIR_MODULES . $_web['uri']['mod'] .'/resource/css';
			if (file_exists($pathCss)) {
				$filesCss = array_diff(scandir($pathCss), array('.', '..'));
			}
			if (!empty($filesCss)) {
				$htmlCss = '<!--START LOAD CSS MODULES '.strtoupper($_web['uri']['mod']).'-->';
				foreach ($filesCss as $value) {
					$info = pathinfo($value);
					if (@$info["extension"] == "css") { 
						if($_web['uri']['mod']=="api"){
							$htmlCss .= '<link rel="stylesheet" href="'.base_url().'/modules/'.$_web['uri']['mod'] .'/resource/css/'.$value.'">';
						}else{
							$htmlCss .= '<link rel="stylesheet" href="'.base_url().'themes/'.$_web['theme']['forder_theme'].'/modules/'.$_web['uri']['mod'] .'/resource/css/'.$value.'">';
						}
					}
				}
				$htmlCss .= '<!--END LOAD CSS MODULES '.strtoupper($_web['uri']['mod']).'-->';
				$this->_appendCss = $htmlCss;

			}



			if($_web['uri']['mod']=="api"){
				$pathPlugins = DIR_MODULES . $_web['uri']['mod'] .'/resource/plugins/';
			} else {
				$pathPlugins = DIR_THEME.$_web['theme']['forder_theme'].'/modules/'. $_web['uri']['mod'] .'/resource/plugins/';
			}
			// $pathPlugins = DIR_MODULES . $_web['uri']['mod'] .'/resource/plugins/';
			if (file_exists($pathPlugins)) {
				$folderPlugins = array_diff(scandir($pathPlugins), array('.', '..'));
			}

			// Append Plugins all css in folder Modules/resource/NAME_PLUGINS/css
			
			if (!empty($folderPlugins)) {
				foreach ($folderPlugins as $item) {
					if($_web['uri']['mod']=="api"){
						$pathPluginsCss = DIR_MODULES . $_web['uri']['mod'] .'/resource/plugins/'.$item.'/css/';
					} else {
						$pathPluginsCss = DIR_THEME.$_web['theme']['forder_theme'].'/modules/'. $_web['uri']['mod'] .'/resource/plugins/'.$item.'/css/';
					}
					// $pathPluginsCss = DIR_MODULES . $_web['uri']['mod'] .'/resource/plugins/'.$item.'/css/';
					if (file_exists($pathPluginsCss)) {
						$filesPluginsCss = array_diff(scandir($pathPluginsCss), array('.', '..'));
					}
					if (!empty($filesPluginsCss)) {
						$htmlCssPlugins = '<!--START LOAD PLUGINS CSS MODULES '.strtoupper($_web['uri']['mod']).'-->';
						foreach ($filesPluginsCss as $value) {
							$info = pathinfo($value);
							if ($info["extension"] == "css") { 
								if($_web['uri']['mod']=="api"){
									$htmlCssPlugins .= '<link rel="stylesheet" href="'.base_url().'modules/'.$_web['uri']['mod'] .'/resource/plugins/'.$item.'/css/'.$value.'">';
								}else{
									$htmlCssPlugins .= '<link rel="stylesheet" href="'.base_url().'themes/'.$_web['theme']['forder_theme'].'/modules/'.$_web['uri']['mod'] .'/resource/plugins/'.$item.'/css/'.$value.'">';
								}
							}
						}
						$htmlCssPlugins .= '<!--END LOAD PLUGINS CSS MODULES '.strtoupper($_web['uri']['mod']).'-->';
						$this->_appendPluginsModCss = $htmlCssPlugins;
					}


					// Append Plugins all js in folder Modules/resource/NAME_PLUGINS/js
					if($_web['uri']['mod']=="api"){
						$pathPluginsJs = DIR_MODULES . $_web['uri']['mod'] .'/resource/plugins/'.$item.'/js/';
					} else {
						$pathPluginsJs = DIR_THEME.$_web['theme']['forder_theme'].'/modules/'. $_web['uri']['mod'] .'/resource/plugins/'.$item.'/js/';
					}
					// $pathPluginsJs = DIR_MODULES . $_web['uri']['mod'] .'/resource/plugins/'.$item.'/js/';
					if (file_exists($pathPluginsJs)) {
						$filesPluginsJs = array_diff(scandir($pathPluginsJs), array('.', '..'));
					}
					if (!empty($filesPluginsJs)) {
						$htmlJsPlugins = '<!--START LOAD PLUGINS JS MODULES '.strtoupper($_web['uri']['mod']).'-->';
						foreach ($filesPluginsJs as $value) {
							$info = pathinfo($value);
							if ($info["extension"] == "js") { 
								if($_web['uri']['mod']=="api"){
									$htmlJsPlugins .= '<script type="text/javascript" src="'.base_url().'modules/'.$_web['uri']['mod'] .'/resource/plugins/'.$item.'/js/'.$value.'"></script>';
								}else{
									$htmlJsPlugins .= '<script type="text/javascript" src="'.base_url().'themes/'.$_web['theme']['forder_theme'].'/modules/'.$_web['uri']['mod'] .'/resource/plugins/'.$item.'/js/'.$value.'"></script>';
								}
							}
						}
						$htmlJsPlugins .= '<!--END LOAD PLUGINS CSS MODULES '.strtoupper($_web['uri']['mod']).'-->';
						$this->_appendPluginsModJs = $htmlJsPlugins;
					}


				}
			}

			$this->setMeta();
			// dd($template);
			// $this->setTeamplate($fordertemplate,$tem);
			$this->setTeamplate($template);
		}else{
			if (file_exists($path)) {
				require_once $path;
			}else{
				echo "Error: không tìm thấy file view trong module. ";
			}
		}


	}
	public function setTeamplate($tem = "teamplate"){
		global $_web;
		if($_web['theme']['forder_theme']==""){
			$path = DIR_THEME ."default/".$tem.".php";
		} else {
			$path = DIR_THEME .$_web['theme']['forder_theme']."/".$tem.".php";
		}
		require_once $path;
			//$this->teamplate = 
	}
	public function setMeta(){
		if (isset($this->title)) {
			$this->_title = "<title>".$this->title."</title>\n";
			unset($this->title);
		}
		if (isset($this->description)) {
			$this->_description = "<meta name='description' content='".$this->description."'/>\n";
			unset($this->description);
		}
		if (isset($this->keywords)) {
			$this->_keywords = "<meta name='keywords' content='".$this->keywords."'/>\n";
			unset($this->keywords);
		}
		if (isset($this->author)) {
			$this->_author = "<meta name='author' content='".$this->author."'/>\n";
			unset($this->author);
		}
		if (isset($this->thumbnail)) {
			$this->_thumbnail = "<meta property='og:image' content='".$this->thumbnail."'/>\n";
			unset($this->thumbnail);
		}
	}
}