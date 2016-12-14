<?php
class Model{
	protected $db;
	public function __construct(){
		//连接数据库
		$this->db=new DbModel();
	}
}