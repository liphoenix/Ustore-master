<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8">
<title>Ustore视频网站</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/css/adminStyle.css" rel="stylesheet" type="text/css" />

<title>Ustore网站管理系统</title>
<script type="text/javascript" src="/Public/Admin/js/jquery1.js"></script>
<script type="text/javascript">
	$(document).ready(
			function() {
				$(".div2").click(
						function() {
							$(this).next("div").slideToggle("slow").siblings(
									".div3:visible").slideUp("slow");
						});
			});
	function openurl(url) {
		var rframe = parent.document.getElementById("rightFrame");
		rframe.src = url;
	}
</script>
<style>
body {
	margin: 0;
	font-family: 微软雅黑;
	background-image: url(/Public/Admin/images/.jpg);
	background-repeat: no-repea;
	background-size: cover;
	background-attachment: fixed;
	background-color: #DDDDDD
	
}

.top1 {
	position: absolute;
	top: 0px;
	width: 100%;
	height: 20px;
	text-align: center;
	color: #FFFFFF;
	font-size: 17px;
	font-height: 20px;
	font-family: 楷体;
	background-color: #888888
}

.title {
float:left;
    margin:-32px 20px;
	font-size: 40px;
	color: #FFFFFF;
	font-height: 55px;
	font-family: 隶书;
}

.top2 {
	position: absolute;
	top: 20px;
	width: 100%;
	height: 77px;
	text-align: center;
	color: #ccffff;
	background-color: #888888
}

.left {
	position: absolute;
	left: 0px;
	top: 97px;
	width: 200px;
	height: 85%;
	border-right: 1px solid #9370DB;
	color: #000000;
	font-size: 20px;
	text-align: center;
	background-color: #B3B3B3
}

.right {
	position: absolute;
	left: 200px;
	top:97px;
	width: 85.2%;
	height: 85%;
	border-top: 0px solid #484860;
	font-size: 14px;
	text-align: center;
}

.end {
	position: absolute;
	bottom: 0px;
	width: 100%;
	height: 30px;
	text-align: center;
	color: #556B2F;
	font-size: 17px;
	font-height: 20px;
	font-family: 楷体;
	background-color: #C0C0C0
}

.div1 {
	text-align: center;
	width: 200px;
	padding-top: 10px;
}

.div2 {
	height: 40px;
	line-height: 40px;
	cursor: pointer;
	font-size: 18px;
	position: relative;
	border-bottom: #ccc 0px dotted;
}

.spgl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(/Public/Admin/images/1.png);
}

.yhgl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(/Public/Admin/images/4.png);
}

.gggl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(/Public/Admin/images/4.png);
}

.zlgl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(/Public/Admin/images/4.png);
}

.pjgl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(/Public/Admin/images/4.png);
}

.tcht {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(/Public/Admin/images/2.png);
}

.div3 {
	display: none;
	cursor: pointer;
	font-size: 15px;
}

.div3 ul {
	margin: 0;
	padding: 0;
}

.div3 li {
	height: 30px;
	line-height: 30px;
	list-style: none;
	border-bottom: #ccc 1px dotted;
	text-align: center;
}

.a {
	text-decoration: none;
	color: #000000;
	font-size: 15px;
}

.a1 {
	text-decoration: none;
	color: #000000;
	font-size: 18px;
}
</style>
</head>
<body>

	<div class="top1">
		<marquee scrollAmount=2 width=300>数据无价，请谨慎操作！</marquee>
	</div>
	<div class="top2">
		<div class="logo">
			<img src="/Public/Admin/images/logo.png" title="在哪儿" />
		</div>
		<div class="title" >
			<h3>网站后台管理系统</h3>
		</div>
		<div class="fr top-link">
			<a href="admin_list.html" target="mainCont" title="DeathGhost"><i
				class="adminIcon"></i><span>管理员：<?php echo (session('name')); ?></span></a> 
		</div>
	</div>
	<div class="left">
		<div class="div1">
           	<div class="div2">
				<div class="spgl"></div>
				商品管理
			</div>
			<div class="div3">
				<li><a class="a" href="javascript:void(0);"
					onClick="openurl('<?php echo U("Goods/goodsAdd");?>')">添加商品</a></li>
				<li><a class="a" href="javascript:void(0);"
					onClick="openurl('<?php echo U("Goods/goodsList");?>');">商品列表</a></li>			   
			</div>
			<div class="div2">
				<div class="spgl"></div>
				类别管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('<?php echo U("Cate/cateList");?>');">分类列表</a></li>						
				</ul>
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('<?php echo U("Cate/cateAdd");?>');">添加分类</a></li>	
				</ul>
			</div>
			<div class="div2">
				<div class="yhgl"></div>
				&emsp;管理员管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('<?php echo U("Manager/managerAdd");?>');">添加管理员</a></li>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('<?php echo U("Manager/managerList");?>');">管理员列表</a></li>
				</ul>
			</div>
			
			<div class="div2">
				<div class="gggl"></div>
				订单管理
			</div>
			<div class="div3">

				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('Order/orderList');">订单列表</a></li>
				</ul>
			</div>

			<div class="div2">
				<div class="spgl"></div>
				&emsp;&emsp;商品属性管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('<?php echo U("Attr/attrList");?>');">属性列表</a></li>						
				</ul>
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('<?php echo U("Attr/attrAdd");?>');">添加属性</a></li>	
				</ul>
			</div>

			<div class="div2">
				<div class="pjgl"></div>
				权限管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('<?php echo U("Auth/authList");?>');">权限列表</a></li>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('<?php echo U("Auth/authAdd");?>');">添加权限</a></li>
				</ul>
			</div>

			<div class="div2">
				<div class="pjgl"></div>
				角色管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('<?php echo U("Role/roleList");?>');">角色列表</a></li>
				</ul>
			</div>
			<a class="a1" href="<?php echo U('Index/logout');?>"><div class="div2">
					<div class="tcht"></div>
					退出后台
				</div></a>
		</div>
	</div>

	<div class="right">
		<iframe id="rightFrame" name="rightFrame" width="100%" height="100%"
			scrolling="auto" marginheight="0" marginwidth="0" align="center"
			style="border: 0px solid #CCC; margin: 0; padding: 0;"></iframe>
	</div>


</body>
</html>