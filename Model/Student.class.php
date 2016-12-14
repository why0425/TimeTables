<?php
class Student extends Model{
	public $stu_id;
	public $stu_name;
	public $stu_sex;
	public $stu_xuehao;
	public $grade_id;
	public $class_id;
	//注册用户
	public function insert(){
		$query="insert into student values(null,'{$this->stu_name}','{$this->stu_sex}',{$this->stu_xuehao},{$this->grade_id},{$this->class_id})";
		$res=$this->db->_query($query);
		return $res;
	}
	//判断用户
	public function checkLogin(){
		$query="select stu_id,stu_name,stu_xuehao from student where '{$this->stu_name}'=stu_name and {$this->stu_xuehao}=stu_xuehao";
	    $res=$this->db->_query($query);
	    $res=$this->db->getRow();
	    return $res;
	}
	//查询学生信息
	public function searchRow(){
		$query="select s.*,g.*,c.* from student s left join grade g on s.grade_id=g.grade_id left join class c on s.class_id=c.class_id where stu_id={$this->stu_id}";
		$res=$this->db->_query($query);
		$row=$this->db->getRow();
		return $row;
	}
	//查询用户是否添加过课程表
	public function getAddCourse(){
		$query="select s.stu_id,s.grade_id,s.class_id,t.grade_id,t.class_id from student s left join timetables t on s.grade_id=t.grade_id where s.class_id=t.class_id and stu_id={$this->stu_id}";
		$res=$this->db->_query($query);
		$row=$this->db->getRow();
		return $row;
	}
}