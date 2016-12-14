<?php
class DbModel{
	protected $result;
	public function __construct(){
		$this->connect();
	}
	public function connect(){
		global $config;
		mysql_connect($config['host'],$config['user'],$config['pwd']);
		mysql_set_charset($config['charset']);
		mysql_select_db($config['db']);
	}
	//执行query语句
	public function _query($query){
		$res=mysql_query($query);
		$this->result=$res;
		return $res;
	}
	//获得所有的数据
	public function getAll(){
		$rows=array();
		while($row=mysql_fetch_assoc($this->result)){
			$rows[]=$row;
		}
		return $rows;
	}
	//获取一条数据
	public function getRow(){
		return mysql_fetch_assoc($this->result);
	}
}