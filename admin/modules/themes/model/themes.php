<?php 
class Themes{
	private $themes;
	public function __construct(){
		global $_web;
		$this->lang        				= $_web['lang'];
		$this->themes     				= new system\Model('web_theme');
	}
	public function getThemeByName(){
		$this->themes->where('id',1);
		$result = $this->themes->getOne();
		return $result;
	}
	public function update($data){
		$this->themes->where('id',1);
		$this->themes->update($data);
	}
}