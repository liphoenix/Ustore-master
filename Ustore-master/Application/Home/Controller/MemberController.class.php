<?php
namespace Home\Controller;
use Think\Controller;
class MemberController extends Controller{
	public function register(){
		if(IS_POST){
			$member_model=D('member');
			$form_data=$member_model->create();
			if($form_data){
				$form_data['mem_passwd']=
				salt($form_data['mem_passwd'],$form_data['mem_salt']);
				if($member_model->add($form_data)){
					$send_res=sendMail('感谢注册,请根据提示进行操作',"<a href='http://www.ustore.com/Home/Manager/active/id/$res/salt/{$form_data["salt"]}'>点击激活</a>",$form_data['mem_email']);
					if($send_res===true){
						$this->success('注册成功,请前往邮箱激活',U('login'));
					}else{
						dump($send_res);
						$this->error('注册失败邮件没发送',U('login'),5);
					}
				}else{
					$this->error('注册失败');
				}
			}else{
				echo $member_model->getError();
			}
		}else{			
			$this->display();
		}		
	}
	public function login(){
		if(IS_POST){
			$code=I('post.code');
    		$verify=new \Think\Verify();
    		if(!$verify->check($code)){
    			$this->error("您输入的验证码有误,请重新输入",U('login'),3);
    		}
    		$name=I('post.name');
    		$passwd=I('post.passwd');
    		$member_model=D('Member');
    		if($member_model->checkLogin($name,$passwd)){
    			$this->success('登陆成功',U('Index/index'),3);
    		}else{
    			$this->error('用户名或密码错误',U('login'),3);
    		}
		}else{
			$this->display();
		}
	}
	public function active(){
		$id=I('get.id');
		$salt=I('get.salt');		
		$res=M('Member')->where("mem_id={$id} and salt='{$salt}' ")->setfield('active',1);
		if($res){
			$this->success("激活成功",U('login'));
		}else{
			$this->error('激活失败');
		}
	}
	public function my_msg(){
		$province_list=D('province')->select();
		$this->assign('province_list',$province_list);
		$this->display();
	}
	//三级联动 获取city
	public function getCity(){
		$pcode=I('get.pcode');
		$city_list=D('city')->where("provinceCode={$pcode}")->select();
		echo json_encode($city_list);
	}
	//三级联动 获取city
	public function getArea(){
		$CityCode=I('get.CityCode');
		$area_list=D('areacountry')->where("CityCode={$CityCode}")->select();
		echo json_encode($area_list);
	}
	public function verify(){
		$config=array(
			'fontSize'=>18,
			'imageW'=>145,
			'imageH'=>32,
			'length'=>4,
			'useCurve'=>false,
			'reset'=>false,
			'fontttf'=>'1.ttf'
		);
		$verify=new \Think\Verify($config);
		$verify->entry();
	}
	public function captcha(){
		$code=I('post.code');
		$config=array(
			'reset'=>false,
		);
		$verify=new \Think\Verify($config);
		if($verify->check($code)){
			echo 1;
		}else{
			echo 0;
		}
	}
	public function add_address(){
		$arr=I('post.');
		$res=D('address')->add($arr);
		if($res){
			echo 1;
		}else{
			echo 0;
		}
	}
	public function logout(){
		session("[destroy]");
		$this->success('已注销',U('login'));
	}
}