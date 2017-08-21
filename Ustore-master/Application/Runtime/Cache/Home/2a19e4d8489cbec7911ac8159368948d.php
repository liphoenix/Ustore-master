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
                        <a href="<?php echo U('cart');?>">购物车 - <span class="cart-amunt">¥100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">3</span></a>
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
                        <li><a href="<?php echo U('index');?>">首页</a></li>
                        <li><a href="<?php echo U('shop');?>">移动电话</a></li>
                        <li><a href="<?php echo U('shop');?>">平板电脑</a></li>
                        <li><a href="<?php echo U('shop');?>">笔记本电脑</a></li>
                        <li><a href="<?php echo U('shop');?>">电脑主机</a></li>
                        <li><a href="<?php echo U('shop');?>">数码配件</a></li>
                        <li><a href="<?php echo U('cart');?>">购物车</a></li>
                        <li><input type="text" name="search" id="sou"> </li>
                        <li><a href="<?php echo U('information');?>">搜索</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>购物车</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
     <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">搜索您想要的商品...</h2>
                        <form action="#">
                            <input type="text" placeholder="在此处输入商品名称...">
                            <input type="submit" value="搜索">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">有好货</h2>
                        <div class="thubmnail-recent">
                            <img src="/Public/Home/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html"> 索尼智能电视 - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="/Public/Home/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">索尼智能电视 - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="/Public/Home/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">索尼智能电视 - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="/Public/Home/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">索尼智能电视 - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">商品</th>
                                            <th class="product-price">单价</th>
                                            <th class="product-quantity">购买数量</th>
                                            <th class="product-subtotal">小计</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="/Public/Home/img/product-thumb-2.jpg"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html">索尼智能电视</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">15.00</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                                    <input type="button" class="plus" value="+">
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">15.00</span> 
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>商品推荐</h2>
                                <ul class="products">
                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="/Public/Home/img/product-2.jpg">
                                            <h3>索尼智能电视</h3>
                                            <span class="price"><span class="amount">20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">加入购物车</a>
                                    </li>

                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="/Public/Home/img/product-4.jpg">
                                            <h3>索尼智能电视</h3>
                                            <span class="price"><span class="amount">20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">加入购物车</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                <h2>购物车总计</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>购物车小计</th>
                                            <td><span class="amount">15.00</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>运费</th>
                                            <td>免费送货</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>订单数量</th>
                                            <td><strong><span class="amount">15.00</span></strong> </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <input type="submit" value="刷新购物车" name="update_cart" class="button">
                                                <input type="submit" value="结算" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <form method="post" action="#" class="shipping_calculator">
                                <h2><a class="shipping-calculator-button" data-toggle="collapse" href="#calcalute-shipping-wrap" aria-expanded="false" aria-controls="calcalute-shipping-wrap">选择您的地址</a></h2>

                                <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">

                                <p class="form-row form-row-wide">
                                <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                    <option value="">选择一个城市</option>
                                </select>
                                </p>

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state" name="calc_shipping_state" placeholder="State / county" value="" class="input-text"> </p>

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / Zip" value="" class="input-text"></p>


                                <p><button class="button" value="1" name="calc_shipping" type="submit">确认地址</button></p>

                                </section>
                            </form>
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>

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