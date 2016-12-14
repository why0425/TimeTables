<?php /* Smarty version Smarty 3.1.4, created on 2016-09-20 19:12:01
         compiled from "D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\View\Home\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1196557e10a59181807-94687205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0478d3ed25d80a068a02471febf508ae2a1fa77' => 
    array (
      0 => 'D:\\amp\\apache\\www\\kehouyuxi\\09month\\0914\\TimeTables\\View\\Home\\index.html',
      1 => 1474369920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1196557e10a59181807-94687205',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_57e10a592857b',
  'variables' => 
  array (
    'online' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e10a592857b')) {function content_57e10a592857b($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>课程表</title>
<link rel="stylesheet" type="text/css" href="view/Home/Css/index.css">

</head>

<body>
<div id="ke" >
    <div id="top">
<?php if ($_smarty_tpl->tpl_vars['online']->value==''){?>
      <input type="button" value="登录" onclick="location.href='index.php?group=Home&module=Student&act=login'">
<?php }else{ ?>
       你好，<?php echo $_smarty_tpl->tpl_vars['online']->value;?>
<input type="button" value="注销" onclick="location.href='index.php?group=Home&module=Student&act=del_session'">
       <?php }?>
       <input type="button" value="注册" onclick="location.href='index.php?group=Home&module=Student&act=regis'">
       <input type="button" value="管理中心" onclick="location.href='index.php?group=admin&module=Index&act=index'">
    </div>
	<div id="add">
	   <a href="index.php?group=Home&module=Timetables&act=add"   style="text-decoration:none;">添加课程</a>
	</div>
	<div id="see">
       <a href="index.php?group=Home&module=TimeTables&act=search" style="text-decoration:none;">查看课程</a>
    </div>
</div>
</body>
</html><?php }} ?>