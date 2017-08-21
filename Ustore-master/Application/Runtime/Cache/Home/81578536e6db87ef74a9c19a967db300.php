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
input[type="text"]{
    border: 1px solid #ddd;
    padding: 5px;
    margin-top:10px;
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
                <div class="col-md-10 col-md-offset-1">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <ul id="myTab" class="nav nav-tabs">
   <li class="active"><a href="#home" data-toggle="tab">
      用户中心</a></li>
   <li><a href="#order" data-toggle="tab">我的订单</a></li>
   <li><a href="#address" data-toggle="tab">地址管理</a></li>
   </ul>
   <div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="home">
   <br>
   <br>
      <div class='col-md-8 col-md-offset-1'>
    <div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title">注册信息</h3>
  </div>
      <div class="panel-body">
        <table width="250px" height='200px'>
        <tr>
           <td>用户名</td>
           <td>john</td>
        </tr>
        <tr>
           <td>邮箱</td>
           <td>laowang@gmail.com</td>
        </tr>
        <tr>
            <td>手机号</td>
            <td>17610352698</td>
        </tr>
        <tr>
           <td>注册时间</td>
           <td>2017年7年26日</td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="button" value='修改密码'></td>
        </tr>
        </table>   
      </div>
    </div>      
    </div>

   </div>
   <div class="tab-pane fade" id="order">
      <table class="table">
   <thead>
      <tr>
         <th>产品</th>
         <th>订单号</th>
         <th>下单日期</th>
         <th>快递单号</th>
         <th>状态</th>
      </tr>
   </thead>
   <tbody>
      <tr class="active">
         <td>产品1</td>
         <td>23/11/2013</td>
         <td>23/11/2013</td>
         <td>23/11/2013</td>
         <td>待发货</td>
      </tr>
      <tr class="success">
         <td>产品2</td>
         <td>10/11/2013</td>
         <td>10/11/2013</td>
         <td>10/11/2013</td>
         <td>发货中</td>
      </tr>
      <tr  class="warning">
         <td>产品3</td>
         <td>20/10/2013</td>
         <td>20/10/2013</td>
         <td>20/10/2013</td>
         <td>待确认</td>
      </tr>
      <tr  class="danger">
         <td>产品4</td>
         <td>20/10/2013</td>
         <td>20/10/2013</td>
         <td>20/10/2013</td>
         <td>已退货</td>
      </tr>
   </tbody></table>
   </div>
     <div class="tab-pane fade" id="address">
     <br>
        1.<div class="panel panel-default">
            <div class="panel-body">联系人:river&emsp;联系方式:1354565133<span style="float:right;"><a href="<?php echo U('edit_address');?>">编辑</a>&emsp;<a href="<?php echo U('del_address');?>">删除</a></span></div>
            <div class="panel-footer">北京顺义</div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">地址1:<span style="float:right;"><a href="">编辑</a>&emsp;<a href="">删除</a></span></div>
            <div class="panel-footer">北京顺义</div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">地址1:<span style="float:right;"><a href="">编辑</a>&emsp;<a href="">删除</a></span></div>
            <div class="panel-footer">北京顺义</div>
        </div>
        <button class="col-md-offset-5 btn btn-primary btn-lg"data-toggle="modal" data-target="#myModal">添加新地址</button>
     </div>
   </div>
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
      </div><!-- /.modal-content --></div><!-- /.modal --></div>
  <!--弹出框end-->

<script type="text/javascript">
   $(function(){
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      // 获取已激活的标签页的名称
      var activeTab = $(e.target).text(); 
      // 获取前一个激活的标签页的名称
      var previousTab = $(e.relatedTarget).text(); 
      $(".active-tab span").html(activeTab);
      $(".previous-tab span").html(previousTab);
   });});
   $('#province').change(function(){
    var pcode=$(this).val();
    var data={'pcode':pcode};
    var s="<option value='0'>请选择市</option>";
    $.get("<?php echo U('getCity');?>",data,function(msg){
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
    $.get("<?php echo U('getArea');?>",data,function(msg){
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
      $.post("<?php echo U('add_address');?>",data,function(msg){
          if(msg==1){
            alert('添加成功');
            history.go(0);
          }else{
            alert('添加失败');
          }
      },'text')

   });
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