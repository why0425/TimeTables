<?php
class TimeTables extends Model{
	public $time_tables_id;
	public $grade_id;
	public $class_id;
	public $week_id;
	public $course;
	public $node;
	public function add_course($arr){
		$str='';
		foreach($arr as $k=>$v){
			foreach($v as $k1=>$v1){
				//判断节
				if($k==0){
					$this->node=1;
				}elseif($k==1){
					$this->node=2;
				}elseif($k==2){
					$this->node=3;
				}elseif($k==3){
					$this->node=4;
				}elseif($k==4){
					$this->node=5;
				}elseif($k==5){
					$this->node=6;
				}elseif($k==6){
					$this->node=7;
				}elseif($k==7){
					$this->node=8;
				}
				//判断星期
				if($k1==0){
					$this->week_id=1;
				}elseif($k1==1){
					$this->week_id=2;
				}elseif($k1==2){
					$this->week_id=3;
				}elseif($k1==3){
					$this->week_id=4;
				}elseif($k1==4){
					$this->week_id=5;
				}elseif($k1==5){
					$this->week_id=6;
				}elseif($k1==6){
					$this->week_id=7;
				} 			
				//$query="inset into timeTables values (null,{$this->grade_id},{$this->class_id},{$this->week_id},'{$v1}',{$this->node})";
				$str.="(null,{$this->grade_id},{$this->class_id},{$this->week_id},'{$v1}',{$this->node}),";							    
			}
		}
		//$query="inset into timetables (grade_id,class_id,week_id,course,node) values".$str;
		$query="insert into timetables values".$str;
		$query=rtrim($query,',');//去除字符串最末尾的逗号
		return $res=$this->db->_query($query);
	}
	
	//查询课程信息
	public function getAll($grade_id,$class_id,$node){
		if($grade_id==0 && $class_id==0){
			
		}else{
		$query="select * from timetables where grade_id={$grade_id} and class_id={$class_id}  and node={$node}";
		$res=$this->db->_query($query);
		$rows=$this->db->getAll($res);
		return $rows;
		}
	}
	//查询年级、班级
	public function getGC(){
		$query="select t.grade_id,t.class_id,g.*,c.* from timetables t left join grade g on t.grade_id=g.grade_id left join class c on t.class_id=c.class_id where t.grade_id={$this->grade_id} and t.class_id={$this->class_id}";
		$res=$this->db->_query($query);
		$rows=$this->db->getAll($res);
		return $rows;
	}
	//查询要添加的年级
	public function getG_name(){
		$query="select * from grade where grade_id={$this->grade_id}";
		$res=$this->db->_query($query);
		$row=$this->db->getRow($res);
		return $row;
	}
	//查询要添加的班级
	public function getC_name(){
		$query="select * from class where class_id={$this->class_id}";
		$res=$this->db->_query($query);
		$row=$this->db->getRow($res);
		return $row;
	}
	//删除班级课程
	public function delete(){
		$query="delete from timetables where grade_id={$this->grade_id} and class_id={$this->class_id}";
		$res=$this->db->_query($query);
		return $res;
	}
	//修改课程
	public function update($arr1){		
		$str='';	
		$res=array();
		foreach($arr1 as $k=>$v){
			foreach($v[0] as $k1=>$v1){		
			$kk=$k+1;
			$kk1=$k1+1;	
			$query="update timetables set course='{$v1}' where grade_id={$this->grade_id} and class_id={$this->class_id} and week_id={$kk1} and node={$kk};";		
		    $res[]=$this->db->_query($query);		    
			}
		}
		return $res;
	}
	//查询该班级是否有课程表
	public function getCourse(){
		$query="select * from timetables  where class_id={$this->class_id} and grade_id={$this->grade_id}";
		$res=$this->db->_query($query);
		$row=$this->db->getRow();
		return $row;
	}
}



