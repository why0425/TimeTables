<?php
header("content-type:text/html;charset=utf-8");
 
$group=isset($_REQUEST['group'])?$_REQUEST['group']:'Home';
$module=isset($_REQUEST['module'])?$_REQUEST['module']:'Index';
$act=isset($_REQUEST['act'])?$_REQUEST['act']:'Index'; 

$config=include "config/config.php";
//配置常量
$file=str_replace('\\','/',__FILE__);
$root=str_replace('includes/init.php','',$file);
define('ROOT',$root);
define('MODEL_DIR',ROOT.'Model/');//模块常量
define('VIEW_DIR',ROOT."View/Home/");//模板位置
define('VIEW_DIR_Admin',ROOT."View/Admin/");//模板位置


//include "smarty/SmartyBC.class.php";
//$smarty=new SmartyBC();

include ROOT."Core/Model.class.php";
include ROOT."Smarty-libs/smarty/SmartyBC.class.php";
include ROOT."Core/View.class.php";

include ROOT."Core/Application.class.php";

//自动加载函数
function __auto($c_n){
	include MODEL_DIR."{$c_n}.class.php";
}
spl_autoload_register('__auto');

@session_start();


function redirectURL($url,$msg='',$second=1) {
	if($second==0) {
		//立即跳转
		header("location:$url");
		exit;//跳转后立马终止该脚本的执行
	}else{
		//引用模板完成跳转
		include "redirect.html";
		exit;
	}
}