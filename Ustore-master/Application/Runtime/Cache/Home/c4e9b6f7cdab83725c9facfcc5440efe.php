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
                            <li><a href="<?php echo U('cart/cart');?>"><i class="fa fa-user"></i>我的购物车</a></li>
                            <?php if($_SESSION['name']== null ): ?><li><a href="<?php echo U('Member/login');?>"><i class="fa fa-user"></i> 登录</a></li>
                            <li><a href="<?php echo U('Member/register');?>"><i class="fa fa-user"></i>注册</a></li>           
                            <?php else: ?>
                            <li>欢迎您,&nbsp;<font color='#FF8B35'><?php echo (session('name')); ?></font></li>
                            <li><a href="<?php echo U('Member/logout');?>"><i class="fa fa-user"></i>退出</a></li><?php endif; ?>
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
  width: 130px;
}
input[type="submit"]{
  padding: 10px 20px;
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
    
    <br>
    <br>
    <div class="single-product-area">
        <div class="container">
            <div class="row">               
                <div class="col-md-6">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form class="form-horizontal" action="" method="post">
   <div class="form-group">
      <label class="col-sm-2 control-label">用户名</label>
      <div class="col-sm-6">
         <input type="text" class="form-control" placeholder="请输入用户名" name='name'>
      </div>
        <span></span>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">密码</label>
      <div class="col-sm-6">
         <input type="password" class="form-control" placeholder="请输入密码"name='passwd'>
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">验证码</label>
      <div class="col-sm-3">
         <input type="password" class="form-control" placeholder="请输入验证码" name='code'>
      </div>
      <img src="<?php echo U('verify');?>" id='captcha'>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-4">
         <input type="submit" class="btn btn-primary" value="登陆">
      </div>
   </div>
   </form>
                        </div>                       
                    </div>                    
                </div>
                <div class="col-md-3 text-center">
                    <div class="panel panel-primary">
                       <div class="panel-heading">
                          <h3 class="panel-title">还没有账号?</h3>
                       </div>
               <div class="panel-body">
<a href="<?php echo U('register');?>" class="button button-glow button-border button-rounded button-primary">立即注册</a>
               </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <br>
    <br>

<script type="text/javascript">
  $('#captcha').click(function(){
    var src="<?php echo U('verify');?>?"+Math.random();
    $(this).attr('src',src);
  })
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