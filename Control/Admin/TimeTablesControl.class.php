<?php
class TimeTablesControl extends View{
	//后台添加课程
	public function search(){
		$grade=new Grade();
		$grade_id=$grade->search_id();
		$grade_name=$grade->search_name();
		$this->smarty->assign('grade_id',$grade_id);
		$this->smarty->assign('grade_name',$grade_name);
			
		$class=new Classes();
		$class_id=$class->search_id();
		$class_name=$class->search_name();
		$this->smarty->assign('class_id',$class_id);
		$this->smarty->assign('class_name',$class_name);
	
		$grade_id=isset($_POST['grade'])?$_POST['grade']:0;
		$class_id=isset($_POST['class'])?$_POST['class']:0;
	
		$_SESSION['grade_id']=$grade_id;
		$_SESSION['class_id']=$class_id;
		$timetables=new TimeTables();
		$rows1=$timetables->getAll($grade_id,$class_id,1);
		$rows2=$timetables->getAll($grade_id,$class_id,2);
		$rows3=$timetables->getAll($grade_id,$class_id,3);
		$rows4=$timetables->getAll($grade_id,$class_id,4);
		$rows5=$timetables->getAll($grade_id,$class_id,5);
		$rows6=$timetables->getAll($grade_id,$class_id,6);
		$rows7=$timetables->getAll($grade_id,$class_id,7);
		$rows8=$timetables->getAll($grade_id,$class_id,8);
		$this->smarty->assign('rows1',$rows1);
		$this->smarty->assign('rows2',$rows2);
		$this->smarty->assign('rows3',$rows3);
		$this->smarty->assign('rows4',$rows4);
		$this->smarty->assign('rows5',$rows5);
		$this->smarty->assign('rows6',$rows6);
		$this->smarty->assign('rows7',$rows7);
		$this->smarty->assign('rows8',$rows8);
		//查询年级、班级信息
		$timetables->grade_id=$_SESSION['grade_id'];
		$timetables->class_id=$_SESSION['class_id'];
		$this->smarty->assign('sel_grade',$_SESSION['grade_id']);
		$this->smarty->assign('sel_class',$_SESSION['class_id']);
		$getGC=$timetables->getGC();
		$this->smarty->assign('getGC',$getGC);
		$this->smarty->display(VIEW_DIR_Admin.'person.html');
	}
	public function admin_add(){
		//显示添加课程页面
		if($_SESSION['grade_id'] && $_SESSION['class_id']){
			$timetables=new TimeTables();
			$timetables->grade_id=$_SESSION['grade_id'];
			$timetables->class_id=$_SESSION['class_id'];
			$res=$timetables->getCourse();
			if(!$res){
				$timetables=new TimeTables();
				$timetables->grade_id=$_SESSION['grade_id'];
				$timetables->class_id=$_SESSION['class_id'];
				$row=$timetables->getG_name();
				$this->smarty->assign('row',$row);
				$row1=$timetables->getC_name();
				$this->smarty->assign('row1',$row1);
				$this->smarty->display(VIEW_DIR_Admin.'admin_add.html');
			}else{
				redirectURL('index.php?group=Admin&module=Timetables&act=search','对不起，你已经添加过该班课程','2');
			}
		}else{
			redirectURL('index.php?group=Admin&module=Timetables&act=search','请选择班级或者年级进行添加课程。。。。。','2');
		}
	}
	
	//后台添加课程
	public function add_course(){
		$tr1=array($_POST['course1'],$_POST['course2'],$_POST['course3'],$_POST['course4'],$_POST['course5'],$_POST['course6'],$_POST['course7']);
		$tr2=array($_POST['course8'],$_POST['course9'],$_POST['course10'],$_POST['course11'],$_POST['course12'],$_POST['course13'],$_POST['course14']);	
		$tr3=array($_POST['course15'],$_POST['course16'],$_POST['course17'],$_POST['course18'],$_POST['course19'],$_POST['course20'],$_POST['course21']);		
		$tr4=array($_POST['course22'],$_POST['course23'],$_POST['course24'],$_POST['course25'],$_POST['course26'],$_POST['course27'],$_POST['course28']);
		$tr5=array($_POST['course29'],$_POST['course30'],$_POST['course31'],$_POST['course32'],$_POST['course33'],$_POST['course34'],$_POST['course35']);
		$tr6=array($_POST['course36'],$_POST['course37'],$_POST['course38'],$_POST['course39'],$_POST['course40'],$_POST['course41'],$_POST['course42']);
		$tr7=array($_POST['course43'],$_POST['course44'],$_POST['course45'],$_POST['course46'],$_POST['course47'],$_POST['course48'],$_POST['course49']);
		$tr8=array($_POST['course50'],$_POST['course51'],$_POST['course52'],$_POST['course53'],$_POST['course54'],$_POST['course55'],$_POST['course56']);
		//将接收到的一位数组保存成二维数组
		$arr=array($tr1,$tr2,$tr3,$tr4,$tr5,$tr6,$tr7,$tr8);
		$timetables=new TimeTables();
		$timetables->class_id=$_POST['class_id'];
		$timetables->grade_id=$_POST['grade_id'];
		$res=$timetables->add_course($arr);
		if($res){
			redirectURL('index.php?group=Admin&module=TimeTables&act=search','添加成功，正在跳转到课程表。。。。。','2');
		}else{
			redirectURL('index.php?group=Admin&module=TimeTables&act=admin_add','添加失败，请重试','2');
		}
	}
	//显示需要修改的信息
	public function edit(){
		//获取年级班级的编号
		$grade_id=$_SESSION['grade_id'];
		$class_id=$_SESSION['class_id'];
		
		$timetables=new TimeTables();
		$rows1=$timetables->getAll($grade_id,$class_id,1);
		$rows2=$timetables->getAll($grade_id,$class_id,2);
		$rows3=$timetables->getAll($grade_id,$class_id,3);
		$rows4=$timetables->getAll($grade_id,$class_id,4);
		$rows5=$timetables->getAll($grade_id,$class_id,5);
		$rows6=$timetables->getAll($grade_id,$class_id,6);
		$rows7=$timetables->getAll($grade_id,$class_id,7);
		$rows8=$timetables->getAll($grade_id,$class_id,8);
		//分配到模板中
		$this->smarty->assign('rows1',$rows1);
		$this->smarty->assign('rows2',$rows2);
		$this->smarty->assign('rows3',$rows3);
		$this->smarty->assign('rows4',$rows4);
		$this->smarty->assign('rows5',$rows5);
		$this->smarty->assign('rows6',$rows6);
		$this->smarty->assign('rows7',$rows7);
		$this->smarty->assign('rows8',$rows8);
		//查询年级、班级信息
		$timetables->grade_id=$_SESSION['grade_id'];
		$timetables->class_id=$_SESSION['class_id'];
		$this->smarty->assign('sel_grade',$_SESSION['grade_id']);
		$this->smarty->assign('sel_class',$_SESSION['class_id']);
		$getGC=$timetables->getGC();
		$this->smarty->assign('getGC',$getGC);
		$this->smarty->display(VIEW_DIR_Admin.'edit.html');
	}
	//修改课表
	public function update(){
		$tr1=array();
		$tr1[]=$_POST['course1'];
	
		$tr2=array();
		$tr2[]=$_POST['course2'];
			
		$tr3=array();
		$tr3[]=$_POST['course3'];
				
		$tr4=array();
		$tr4[]=$_POST['course4'];
				
		$tr5=array();
		$tr5[]=$_POST['course5'];
				
		$tr6=array();
		$tr6[]=$_POST['course6'];
		
		$tr7=array();
		$tr7[]=$_POST['course7'];
				
		$tr8=array();
		$tr8[]=$_POST['course8'];
		
		$arr1=array($tr1,$tr2,$tr3,$tr4,$tr5,$tr6,$tr7,$tr8);
		$timetables=new TimeTables();
		$timetables->class_id=$_SESSION['class_id'];
		$timetables->grade_id=$_SESSION['grade_id'];	
		if($timetables->update($arr1)){
			redirectURL('index.php?group=Admin&module=TimeTables&act=search','修改成功','0');
		}else{
			redirectURL('index.php?group=Admin&module=TimeTables&act=edit','修改失败，请重试','2');
		}
	}
	//删除本班课程表
	public function del(){
		$timetables=new TimeTables();
		$timetables->grade_id=$_SESSION['grade_id'];
		$timetables->class_id=$_SESSION['class_id'];
		$res=$timetables->delete();
		if($res){
			redirectURL('index.php?group=Admin&module=Timetables&act=search','删除成功','2');
		}else{
			redirectURL('index.php?group=Admin&module=Timetables&act=search','删除失败，请重试','2');
		}
	}
	
}