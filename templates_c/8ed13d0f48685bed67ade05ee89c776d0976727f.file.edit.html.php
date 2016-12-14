<?php /* Smarty version Smarty 3.1.4, created on 2016-09-21 20:39:50
         compiled from "D:\amp\apache\www\kehouyuxi\09month\0914\TimeTables\View\Admin\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1133257e23d75e6cb87-57654573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ed13d0f48685bed67ade05ee89c776d0976727f' => 
    array (
      0 => 'D:\\amp\\apache\\www\\kehouyuxi\\09month\\0914\\TimeTables\\View\\Admin\\edit.html',
      1 => 1474461584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1133257e23d75e6cb87-57654573',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_57e23d7605ff8',
  'variables' => 
  array (
    'getGC' => 0,
    'rows1' => 0,
    'row1' => 0,
    'rows2' => 0,
    'row2' => 0,
    'rows3' => 0,
    'row3' => 0,
    'rows4' => 0,
    'row4' => 0,
    'rows5' => 0,
    'row5' => 0,
    'rows6' => 0,
    'row6' => 0,
    'rows7' => 0,
    'row7' => 0,
    'rows8' => 0,
    'row8' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e23d7605ff8')) {function content_57e23d7605ff8($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理员中心</title>
<link rel="stylesheet" type="text/css" href="view/Admin/Css/add.css">
</head>
<body>
<h3>后台管理中心</h3>
<form action="index.php?group=Admin&module=TimeTables&act=update" method="post">


     年级：<?php echo $_smarty_tpl->tpl_vars['getGC']->value[0]['grade_name'];?>
&nbsp;&nbsp;&nbsp; 班级:<?php echo $_smarty_tpl->tpl_vars['getGC']->value[0]['class_name'];?>


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
      <!--  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['name'] = 'sec1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rows1']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total']);
?>
         <td><input type="text" name="course[]" value="<?php echo $_smarty_tpl->tpl_vars['rows1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['course'];?>
"></td>
      <?php endfor; endif; ?>-->
      <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row1']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
$_smarty_tpl->tpl_vars['row1']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row1']->key;
?>
      <td><input type="text" name="course1[]" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['course'];?>
"></td>
      <?php } ?>     
   </tr>
   <tr><input type="hidden" name="node2" value="2">
      <td>第二节</td>
      <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
$_smarty_tpl->tpl_vars['row2']->_loop = true;
?>
      <td><input type="text" name="course2[]" value="<?php echo $_smarty_tpl->tpl_vars['row2']->value['course'];?>
"></td>
      <?php } ?>
   </tr>
   <tr><input type="hidden" name="node3" value="3">
      <td>第三节</td>
      <?php  $_smarty_tpl->tpl_vars['row3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row3']->key => $_smarty_tpl->tpl_vars['row3']->value){
$_smarty_tpl->tpl_vars['row3']->_loop = true;
?>
      <td><input type="text" name="course3[]" value="<?php echo $_smarty_tpl->tpl_vars['row3']->value['course'];?>
"></td>
      <?php } ?>
   </tr>
   <tr><input type="hidden" name="node4" value="4">
      <td>第四节</td>
      <?php  $_smarty_tpl->tpl_vars['row4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row4']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row4']->key => $_smarty_tpl->tpl_vars['row4']->value){
$_smarty_tpl->tpl_vars['row4']->_loop = true;
?>
      <td><input type="text" name="course4[]" value="<?php echo $_smarty_tpl->tpl_vars['row4']->value['course'];?>
"></td>
      <?php } ?>
   </tr>
   <tr><input type="hidden" name="node5" value="5">
      <td>第五节</td>
      <?php  $_smarty_tpl->tpl_vars['row5'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row5']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows5']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row5']->key => $_smarty_tpl->tpl_vars['row5']->value){
$_smarty_tpl->tpl_vars['row5']->_loop = true;
?>
      <td><input type="text" name="course5[]" value="<?php echo $_smarty_tpl->tpl_vars['row5']->value['course'];?>
"></td>
      <?php } ?>
   </tr>
   <tr><input type="hidden" name="node6" value="6">
      <td>第六节</td>
      <?php  $_smarty_tpl->tpl_vars['row6'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row6']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows6']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row6']->key => $_smarty_tpl->tpl_vars['row6']->value){
$_smarty_tpl->tpl_vars['row6']->_loop = true;
?>
      <td><input type="text" name="course6[]" value="<?php echo $_smarty_tpl->tpl_vars['row6']->value['course'];?>
"></td>
      <?php } ?>
   </tr>
   <tr><input type="hidden" name="node7" value="7">
      <td>第七节</td>
      <?php  $_smarty_tpl->tpl_vars['row7'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row7']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows7']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row7']->key => $_smarty_tpl->tpl_vars['row7']->value){
$_smarty_tpl->tpl_vars['row7']->_loop = true;
?>
      <td><input type="text" name="course7[]" value="<?php echo $_smarty_tpl->tpl_vars['row7']->value['course'];?>
"></td>
      <?php } ?>
   </tr>
   <tr><input type="hidden" name="node8" value="8">
      <td>第八节</td>
      <?php  $_smarty_tpl->tpl_vars['row8'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row8']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows8']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row8']->key => $_smarty_tpl->tpl_vars['row8']->value){
$_smarty_tpl->tpl_vars['row8']->_loop = true;
?>
      <td><input type="text" name="course8[]" value="<?php echo $_smarty_tpl->tpl_vars['row8']->value['course'];?>
"></td>
      <?php } ?>
   </tr>

</table>
 <input type="submit" value="修改">
 </form>
</body>
</html><?php }} ?>