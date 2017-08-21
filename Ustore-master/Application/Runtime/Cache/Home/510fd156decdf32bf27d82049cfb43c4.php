<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>
    
    <!-- Google Fonts -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/Public/Home/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/Public/Home/css/owl.carousel.css">
    <link rel="stylesheet" href="/Public/Home/css/style.css">
    <link rel="stylesheet" href="/Public/Home/css/responsive.css">
    <link rel="stylesheet" href="/Public/Home/css/buttons.css">
    <!--script-->
    <script src="/Public/Home/js/jquery-1.8.3.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    #sou{
        margin-left:100px;
        padding: 19px;
        width: 300px;
    }
    </style>
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="<?php echo U('Member/my_msg');?>"><i class="fa fa-user">用户中心</i></a></li>
                            <li><a href="<?php echo U('Cart/cart');?>"><i class="fa fa-user"></i>我的购物车</a></li>
                            <li><a href="<?php echo U('Member/login');?>"><i class="fa fa-user"></i> 登录</a></li>
                            <li><a href="<?php echo U('Member/register');?>"><i class="fa fa-user"></i>注册</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">语言 :</span><span class="value">中文 </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">中文</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->


  
<style type="text/css">
.single-product-area {
    padding: 20px 0 65px;
}
#captcha{
  border: 2px solid #E6E5E5;
  border-radius: 10px;
}
input[type="submit"]{
  padding: 10px 20px;
}
.regex{
  line-height: 34px;
}
</style>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="logo">
                        <h1><a href="<?php echo U('Index/index');?>"><img src="/Public/Home/img/logo.png"></a></h1>
                    </div>
                </div>
            </div>
        </div>
    
    
    <div class="single-product-area">
        <div class="container">
            <div class="row">               
                <div class="col-md-10">
                    <div class="product-content-right">
                        <div class="woocommerce">
<form class="form-horizontal" action="" method="post" onsubmit="return checkForm()">
   <div class="form-group">
      <label class="col-sm-2 control-label">用户名</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" placeholder="请输入用户名" name='name'>
      </div>
        <span class='regex'></span>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">密码</label>
      <div class="col-sm-4">
         <input type="password" class="form-control" placeholder="请输入密码"name='passwd'>
      </div>
      <span class='regex'></span>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">确认密码</label>
      <div class="col-sm-4">
         <input type="password" class="form-control" placeholder="请再次输入密码" name='re-passwd'>
      </div>
      <span class='regex'></span>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">邮箱</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" placeholder="请输入邮箱" name='email'>        
      </div>
      <span class='regex'></span>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">手机号</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" placeholder="请输入手机号" name="tel">
      </div>
      <span class='regex'></span>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">验证码</label>
      <div class="col-sm-2">
         <input type="text" class="form-control" placeholder="请输入验证码" name='code'>
      </div>
      <img src="<?php echo U('verify');?>" id='captcha'>
      <span class='regex'></span>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-4">
         <input type="submit" class="btn btn-primary" value="注册新用户">
      </div>
   </div>
</form>

                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
  $('#captcha').click(function(){
    var src="<?php echo U('verify');?>?"+Math.random();
    $(this).attr('src',src);
  })
  $("[name='name']").blur(function(){
    var span=$(this).parent().parent().find('span');
    var str=$(this).val();
    var patt=/^\w{6,12}$/;
    if(patt.test(str)){
      span.html("<i class='fa fa-check' style='color:green'></i>");
    }else{
      span.html("<font color='red'>请输入6-12位字母数字下划线</font>");
    }
  })
  $("[name='passwd']").blur(function(){
    var span=$(this).parent().parent().find('span');
    var pwd=$(this).val();
    var pwdReg=/^\w{6,30}$/;
    var lower1=/^\d{6,}$/;//弱
    var lower2=/^\[A-Z]{6,}$/;//弱
    var lower3=/^\[a-z]{6,}$/;//弱
    var mid=/^\w{6,12}$/;//中
    if(!pwdReg.test(pwd)){
      span.html("<font color='red'>不符合规则</font>");
      return false;
    }else if(lower1.test(pwd)||lower2.test(pwd)||lower3.test(pwd)){
      span.html("<font color='#BCFD39'>弱</font>");
    }else if(mid.test(pwd)){
      span.html("<font color='#8CFF5F'>中</font>");
    }else{
      span.html("<font color='orange'>强</font>");
    }
  })
  $("[name='re-passwd']").blur(function(){
    var span=$(this).parent().parent().find('span');
    var pwd=$("[name='passwd']").val();
    var re_pwd=$(this).val();
    if(re_pwd==pwd){
      span.html("<i class='fa fa-check' style='color:green'></i>");
    }else{
      span.html("<font color='red'>两次密码不一致</font>");
    }
  })
  $("[name='email']").blur(function(){
    var span=$(this).parent().parent().find('span');
    var str=$(this).val();
    var patt=/^\w{2,255}@[a-z0-9]{2,20}\.[a-z]{2,10}$/;
    if(patt.test(str)){
      span.html("<i class='fa fa-check' style='color:green'></i>");
    }else{
      span.html("<font color='red'>邮箱格式不正确</font>");
    }
  })
  $("[name='tel']").blur(function(){
    var span=$(this).parent().parent().find('span');
    var str=$(this).val();
    var patt=/^1(3|4|5|7|8)\d{9}$/;
    if(patt.test(str)){
      span.html("<i class='fa fa-check' style='color:green'></i>");
    }else{
      span.html("<font color='red'>手机号格式不正确</font>");
    }
  })
  $("[name='code']").blur(function(){
    var span=$(this).parent().parent().find('span');
    var code=$(this).val();
    var data={"code":code};
    $.post("<?php echo U('captcha');?>",data,function(msg){
      if(msg==1){
        span.html("<i class='fa fa-check' style='color:green'></i>");
      }else{
        span.html("<font color='red'>验证码错误</font>");
      }
    })
  })
  function checkForm(){
    var span='';
    for(var i=0;i<$('.regex').length;i++){
      if(i!=1){
        span=$('.regex').eq(i).html();      
        if(span!='<i class="fa fa-check" style="color:green"></i>'){
          alert('请检查后,重新输入');
          return false;
        }        
      }
    }
  }
</script>

<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                       <p>Copyright © 2004 - 2017  Ustore.com 版权所有&emsp;|&emsp;消费者维权热线：110</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-credit-card"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
    <script src="/Public/Home/js/jquery-1.8.3.min.js"></script>
    <!-- jQuery sticky menu -->
    <script src="/Public/Home/js/owl.carousel.min.js"></script>
    <script src="/Public/Home/js/jquery.sticky.js"></script>
    <script src="/Public/Home/js/bootstrap.min.js"></script>
    
    <!-- jQuery easing -->
    <script src="/Public/Home/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="/Public/Home/js/main.js"></script>
    <!-- Slider -->
    <script type="text/javascript" src="/Public/Home/js/bxslider.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/script.slider.js"></script>
  </body>
</html>