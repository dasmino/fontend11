<?php 
class Tuvan{
	private $tuvan;
	public function __construct(){
		global $_web;
		$this->lang        = $_web['lang'];
		$this->tuvan     = new system\Model('web_tuvan');
	}
	public function getContact(){
		$result  = $this->tuvan->get();
		return $result;
	}
	public function getPagiContact(){
		$result  = $this->tuvan->get(null, null,$select);
		return $result;
	}
	public function update($data,$id){
		$this->tuvan->where('id',$id);
		$this->tuvan->update($data);
	}
	public function delete($id){
		$this->tuvan->where('id',$id);
		$this->tuvan->delete();
	}
	public function insertData($data_insert){
		$this->tuvan->insert($data_insert);
	}



	public function checkId($id){
		$this->tuvan->where('id',$id);
		$result  = $this->tuvan->num_rows();
		if ($result>0) {
			return FALSE;
		}else{
			return TRUE;
		}
	}
	
	public function getContactById($id){
		$this->tuvan->where('id',$id);
		$result  = $this->tuvan->getOne();
		return $result;
	}
	public function findSearch($search){
		$this->tuvan->where('name', '%'.$search.'%', 'like');
		$result  = $this->tuvan->get();
		return $result;
	}
	public function dellWhereInArray($name_id){
		$name = implode(",",$name_id);
		$sql = "DELETE FROM web_tuvan WHERE id IN (".$name.")";
		$this->tuvan->rawQuery($sql);
	}
}