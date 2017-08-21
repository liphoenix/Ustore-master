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
                            <li><a href="<?php echo U('my_msg');?>"><i class="fa fa-user">用户中心</i></a></li>
                            <li><a href="<?php echo U('cart');?>"><i class="fa fa-user"></i>我的购物车</a></li>
                            <li><a href="<?php echo U('login');?>"><i class="fa fa-user"></i> 登录</a></li>
                            <li><a href="<?php echo U('register');?>"><i class="fa fa-user"></i>注册</a></li>
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
</style>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="logo">
                        <h1><a href="./"><img src="/Public/Home/img/logo.png"></a></h1>
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
                            <form class="form-horizontal" role="form">
   <div class="form-group">
      <label class="col-sm-2 control-label">用户名</label>
      <div class="col-sm-4">
         <input type="text" class="form-control"placeholder="请输入用户名">
      </div>
        <span class="control-label">用户名已存在</span>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">密码</label>
      <div class="col-sm-4">
         <input type="password" class="form-control" placeholder="请输入密码">
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">确认密码</label>
      <div class="col-sm-4">
         <input type="password" class="form-control" placeholder="请再次输入密码">
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">邮箱</label>
      <div class="col-sm-4">
         <input type="password" class="form-control" placeholder="请输入邮箱">
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">手机号</label>
      <div class="col-sm-4">
         <input type="password" class="form-control" placeholder="请输入手机号">
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">验证码</label>
      <div class="col-sm-2">
         <input type="password" class="form-control" placeholder="请输入验证码">
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-4">
         <input type="submit" class="btn btn-primary" value="注册新用户">
      </div>
   </div></form>
                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>



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