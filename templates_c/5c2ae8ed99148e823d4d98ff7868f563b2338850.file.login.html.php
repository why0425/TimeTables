<?php /* Smarty version Smarty 3.1.4, created on 2016-09-20 19:13:54
         compiled from "D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\View\Home\login.html" */ ?>
<?php /*%%SmartyHeaderCode:386257e119f2b90250-75200991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c2ae8ed99148e823d4d98ff7868f563b2338850' => 
    array (
      0 => 'D:\\amp\\apache\\www\\kehouyuxi\\09month\\0914\\TimeTables\\View\\Home\\login.html',
      1 => 1474170958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '386257e119f2b90250-75200991',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_57e119f2be65c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e119f2be65c')) {function content_57e119f2be65c($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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