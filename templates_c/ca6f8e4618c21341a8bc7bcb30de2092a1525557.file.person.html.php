<?php /* Smarty version Smarty 3.1.4, created on 2016-09-22 10:05:30
         compiled from "D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\View\Admin\person.html" */ ?>
<?php /*%%SmartyHeaderCode:514457e0a3066d7bb3-55949751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca6f8e4618c21341a8bc7bcb30de2092a1525557' => 
    array (
      0 => 'D:\\amp\\apache\\www\\kehouyuxi\\09month\\0914\\TimeTables\\View\\Admin\\person.html',
      1 => 1474509924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '514457e0a3066d7bb3-55949751',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_57e0a30680d8c',
  'variables' => 
  array (
    'grade_id' => 0,
    'sel_grade' => 0,
    'grade_name' => 0,
    'class_id' => 0,
    'sel_class' => 0,
    'class_name' => 0,
    'rows1' => 0,
    'getGC' => 0,
    'str' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e0a30680d8c')) {function content_57e0a30680d8c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\Smarty-libs\smarty\plugins\function.html_options.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理员中心</title>
<link rel="stylesheet" type="text/css" href="view/Admin/Css/person.css">
</head>
<body>
<h3>后台管理中心</h3>
<form action="index.php?group=Admin&module=TimeTables&act=search" method="post">
年级：<select name=grade>
          <option value="0">【请选择年级】</option>
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['grade_id']->value,'selected'=>($_smarty_tpl->tpl_vars['sel_grade']->value),'output'=>$_smarty_tpl->tpl_vars['grade_name']->value),$_smarty_tpl);?>

     </select>&nbsp;
班级：<select name=class>
          <option value="0">【请选择班级】</option>
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['class_id']->value,'selected'=>($_smarty_tpl->tpl_vars['sel_class']->value),'output'=>$_smarty_tpl->tpl_vars['class_name']->value),$_smarty_tpl);?>

     </select>&nbsp;  
 
     <input type="submit" value="查看课程">
     
</form>
<?php if ($_smarty_tpl->tpl_vars['rows1']->value==true){?>
     年级：<?php echo $_smarty_tpl->tpl_vars['getGC']->value[0]['grade_name'];?>
&nbsp;&nbsp;&nbsp; 班级:<?php echo $_smarty_tpl->tpl_vars['getGC']->value[0]['class_name'];?>

     <input type="button" value="修改课程" onclick="location.href='index.php?group=Admin&module=TimeTables&act=edit'">
     <input type="button" value="删除课程" onclick="location.href='index.php?group=Admin&module=TimeTables&act=del'">
<!-- 加载课程表格 -->
<?php $_smarty_tpl->tpl_vars['str'] = new Smarty_variable($_smarty_tpl->getSubTemplate ('View/Admin/personb.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0));?>

<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<?php }elseif($_smarty_tpl->tpl_vars['sel_class']->value==true&&$_smarty_tpl->tpl_vars['sel_class']->value==true){?>
<input type="button" value="添加课程" onclick="location.href='index.php?group=Admin&module=TimeTables&act=admin_add'">
<?php }?>

 
</body>
</html><?php }} ?>