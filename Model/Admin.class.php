<?php
class Admin extends Model{
	public $admin_id;
	public $admin_name;
	public $admin_pwd;
	//验证管理员
	public function check_admin(){
		$query="select * from admin where admin_name='{$this->admin_name}' and admin_pwd='{$this->admin_pwd}'";
		$res=$this->db->_query($query);
		$row=$this->db->getRow($res);
		return $row;
	}
}