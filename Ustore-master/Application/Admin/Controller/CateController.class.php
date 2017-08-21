<?php
namespace Admin\Controller;

class CateController extends CommonController{
	function cateAdd(){
		if(IS_POST){
			$form_data=D('Cate')->create();
			$add_res=D('Cate')->add($form_data);
			if($add_res){
				$this->success('添加成功',U('cateList'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$cateList=D('cate')->where('cate_pid=0')->select();
			$this->assign('cateList',$cateList);
			$this->display();			
		}
	}
	function cateList(){
		$cate_list=getTree(D('cate')->select());
		$this->assign('cate_list',$cate_list);
		$this->display();
	}
}