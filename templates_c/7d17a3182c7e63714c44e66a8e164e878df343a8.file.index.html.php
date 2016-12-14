<?php /* Smarty version Smarty 3.1.4, created on 2016-09-21 13:26:10
         compiled from "D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\View\Admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2892457e096e0307810-19197476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d17a3182c7e63714c44e66a8e164e878df343a8' => 
    array (
      0 => 'D:\\amp\\apache\\www\\kehouyuxi\\09month\\0914\\TimeTables\\View\\Admin\\index.html',
      1 => 1474435570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2892457e096e0307810-19197476',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_57e096e0350d0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e096e0350d0')) {function content_57e096e0350d0($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>后台首页</title>
<link rel="stylesheet" type="text/css" href="view/Admin/Css/index.css">
</head>

<body>
<div id="ke" >
<form action="index.php?group=admin&module=Admin&act=check_admin" method="post">
    <span id="font">Admin Login</span><br/><br/>
       管理员：<input type="text" name="admin_name" style="width:40%;height:5%;">&nbsp;<br/>
 <br/>
       密&nbsp;&nbsp;&nbsp;码：<input type="password" name="admin_pwd" style="width:40%;height:5%;">&nbsp;
<br/><br/><br/>
	<input type="submit" style="width:15%;height:7%;font-size:20px;font-weight:bold;color:#363636" value="登录">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    <input type="reset" style="width:15%;height:7%;font-size:20px;font-weight:bold;color:#363636"value="重置">
</form>
</div>
</body>
</html><?php }} ?>