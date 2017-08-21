<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap.css" />
<link rel="stylesheet" type="text/css"
	href="/Public/Admin/Css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/style.css" />
<script type="text/javascript" src="/Public/Admin/Css/jquery2.js"></script>
<script type="text/javascript" src="/Public/Admin/Css/jquery2.sorted.js"></script>
<script type="text/javascript" src="/Public/Admin/Css/bootstrap.js"></script>
<script type="text/javascript" src="/Public/Admin/Css/ckform.js"></script>
<script type="text/javascript" src="/Public/Admin/Css/common.js"></script>

<style type="text/css">
body {font-size: 20px;
	padding-bottom: 40px;
	background-color: #e9e7ef;
}

.sidebar-nav {
	padding: 9px 0;
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
	<form class="form-inline definewidth m20" action="#" method="get">
		 <font color="#777777"><strong>文档名称：</strong></font> <input type="text"
			name="menuname" id="menuname" class="abc input-default"
			placeholder="" value="">&nbsp;&nbsp;
		<button type="submit" class="btn btn-primary">查询</button>
		&nbsp;&nbsp;
		<button type="button"  id="addnew">
			<a href="documentAdd.html">添加文档 
		</button>
		</a>
	</form>
	<table class="table table-bordered table-hover definewidth m10">
		<thead>
			<tr>
				<th>编号</th>
				<th>商品名称</th>
				<th>商品分类</th>
				<th>所属品牌</th>
				<th>商品价格</th>
				<th>商品图片</th>
				<th>管理菜单</th>
			</tr>
		</thead>
		<?php if(is_array($goods_list)): foreach($goods_list as $key=>$v): ?><tr>
			<td><?php echo ($v["goods_id"]); ?></td>
			<td><?php echo ($v["goods_name"]); ?></td>
			<?php if(is_array($cate_list)): foreach($cate_list as $key=>$vo): if($vo["cate_id"] == $v["goods_cateid"] ): ?><td><?php echo ($vo["cate_name"]); ?></td><?php endif; ?>
			<?php if($vo["cate_id"] == $v["goods_brandid"] ): ?><td><?php echo ($vo["cate_name"]); ?></td><?php endif; endforeach; endif; ?>
			
			<td><?php echo ($v["goods_price"]); ?></td>
			<td><img src="<?php echo (ltrim($v["goods_small_pic"],'.')); ?>" alt='暂无此图'></td>
			<td>
				<a href='<?php echo U("photos");?>'><button>商品图片管理</button></a>
				<a href=""><button>删除</button></a>
			</td>
		</tr><?php endforeach; endif; ?>
		


	</table>

</body>
</html>