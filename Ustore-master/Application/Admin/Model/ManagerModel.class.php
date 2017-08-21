<?php
namespace Admin\Model;
use Think\Model;
class ManagerModel extends Model{
	protected $_auto=array(
		array('manager_time','time',3,'function'),
		array('manager_salt','makeSalt',1,'function'),
	);
	function checkLogin($username,$password){
		$info=$this->where("manager_name='$username'")->find();
		if(empty($info)){
			return false;
		}
		/*if($info['manager_status']!='1'){
			return false;
		}*/
		$password=salt($password,$info['manager_salt']);
		if($info['manager_passwd']==$password){
			session('id',$info['manager_id']);
			session('name',$info['manager_name']);
			return true;
		}else{
			return false;
		}
	}
}