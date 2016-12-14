<?php
class AdminControl extends View{
	//验证用户，如果正确，跳到个人中心，错误重新输入
	public function check_admin(){
		$admin=new Admin();
		$admin->admin_name=$_POST['admin_name'];
		$admin->admin_pwd=$_POST['admin_pwd'];
		$res=$admin->check_admin();
		if($res){
			redirectURL('index.php?group=Admin&module=Timetables&act=search','','0');
		}else{
			redirectURL('index.php?group=Admin&module=Index&act=index','用户或者密码错误，请重新输入。。。。','2');
		}	
	}
	

	 
}