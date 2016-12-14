<?php
class IndexControl extends View{
	//显示后台首页
	public function index(){
		$this->smarty->display(VIEW_DIR_Admin.'index.html');
	}
	
}