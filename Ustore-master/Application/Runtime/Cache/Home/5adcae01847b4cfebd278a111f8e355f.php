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
.single-sidebar input[type="submit"]{
    padding: 8px 20px;
}
#myModal input[type="text"]{
    border: 1px solid #ddd;
    padding: 5px;
    margin-top:10px;
}
.single-sidebar input[type="text"] {
    margin-bottom: 10px;
    width: 85%;
    padding: 10px;
}
</style>
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
                        <form action="">
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

                            
                            <div class="shipping_calculator">
                                <h2><a class="shipping-calculator-button" data-toggle="collapse" href="#calcalute-shipping-wrap" aria-expanded="false" aria-controls="calcalute-shipping-wrap">选择您的地址</a></h2>

                                <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">

                                <p class="form-row form-row-wide">
                                <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="address">
                                    <option value="0">选择一个地址</option>
                                    <option>山东省济宁市任城区古槐路兴唐大厦100号
                                联系人:我
                                &nbsp;联系方式:150647957</option>
                                </select>
                                </p>

                                <p class="form-row form-row-wide">省:山东省
                                &nbsp;市:济宁市&nbsp;县(区):任城区<br>
                                古槐路兴唐大厦100号<br>
                                联系人:我<br>
                                联系方式:150647957<br>
                                </p>

                                <p><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" value="1" name="calc_shipping">添加新地址</button></p>
                                </section>
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

                            
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>

<!--弹出框-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">添加新地址</h4>
         </div>
         <div class="modal-body">
            <select id='province'>
              <option value='0'>请选择省</option>
              <?php if(is_array($province_list)): foreach($province_list as $key=>$vo): ?><option value='<?php echo ($vo["pcode"]); ?>'><?php echo ($vo["pname"]); ?></option><?php endforeach; endif; ?>
            </select>
            <select id='city'>
              <option value='0'>请选择市</option>
            </select>
            <select id='area'>
              <option value='0'>请选择县</option>
            </select><br>
            详细地址: <input type="text" name="detail" id=""><br>
            联系方式: <input type="text" name="tel" id=""><br>
            联系人: &emsp;<input type="text" name="person" id="">
         </div>
         <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary">确认添加</button>

        </div>
      </div><!-- /.modal-content --></div></div>
    <!-- /.modal -->

<script type="text/javascript">
$('#province').change(function(){
    var pcode=$(this).val();
    var data={'pcode':pcode};
    var s="<option value='0'>请选择市</option>";
    $.get("<?php echo U('Member/getCity');?>",data,function(msg){
      for(var i=0;i<msg.length;i++){
        s+="<option value="+msg[i].ccode+">"+msg[i].cname+"</option>";
      }
      $('#city').html(s);
    },'json');
   });
   $('#city').change(function(){
    var CityCode=$(this).val();
    var data={'CityCode':CityCode};
    var s="<option value='0'>请选择县</option>";
    $.get("<?php echo U('Member/getArea');?>",data,function(msg){
      for(var i=0;i<msg.length;i++){
        s+="<option value="+msg[i].acode+">"+msg[i].aname+"</option>";
      }
      $('#area').html(s);
    },'json');
   });
   $("button:contains('确认添加')").click(function(){
      var province=$('#province option:selected').text();
      var city=$('#city option:selected').text();
      var areacountry=$('#area option:selected').text();
      var detail=$("[name='detail']").val();
      var tel=$("[name='tel']").val();
      var person=$("[name='person']").val();
      var data={'province':province,'city':city,'areacountry':areacountry,'detail':detail,'tel':tel,'person':person};
      $.post("<?php echo U('Member/add_address');?>",data,function(msg){
          if(msg==1){
            alert('添加成功');
            history.go(0);
          }else{
            alert('添加失败');
          }
      },'text')

   });
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