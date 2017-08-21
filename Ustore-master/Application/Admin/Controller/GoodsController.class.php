<?php
namespace Admin\Controller;

class GoodsController extends CommonController{
	function goodsAdd(){
		if(IS_POST){
			if($_FILES['goods_pic']['error']==0){
				$config=array(
					'maxSize'=>3000000,
					'exts'=>array('jpg','png','gif'),
					'rootPath'=>'./Uploads/'
				);
				$uploader=new \Think\Upload($config);
				$res=$uploader->upload();
				if(!$res){
					echo $uploader->getError();
				}else{
					//拼接logo路径
					$pic_path=$config['rootPath'].$res['goods_pic']['savepath'].$res['goods_pic']['savename'];
					$img=new \Think\Image();
					$img->open($pic_path);
					$img->thumb(100,100);
					$small_pic_path=$config['rootPath'].$res['goods_pic']['savepath'].'thumb_'.$res['goods_pic']['savename'];
					$img->save($small_pic_path);
					$img->open($pic_path);
					$img->thumb(195,243);
					$small_pic_path=$config['rootPath'].$res['goods_pic']['savepath'].'middle_'.$res['goods_pic']['savename'];
					$img->save($middel_pic_path);
				}				
			}
			$goods_model=D('Goods');
			$form_data=$goods_model->create();
			$form_data['goods_pic']=$pic_path;
			$form_data['goods_small_pic']=$small_pic_path;
			$form_data['goods_middle_pic']=$middle_pic_path;
			$res=$goods_model->add($form_data);
			if($res){
				$attr_model=D('goodsattr');
				$vals=I('post.vals');
				$arr=array();
				foreach($vals as $key=>$value){
					$arr[]=array(
						'ga_goodsid'=>$res,
						'ga_attrid'=>$key,
						'ga_attrvals'=>implode(',',$value)
					);
				}				
				$attr_model->addAll($arr);
				$this->success('添加成功',U('goodsList'));
			}else{
				$this->error('添加失败');
			}
		}else{
			// $cate_model=D('cate');
			// $cate_list=$cate_model->where("cate_pid=0")->select();
			// $this->assign('cate_list',$cate_list);
			$this->display();
		}
		
	}
	function goodsList(){
		$goods_list=D('Goods')->select();
		$cate_list=D('Cate')->select();
		$this->assign('cate_list',$cate_list);
		$this->assign('goods_list',$goods_list);
		$this->display();
	}
	function getBrand(){
		$pid=I('post.pid');
		$brand_list=D('Cate')->where("cate_pid=$pid")->select();
		foreach($brand_list as $value){
			$row.="<option value='{$value['cate_id']}'>{$value['cate_name']}</option>";
		}
		echo $row;
	}
}