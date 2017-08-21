<?php
namespace Home\Model;
use Think\Model;
class MemberModel extends Model{
	protected $pk='mem_id';
	protected $fields=array(
		'mem_id','mem_name','mem_passwd','mem_email','mem_tel',
		'mem_salt','mem_status','mem_addtime',
		);
	protected $_map=array(
		'name'=>'mem_name',
		'passwd'=>'mem_passwd',
		'tel'=>'mem_tel',
		'email'=>'mem_email'
	);
	protected $_validate=array(
		array('mem_name','require','用户名不能为空',1,'regex',3),
		array('mem_passwd','password','密码必须是6-12位字母数字下划线组合',1,'regex',3),
		array('re-passwd','mem_passwd','两次密码不一致',1,'confirm',3),
		array('mem_email','email','邮箱格式不正确',1,'regex',3),
	);
	protected $_auto=array(
		array('mem_salt','makeSalt',1,'function'),
		array('mem_addtime','time',1,'function'),
		array('mem_status',0,1,'string'),
	);
	function checkLogin($username,$password){
		$info=$this->where("mem_name='$username' or mem_email='$username' or mem_tel='$username'")->find();
		if(empty($info)){
			return false;
		}
		if($info['mem_status']!='1'){
			return false;
		}
		$password=salt($password,$info['mem_salt']);
		if($info['mem_passwd']==$password){
			session('mem_id',$info['mem_id']);
			session('mem_name',$info['mem_name']);
			return true;
		}else{
			return false;
		}
	}
}