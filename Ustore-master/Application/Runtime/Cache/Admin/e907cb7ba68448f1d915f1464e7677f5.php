<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/style.css" />
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>

<style type="text/css">
body {font-size: 20px;
	padding-bottom: 40px;
	background-color: #e9e7ef;
}

.sidebar-nav {
	padding: 9px 0;
}
ul,li{
	list-style: none;
	margin-bottom: 10px;
}
@media ( max-width : 980px) {
	/* Enable use of floated navbar text */
	.navbar-text.pull-right {
		float: none;
		padding-left: 5px;
		padding-right: 5px;
	}
}
</style>
</head>
<body>
<div class='col-md-10 col-md-offset-1'>
	<div class="panel panel-info">
	   <div class="panel-heading">
	      <h3 class="panel-title">图片管理:nokia</h3>
	   </div>
	   <div class="panel-body">
	      	<img src="" alt='暂无此图'>
	   </div>
   </div>
	<div>
		<form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="goods_id" value='<?php echo ($goods_info["goods_id"]); ?>' />
            <ul class="forminfo">
                <li>
                    商品图片[<a href="javascript:;" class="add">+</a>]
                    <input name="goods_pic[]" type="file" />
                </li>
                <li>
                    <input name="" id="btnSubmit" type="button" class="btn" value="确认保存" />
                </li>
            </ul>
        </form>
	</div>
</div>

</body>
</html>
<script type="text/javascript">
	$('.add').click(function(){
    /*var li="<li><label>商品图片[<a href='javascript:;' class='del'>-</a>]</label><input name='goods_pic[]' type='file' /></li>"*/
    var li='<li>商品图片[<a href="javascript:;" class="del">-</a>]<input name="goods_pic[]" type="file" /></li>';
    $(this).parent().after(li);
})
$(document).on('click','.del',function(){
	$(this).parent().remove();
})
</script>