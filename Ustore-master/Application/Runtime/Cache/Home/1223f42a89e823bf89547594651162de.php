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
    <link rel="stylesheet" href="/Public/Home/css/buttons.css">
    <link rel="stylesheet" href="/Public/Home/css/responsive.css">
    <link rel="stylesheet" href="/Public/Home/css/lrtk.css">
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
        margin-top: 10px;
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
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="/Public/Home/img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="<?php echo U('cart/cart');?>">购物车 - <span class="cart-amunt">¥100</span> <i class="fa fa-shopping-cart"></i><span class="product-count">3</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse" >
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                        <li><a href="<?php echo U('Index/shop');?>">移动电话</a></li>
                        <li><a href="<?php echo U('Index/shop');?>">平板电脑</a></li>
                        <li><a href="<?php echo U('Index/shop');?>">笔记本电脑</a></li>
                        <li><a href="<?php echo U('Index/shop');?>">电脑主机</a></li>
                        <li><a href="<?php echo U('Index/shop');?>">数码配件</a></li>
                        <li><a href="<?php echo U('cart/cart');?>">购物车</a></li>
                        <li><input type="text" name="search" id="sou"> </li>
                        <li><a href="<?php echo U('information');?>">搜索</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    <div class="cndns-right">
    <div class="cndns-right-meau meau-car">
        <a href="#" class="cndns-right-btn">
            <span class="demo-icon"><i class="fa fa-shopping-cart"></i></span>
            
        </a>
    </div>

    <div class="cndns-right-meau meau-contact">
        <a href="javascript:" class="cndns-right-btn">
            <span class="demo-icon"><i class='fa fa-phone'></i></span>
            <p>
                客服<br />
                热线
            </p>
        </a>
        <div class="cndns-right-box">
            <div class="box-border">
                <div class="sev-t">
                    <span class="demo-icon"><i class='fa fa-phone'></i></span>
                    <p>400-123-4567<br /><i>7*24小时客服服务热线</i></p>
                    <div class="clear"></div>
                </div>
                <span class="arrow-right"></span>
            </div>
        </div>
    </div>
    <div class="cndns-right-meau meau-code">
        <a href="javascript:" class="cndns-right-btn">
            <span class="demo-icon"><i class='fa fa-wechat'></i></span>
            <p>
                关注<br />
                微信
            </p>
        </a>
        <div class="cndns-right-box">
            <div class="box-border">
                <div class="sev-t">
                    <img src="/Public/Home/img/erweima.jpg" />
                    <i>关注官方微信</i>
                </div>
                <span class="arrow-right"></span>
            </div>
        </div>
    </div>
    <div class="cndns-right-meau meau-top" id="top-back">
        <a href="javascript:" class="cndns-right-btn" onclick="topBack()">
            <span class="demo-icon"><i class='fa fa-hand-o-up'></i></span>
            <i>顶部</i>
        </a>
    </div>
</div>
<script type="text/javascript">
//置顶图标显示
$('#top-back').hide()
$(window).scroll(function(){
     if($(this).scrollTop() > 350){
        $("#top-back").fadeIn();
     }
     else{
        $("#top-back").fadeOut();
     }
  })    
//置顶事件
function topBack(){
  $('body,html').animate({scrollTop:0},300);
}
</script>
    <style type="text/css">
        #top{
                width:300px;
                height:220px;
                font-family:'Microsoft yahei';
            }
            #top p{
                margin-bottom:15px;
            }
            #top p font{
                font-size:14px;
                color:#000;
                margin-right:15px;
            }
            #top p span{
                font-size:14px;
                color:#666;
                border:1px solid #999;
                display:inline-block;
                padding:8px;
                cursor:pointer;
            }
            #top p span.on{
                border:2px solid #f60;
                padding:7px;
                background:url(/Public/Home/img/on.png) no-repeat right bottom;
            }
            #bottom{
                width:600px;
                height:159px;
                padding-top:20px;
                font-family:'Microsoft yahei';
            }
            #bottom p font{
                color:#f60;
                font-size:16px;
                margin-right:20px;
            }
            #bottom p a{
                font-size:14px;
                color:blue;
            }
            #bottom p a i{
                margin:0 5px;
                color:#90c;
            }
            #bottom button{
                width:330px;
                height:50px;
                font-family:'Microsoft yahei';
                margin-top:20px;
                font-size:20px;
                background:#f60;
                color:#fff;
                border:none;                
            }
            button[type="submit"]{
              padding: 6px 20px;
            }
    </style>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>商品名</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">商品属性</h2>
                        <ul>
                        <li><h4>机身颜色:<p><small>金色,黑色,白色 </small></p></h1></li>                           
                        <li><h4>内存:<p><small>4G,6G,8G </small></p></h1></li>                           
                        </ul>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">商品评论</h2>
                        <ul>
                            <li><span class="glyphicon glyphicon-user"></span>用户名
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id tur</p>
                            </li>                         
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">主页</a>
                            <a href="">移动电话</a>
                            <a href="">商品名</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="/Public/Home/img/product-2.jpg" alt="">
                                    </div>
                                    <!--img里写小图,属性里big写大图-->
                                    <div class="product-gallery">
                                        <img src="/Public/Home/img/product-thumb-1.jpg" big='/Public/Home/img/product-1.jpg'>
                                        <img src="/Public/Home/img/product-thumb-2.jpg" alt="">
                                        <img src="/Public/Home/img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">Sony Smart TV - 2015</h2>
            <div id="top">
                <p>
                    <font>型号</font>
                    <span>4.7英寸</span>
                    <span>5.5英寸</span>
                </p>
                <p>
                    <font>颜色</font>
                    <span>银色</span>
                    <span>金色</span>
                    <span>深空灰色</span>
                </p>
                <p>
                    <font>内存</font>
                    <span>16GB</span>
                    <span>64GB</span>
                    <span>128GB</span>
                </p>
                <p>
                    <font>版本</font>
                    <span>公开版</span>
                    <span>移动赠费版</span>
                    <span>联通合约版</span>
                </p>
            </div>
                                    <div class="product-inner-price">
                                        <ins>$700.00</ins> <del>$100.00</del>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">加入购物车</button>
                                    </form>
                                    </div>
                            </div>
                        </div>
                        <div class="product-inner-category">
                                        <p>分类: <a href="">Summer</a>. 标签: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>商品简介</h2>  
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est</p>
                                            </div>                 
                                        </div>
                                    </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
            $(function(){
               $.each($('#top p'),function(){
                $(this).children('span').first().addClass('on');
               })
            })

            /*var mSpan = document.getElementById('model').getElementsByTagName('span');
            var cSpan = document.getElementById('color').getElementsByTagName('span');
            var rSpan = document.getElementById('rom').getElementsByTagName('span');
            var bSpan = document.getElementById('banben').getElementsByTagName('span');*/
            var aSpan = document.getElementsByTagName('span');
            var oModel = document.getElementById('model');
            var oRom = document.getElementById('rom');
            var oPrice = document.getElementById('price');

            /*mSpan[0].className = 'on';
            cSpan[0].className = 'on';
            rSpan[0].className = 'on';
            bSpan[0].className = 'on';*/



            for (var i=0;i<aSpan.length;i++ )
            {
                
                aSpan[i].onclick = function(){
                    var siblings = this.parentNode.children;
                    for (var j=0;j<siblings.length;j++ )
                    {
                        siblings[j].className = '';
                    }

                    this.className = 'on';
                   
                };
            };
            $('.product-gallery').children('img').click(function(){
                $('.product-gallery').children('img').css('border','');
                var big=$(this).attr('big');
                $('.product-main-img').find('img').attr('src',big);

                $(this).css('border','1px solid red');
            })

</script>
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>U<span>分享到</span></h2>
                        <p>新奇好玩的商品,分享给你的朋友</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-qq"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-wechat"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-weibo"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-steam"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">用户导航</h2>
                        <ul>
                            <li><a href="">我的账户</a></li>
                            <li><a href="">我的订单</a></li>
                            <li><a href="">我的订单</a></li>
                            <li><a href="">我的收藏</a></li>
                            <li><a href="">联系客服</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">商品分类</h2>
                        <ul>
                            <li><a href="">移动电话</a></li>
                            <li><a href="">平板电脑</a></li>
                            <li><a href="">笔记本电脑</a></li>
                            <li><a href="">电脑主机</a></li>
                            <li><a href="">数码配件</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">订阅</h2>
                        <p>订阅我们的我们的商品咨询，并获得独家优惠,直接到达邮箱,不会错过任何商品！
                        <div class="newsletter-form">
                            <input type="email" placeholder="输入你的邮箱">
                            <input type="submit" value="订阅">
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