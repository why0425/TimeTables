<?php /* Smarty version Smarty 3.1.4, created on 2016-12-06 08:37:26
         compiled from "D:\amp\apache\htdocs\TimeTables\View\Home\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3143958460846d46427-66839503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7445e19d76d36837aca11eed79ca8c5e97ef2cc3' => 
    array (
      0 => 'D:\\amp\\apache\\htdocs\\TimeTables\\View\\Home\\login.html',
      1 => 1474170958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3143958460846d46427-66839503',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_58460846db283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58460846db283')) {function content_58460846db283($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录页面</title>
<link rel="stylesheet" type="text/css" href="view/Home/Css/login.css">
</head>
<body>
<div id="login">
<h3>用户登录表</h3>
<form action="index.php?group=Home&module=Student&act=check_login" method="post">
姓名：<input type="text" name="stu_name">&nbsp;【<span id="name">请输入您的姓名</span>】<br/><br/>
学号：<input type="text" name="stu_xuehao">&nbsp;【<span id="xuehao">请输入您的学号</span>】<br/><br/>

<input type="submit" value="登录">
<input type="reset" value="重置">


</form>
</div>
</body>
</html><?php }} ?>