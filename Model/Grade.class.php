<?php
class Grade extends Model{
	public $grade_id;
	public $grade_name;
	//取所有年级id
	public function search_id(){
		$query='select * from grade';
		$res=$this->db->_query($query);
		$option1_id=array();
		while($row1=mysql_fetch_assoc($res)){
			$option1_id[]=$row1['grade_id'];
		}
		return $option1_id;
	}
	//取所有年级名称
	public function search_name(){
		$query='select * from grade';
		$res=$this->db->_query($query);
		$option1_name=array();
		while($row1=mysql_fetch_assoc($res)){
			$option1_name[]=$row1['grade_name'];
		}
		return $option1_name;
	}
	
}