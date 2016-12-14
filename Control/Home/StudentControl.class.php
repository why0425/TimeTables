<?php
class StudentControl extends View{
	//显示注册用户页面
	public function regis(){
		$grade=new Grade();
		$option1_id=$grade->search_id();
		$option1_name=$grade->search_name();
		$this->smarty->assign('option1_id',$option1_id);
		$this->smarty->assign('option1_name',$option1_name);
		
		$class=new Classes();
		$option2_id=$class->search_id();
		$option2_name=$class->search_name();
		$this->smarty->assign('option2_id',$option2_id);
		$this->smarty->assign('option2_name',$option2_name);
		
		$option3_id=array(1,2);
		$option3_name=array('男','女');
		$this->smarty->assign('option3_id',$option3_id);
		$this->smarty->assign('option3_name',$option3_name);
		$this->smarty->display(VIEW_DIR.'register.html');
	}
	//注册用户
	public function resgi_user(){
		$stu_name=isset($_POST['stu_name'])?$_POST['stu_name']:'';
		$stu_xuehao=isset($_POST['stu_xuehao'])?$_POST['stu_xuehao']:0;
		$grade=isset($_POST['grade'])?$_POST['grade']:0;
		$class=isset($_POST['class'])?$_POST['class']:0;
		$sex=isset($_POST['sex'])?$_POST['sex']:1;
		$student=new Student();
		$student->stu_name=$stu_name;
		$student->stu_xuehao=$stu_xuehao;
		$student->grade_id=$grade;
		$student->class_id=$class;
		$student->stu_sex=$sex;
		$res=$student->insert();
		if($res){
			//$smarty->display(VIEW_DIR.'login.html');
			redirectURL('index.php?group=Home&module=Student&act=login','注册成功，请稍后','0');
		}else{
			//echo '注册失败';
			redirectURL('index.php?group=Home&module=Student&act=resgi_user','注册失败，请重新注册','2');
		}
	}
	//用户登录页面
	public function login(){
	    $this->smarty->display(VIEW_DIR.'login.html');
	}
	//判断用户
	public function check_login(){
		//判断用户是否合法
		$stu_name=$_POST['stu_name'];
		$stu_xuehao=$_POST['stu_xuehao'];
		$student=new Student();
		$student->stu_name=$stu_name;
		$student->stu_xuehao=$stu_xuehao;
		$res=$student->checkLogin();
		if($res){
			$_SESSION['stu_name']=$res['stu_name'];
			$_SESSION['stu_id']=$res['stu_id'];
			redirectURL('index.php?group=Home&module=Index&act=index','','0');
		}else{
			redirectURL('index.php?group=Home&module=Student&act=resgi_user','登录失败，请重新登录','2');
		}
	}
	//注销用户
	public function del_session(){
		//注销用户（删除session）
		//删除session
		unset($_SESSION['stu_id']);
		unset($_SESSION['stu_name']);
		redirectURL('index.php?group=Home&module=Index&act=index','','0');
	}
	
	
}