<?php
class Classes extends Model{
	public $class_id;
	public $class_name;
	//取所有班级id
	public function search_id(){
		$query2='select * from class';
		$res2=$this->db->_query($query2);
		$option2_id=array();
		while($row2=mysql_fetch_assoc($res2)){
			$option2_id[]=$row2['class_id'];
		}
		return $option2_id;
	}
	//取所有班级名称
	public function search_name(){
		$query2='select * from class';
		$res2=$this->db->_query($query2);
		$option2_name=array();
		while($row2=mysql_fetch_assoc($res2)){
			$option2_name[]=$row2['class_name'];
		}
		return $option2_name;
	}
}