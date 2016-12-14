<?php /* Smarty version Smarty 3.1.4, created on 2016-09-20 19:25:48
         compiled from "D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\View\Home\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2063157e11cbc01df14-25832986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad31d1daf18e7adbfb5bafef8a164381daabda2' => 
    array (
      0 => 'D:\\amp\\apache\\www\\kehouyuxi\\09month\\0914\\TimeTables\\View\\Home\\register.html',
      1 => 1474170984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2063157e11cbc01df14-25832986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option1_id' => 0,
    'option1_name' => 0,
    'option2_id' => 0,
    'option2_name' => 0,
    'option3_id' => 0,
    'option3_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_57e11cbc09497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e11cbc09497')) {function content_57e11cbc09497($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\Smarty-libs\smarty\plugins\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include 'D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\Smarty-libs\smarty\plugins\function.html_radios.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="view/Home/Css/register.css">
<script type="text/javascript">
   var xuehao=document.getElementById('xuehao');
   xuehao.alert('ok');
</script>
</head>
<body>
<div id="reg">
<h3>用户注册表</h3>
<form action="index.php?group=Home&module=Student&act=resgi_user" method="post">
姓名：<input type="text" name="stu_name">&nbsp;【<span id="name">请输入您的姓名</span>】<br/><br/>
学号：<input type="text" name="stu_xuehao">&nbsp;【<span id="xuehao">请输入您的学号</span>】<br/><br/>
年级：<select name=grade>
          <option>【请选择年级】</option>
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option1_id']->value,'output'=>$_smarty_tpl->tpl_vars['option1_name']->value),$_smarty_tpl);?>

     </select>&nbsp;【<span id="grade">请输入您的年级</span>】<br/><br/>
班级：<select name=class>
          <option>【请选择班级】</option>
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option2_id']->value,'output'=>$_smarty_tpl->tpl_vars['option2_name']->value),$_smarty_tpl);?>

     </select>&nbsp;【<span id="class">请输入您的班级</span>】<br/><br/>
性别：<?php echo smarty_function_html_radios(array('values'=>$_smarty_tpl->tpl_vars['option3_id']->value,'output'=>$_smarty_tpl->tpl_vars['option3_name']->value,'name'=>'sex','checked'=>1),$_smarty_tpl);?>
&nbsp;&nbsp;【<span id="sex">请输入您的性别</span>】<br/><br/>
<input type="submit" value="注册">
<input type="reset" value="重置">


</form>
</div>
</body>
</html><?php }} ?>