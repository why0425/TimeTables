<?php
class Application{
	public static function run(){
		//找到相应分组下的相应的模块的动作，并执行
		global $group;
		global $module;
		global $act;
		include "Control/{$group}/{$module}Control.class.php";
		$c_n=$module.'Control';
		$control=new $c_n();
		$control->$act();
		
	}
}