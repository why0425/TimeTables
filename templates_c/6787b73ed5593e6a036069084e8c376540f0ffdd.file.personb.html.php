<?php /* Smarty version Smarty 3.1.4, created on 2016-09-22 10:00:41
         compiled from "View\Admin\personb.html" */ ?>
<?php /*%%SmartyHeaderCode:955857e33b4967deb3-64656035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6787b73ed5593e6a036069084e8c376540f0ffdd' => 
    array (
      0 => 'View\\Admin\\personb.html',
      1 => 1474444032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '955857e33b4967deb3-64656035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
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
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_57e33b4971e81',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e33b4971e81')) {function content_57e33b4971e81($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert title here</title>
</head>
<body>
<table border="1px">
   <tr>
      <td style="background-color:#A9E2CF;font-size:12px;"></td>
      <th>星期一</th>
      <th>星期二</th>
      <th>星期三</th>
      <th>星期四</th>
      <th>星期五</th>
      <th>星期六</th>
      <th>星期日</th>
   </tr>
   <tr>
      <td style="background-color:#A9E2CF;font-size:12px;">第一节</td>
      <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
$_smarty_tpl->tpl_vars['row1']->_loop = true;
?>
      <td><?php echo $_smarty_tpl->tpl_vars['row1']->value['course'];?>
</td>
      <?php } ?>
   </tr>
       
   <tr>
      <td style="background-color:#A9E2CF;font-size:12px;">第二节</td>
      <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
$_smarty_tpl->tpl_vars['row2']->_loop = true;
?>
      <td><?php echo $_smarty_tpl->tpl_vars['row2']->value['course'];?>
</td>
      <?php } ?>
   </tr>
   <tr>
      <td style="background-color:#A9E2CF;font-size:12px;">第三节</td>
      <?php  $_smarty_tpl->tpl_vars['row3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row3']->key => $_smarty_tpl->tpl_vars['row3']->value){
$_smarty_tpl->tpl_vars['row3']->_loop = true;
?>
      <td><?php echo $_smarty_tpl->tpl_vars['row3']->value['course'];?>
</td>
      <?php } ?>
   </tr>
   <tr>
      <td style="background-color:#A9E2CF;font-size:12px;">第四节</td>
      <?php  $_smarty_tpl->tpl_vars['row4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row4']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row4']->key => $_smarty_tpl->tpl_vars['row4']->value){
$_smarty_tpl->tpl_vars['row4']->_loop = true;
?>
      <td><?php echo $_smarty_tpl->tpl_vars['row4']->value['course'];?>
</td>
      <?php } ?>
   </tr>
   <tr>
      <td style="background-color:#A9E2CF;font-size:12px;">第五节</td>
      <?php  $_smarty_tpl->tpl_vars['row5'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row5']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows5']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row5']->key => $_smarty_tpl->tpl_vars['row5']->value){
$_smarty_tpl->tpl_vars['row5']->_loop = true;
?>
      <td><?php echo $_smarty_tpl->tpl_vars['row5']->value['course'];?>
</td>
      <?php } ?>
   </tr>
   <tr>
      <td style="background-color:#A9E2CF;font-size:12px;">第六节</td>
      <?php  $_smarty_tpl->tpl_vars['row6'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row6']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows6']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row6']->key => $_smarty_tpl->tpl_vars['row6']->value){
$_smarty_tpl->tpl_vars['row6']->_loop = true;
?>
      <td><?php echo $_smarty_tpl->tpl_vars['row6']->value['course'];?>
</td>
      <?php } ?>
   </tr>
   <tr>
      <td style="background-color:#A9E2CF;font-size:12px;">第七节</td>
      <?php  $_smarty_tpl->tpl_vars['row7'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row7']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows7']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row7']->key => $_smarty_tpl->tpl_vars['row7']->value){
$_smarty_tpl->tpl_vars['row7']->_loop = true;
?>
      <td><?php echo $_smarty_tpl->tpl_vars['row7']->value['course'];?>
</td>
      <?php } ?>
   </tr>
   <tr>
      <td style="background-color:#A9E2CF;font-size:12px;">第八节</td>
     <?php  $_smarty_tpl->tpl_vars['row8'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row8']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows8']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row8']->key => $_smarty_tpl->tpl_vars['row8']->value){
$_smarty_tpl->tpl_vars['row8']->_loop = true;
?>
      <td><?php echo $_smarty_tpl->tpl_vars['row8']->value['course'];?>
</td>
      <?php } ?>
   </tr>
 </table>
</body>
</html><?php }} ?>