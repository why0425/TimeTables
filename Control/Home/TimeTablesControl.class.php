<?php
class TimeTablesControl extends View{
	//显示添加课程页面
	Public function add(){
		//判断用户是否登录
		$stu_id=isset($_SESSION['stu_id'])?$_SESSION['stu_id']:0;
		if($stu_id){
			//判断学生是否有该 课表
			$stu_id=$_SESSION['stu_id'];
			$student=new Student();
			$student->stu_id=$stu_id;
			$res=$student->getAddCourse();
			if(!$res){
			$student=new Student();
			$student->stu_id=$stu_id;
			$row=$student->searchRow();
			$this->smarty->assign('row',$row);
			$this->smarty->display(VIEW_DIR.'add.html');
			}else{
				redirectURL('index.php?group=Home&module=Index&act=index','你已经添加过课程，请直接查看','2');
			}
		}else{
			redirectURL('index.php?group=Home&module=Student&act=login','请先登录，再进行添加课程','2');
		}
	}
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
			redirectURL('index.php?group=Home&module=TimeTables&act=search','添加成功，正在跳转到课程表。。。。。','2');
		}else{
			redirectURL('index.php?group=Home&module=TimeTables&act=add','添加失败，请重试','2');
		}
	}
	//查看课程
	public function search(){
		//判断用户是否登录
		$stu_id=isset($_SESSION['stu_id'])?$_SESSION['stu_id']:0;
		if($stu_id){
			//查询用户信息
			$student=new Student();
			$student->stu_id=$stu_id;
			$row=$student->searchRow();
			$this->smarty->assign('row',$row);
            //查询课程信息
			$timetables=new TimeTables();
			$rows1=$timetables->getAll($row['grade_id'],$row['class_id'],1);
			$rows2=$timetables->getAll($row['grade_id'],$row['class_id'],2);
			$rows3=$timetables->getAll($row['grade_id'],$row['class_id'],3);
			$rows4=$timetables->getAll($row['grade_id'],$row['class_id'],4);
			$rows5=$timetables->getAll($row['grade_id'],$row['class_id'],5);
			$rows6=$timetables->getAll($row['grade_id'],$row['class_id'],6);
			$rows7=$timetables->getAll($row['grade_id'],$row['class_id'],7);
			$rows8=$timetables->getAll($row['grade_id'],$row['class_id'],8);
			
			$this->smarty->assign('rows1',$rows1);
			$this->smarty->assign('rows2',$rows2);
			$this->smarty->assign('rows3',$rows3);
			$this->smarty->assign('rows4',$rows4);
			$this->smarty->assign('rows5',$rows5);
			$this->smarty->assign('rows6',$rows6);
			$this->smarty->assign('rows7',$rows7);
			$this->smarty->assign('rows8',$rows8);
			$this->smarty->display(VIEW_DIR.'search.html');
			
			//include VIEW_DIR.'search.html';
		}else{
			redirectURL('index.php?group=Home&module=Student&act=login','请先登录，再进行查看课程','2');
		}
	}
}