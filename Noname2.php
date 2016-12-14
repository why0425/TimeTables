<?php
include "TimeTables/smarty/Smarty.class.php";
$smarty=new Smarty();
$arr_id=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$smarty->assign('arr_id',$arr_id);
$smarty->display('Noname1.html');