<?php /* Smarty version Smarty 3.1.4, created on 2016-09-21 15:30:48
         compiled from "D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\View\Admin\admin_add.html" */ ?>
<?php /*%%SmartyHeaderCode:1223957e0e3be3e6eb2-45043346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94679ab1be606c581d40673a84dec94ddbbbd9ce' => 
    array (
      0 => 'D:\\amp\\apache\\www\\kehouyuxi\\09month\\0914\\TimeTables\\View\\Admin\\admin_add.html',
      1 => 1474443044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1223957e0e3be3e6eb2-45043346',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_57e0e3be4abca',
  'variables' => 
  array (
    'row' => 0,
    'row1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e0e3be4abca')) {function content_57e0e3be4abca($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>课程表</title>
<link rel="stylesheet" type="text/css" href="view/Admin/Css/add.css">
</head>
<body>
<div id="reg">
<h3>添加课程</h3>
<form action="index.php?group=Admin&module=TimeTables&act=add_course" method="post">
年级：<?php echo $_smarty_tpl->tpl_vars['row']->value['grade_name'];?>
&nbsp;&nbsp;&nbsp;   班级：<?php echo $_smarty_tpl->tpl_vars['row1']->value['class_name'];?>
<br/>
 <input type="hidden" name="class_id" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['class_id'];?>
">
 <input type="hidden" name="grade_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grade_id'];?>
">
<table border="1px">
   <tr>
      <td></td>
      <th>星期一</th>
      <th>星期二</th>
      <th>星期三</th>
      <th>星期四</th>
      <th>星期五</th>
      <th>星期六</th>
      <th>星期日</th>
   </tr>
   <tr><input type="hidden" name="node1" value="1">
      <td>第一节</td>
      <td><input type="text" name="course1"><input type="hidden" name="week1" value="1"></td>
      <td><input type="text" name="course2"><input type="hidden" name="week2" value="2"></td>
      <td><input type="text"  name="course3"><input type="hidden" name="week3" value="3"></td>
      <td><input type="text"  name="course4"><input type="hidden" name="week4" value="4"></td>
      <td><input type="text"  name="course5"><input type="hidden" name="week5" value="5"></td>
      <td id="week"><input type="text" name="course6" value="休息"><input type="hidden" name="week6" value="6"></td>
      <td id="week"><input type="text"  name="course7" value="休息"><input type="hidden" name="week7" value="7"></td>
   </tr>
   <tr><input type="hidden" name="node2" value="2">
      <td>第二节</td>
      <td><input type="text"  name="course8"><input type="hidden" name="week8" value="1"></td>
      <td><input type="text"  name="course9"><input type="hidden" name="week9" value="2"></td>
      <td><input type="text"  name="course10"><input type="hidden" name="week10" value="3"></td>
      <td><input type="text"  name="course11"><input type="hidden" name="week11" value="4"></td>
      <td><input type="text"  name="course12"><input type="hidden" name="week12" value="5"></td>
      <td id="week"><input type="text"  name="course13" value="休息"><input type="hidden" name="week13" value="6"></td>
      <td id="week"><input type="text"  name="course14" value="休息"><input type="hidden" name="week14" value="7"></td>
   </tr>
   <tr><input type="hidden" name="node3" value="3">
      <td>第三节</td>
      <td><input type="text"  name="course15"><input type="hidden" name="week15" value="1"></td>
      <td><input type="text"  name="course16"><input type="hidden" name="week16" value="2"></td>
      <td><input type="text"  name="course17"><input type="hidden" name="week17" value="3"></td>
      <td><input type="text"  name="course18"><input type="hidden" name="week18" value="4"></td>
      <td><input type="text"  name="course19"><input type="hidden" name="week19" value="5"></td>
      <td id="week"><input type="text"  name="course20" value="休息"><input type="hidden" name="week20" value="6"></td>
      <td id="week"><input type="text"  name="course21" value="休息"><input type="hidden" name="week21" value="7"></td>
   </tr>
   <tr><input type="hidden" name="node4" value="4">
      <td>第四节</td>
      <td><input type="text"  name="course22"><input type="hidden" name="week22" value="1"></td>
      <td><input type="text"  name="course23"><input type="hidden" name="week23" value="2"></td>
      <td><input type="text"  name="course24"><input type="hidden" name="week24" value="3"></td>
      <td><input type="text"  name="course25"><input type="hidden" name="week25" value="4"></td>
      <td><input type="text"  name="course26"><input type="hidden" name="week26" value="5"></td>
      <td id="week"><input type="text"  name="course27" value="休息"><input type="hidden" name="week27" value="6"></td>
      <td id="week"><input type="text"  name="course28" value="休息"><input type="hidden" name="week28" value="7"></td>
   </tr>
   <tr><input type="hidden" name="node5" value="5">
      <td>第五节</td>
      <td><input type="text"  name="course29"><input type="hidden" name="week29" value="1"></td>
      <td><input type="text"  name="course30"><input type="hidden" name="week30" value="2"></td>
      <td><input type="text"  name="course31"><input type="hidden" name="week31" value="3"></td>
      <td><input type="text"  name="course32"><input type="hidden" name="week32" value="4"></td>
      <td><input type="text"  name="course33"><input type="hidden" name="week33" value="5"></td>
      <td id="week"><input type="text"  name="course34" value="休息"><input type="hidden" name="week34" value="6"></td>
      <td id="week"><input type="text"  name="course35" value="休息"><input type="hidden" name="week35" value="7"></td>
   </tr>
   <tr><input type="hidden" name="node6" value="6">
      <td>第六节</td>
      <td><input type="text"  name="course36"><input type="hidden" name="week36" value="1"></td>
      <td><input type="text"  name="course37"><input type="hidden" name="week37" value="2"></td>
      <td><input type="text"  name="course38"><input type="hidden" name="week38" value="3"></td>
      <td><input type="text"  name="course39"><input type="hidden" name="week39" value="4"></td>
      <td><input type="text"  name="course40"><input type="hidden" name="week40" value="5"></td>
      <td id="week"><input type="text"  name="course41" value="休息"><input type="hidden" name="week41" value="6"></td>
      <td id="week"><input type="text"  name="course42" value="休息"><input type="hidden" name="week42" value="7"></td>
   </tr>
   <tr><input type="hidden" name="node7" value="7">
      <td>第七节</td>
      <td><input type="text"  name="course43"><input type="hidden" name="week43" value="1"></td>
      <td><input type="text"  name="course44"><input type="hidden" name="week44" value="2"></td>
      <td><input type="text"  name="course45"><input type="hidden" name="week45" value="3"></td>
      <td><input type="text"  name="course46"><input type="hidden" name="week46" value="4"></td>
      <td><input type="text"  name="course47"><input type="hidden" name="week47" value="5"></td>
      <td id="week"><input type="text"  name="course48" value="休息"><input type="hidden" name="week48" value="6"></td>
      <td id="week"><input type="text"  name="course49" value="休息"><input type="hidden" name="week49" value="7"></td>
   </tr>
   <tr><input type="hidden" name="node8" value="8">
      <td>第八节</td>
      <td><input type="text"  name="course50"><input type="hidden" name="week50" value="1"></td>
      <td><input type="text"  name="course51"><input type="hidden" name="week51" value="2"></td>
      <td><input type="text"  name="course52"><input type="hidden" name="week52" value="3"></td>
      <td><input type="text"  name="course53"><input type="hidden" name="week53" value="4"></td>
      <td><input type="text"  name="course54"><input type="hidden" name="week54" value="5"></td>
      <td id="week"><input type="text"  name="course55" value="休息"><input type="hidden" name="week55" value="6"></td>
      <td id="week"><input type="text"  name="course56" value="休息"><input type="hidden" name="week56" value="7"></td>
   </tr>

</table>
<input type="submit" value="添加">
<input type="reset" value="重置">


</form>
</div>
</body>
</html><?php }} ?>