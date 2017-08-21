<?php
namespace Admin\Controller;

class AttrController extends CommonController{
	function attrAdd(){
		if(IS_POST){
			$form_data=D('Attr')->create();
			$add_res=D('Attr')->add($form_data);
			if($add_res){
				$this->success('添加属性成功',U('attrList'));
			}else{
				$this->error('添加属性失败');
			}
		}else{
			$cateList=D('cate')->where('cate_pid=0')->select();
			$this->assign('cateList',$cateList);
			$this->display();
		}
		
	}
	function attrList(){
		$attr_list=D('attr')->alias('a')
		->field('a.attr_id,a.attr_name,a.attr_value,a.attr_type,c.cate_name')
		->join("left join us_cate c on a.attr_cateid=c.cate_id")
		->select();
		$this->assign('attr_list',$attr_list);
		$this->display();
	}
	function attrDel(){
		$id=I('get.id');
		$del_res=D('Attr')->where('attr_id='.$id)->delete();
		if($del_res){
			$this->success('删除属性成功',U('attrList'));
		}else{
			$this->error('删除属性失败');
		}
	}
	function getAttr(){
		$pid=I('get.pid');
		$attr=D('Attr')->where("attr_cateid=$pid")->select();
		echo json_encode($attr);
	}
}