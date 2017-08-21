<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap.css" />
<link rel="stylesheet" type="text/css"
	href="/Public/Admin/Css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/style.css" />
<script type="text/javascript" src="/Public/Admin/js/jquery2.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery2.sorted.js"></script>
<script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>
<script type="text/javascript" src="/Public/Admin/js/ckform.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>

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
		 <font color="#777777"><strong>分类信息：</strong></font>
		 <a href="<?php echo U('authAdd');?>"><button type="button"  id="addnew">添加权限</button></a>
		
	</form>
	<table class="table table-bordered table-hover definewidth m10">
		<thead>
			<tr>
				<th>编号</th>
			    <th>权限名称</th>
				<th>控制器</th>
				<th>方法</th>
				<th>操作</th>
			</tr>
		</thead>
		<?php if(is_array($auth_list)): foreach($auth_list as $key=>$v): ?><tr>
			<td><?php echo ($v["auth_id"]); ?></td>
		    <td><?php echo (str_repeat('&emsp;',$v["level"])); echo ($v["auth_name"]); ?></td>
		    <td><?php echo ($v["auth_c"]); ?></td>
		    <td><?php echo ($v["auth_a"]); ?></td>
			<td>
				<button type="submit">修改</button> 
				<a href="<?php echo U('authDel','id='.$v[auth_id]);?>"><button type="submit">删除</button></a>
			</td>
		</tr><?php endforeach; endif; ?>
	</table>
</body>
 
</html>