<?php
namespace Admin\Controller;
class ManagerController extends CommonController{
	function managerAdd(){
		if(IS_POST){
			$form_data=D('Manager')->create();
			$form_data['manager_passwd']=
				salt($form_data['manager_passwd'],$form_data['manager_salt']);
			$add_res=D('Manager')->add($form_data);
			if($add_res){
				$this->success('添加成功',U('managerList'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->display();		
		}
	}
	function managerList(){
		$manager_list=D('Manager')->select();
		$this->assign('manager_list',$manager_list);
		dump($manager_list);
		$this->display();
	}
}