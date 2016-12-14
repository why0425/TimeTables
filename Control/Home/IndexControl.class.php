<?php
class IndexControl extends View{
	//显示首页
	public function index(){
		$online=isset($_SESSION['stu_name'])?$_SESSION['stu_name']:'';
		$this->smarty->assign('online',$online);
		$this->smarty->display(VIEW_DIR.'index.html');
	}
}