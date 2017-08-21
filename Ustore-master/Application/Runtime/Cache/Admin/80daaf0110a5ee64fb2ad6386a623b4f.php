<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/style.css" />
    <script type="text/javascript" src="/Public/Admin/Js/jquery2.js"></script>
    <script type="text/javascript" src="/Public/Admin/Js/jquery2.sorted.js"></script>
    <script type="text/javascript" src="/Public/Admin/Js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/Admin/Js/ckform.js"></script>
    <script type="text/javascript" src="/Public/Admin/Js/common.js"></script>
    <script type="text/javascript" src="/Public/Admin/Js/jquerypicture.js"></script>
    
    <style type="text/css">
        body {font-size: 20px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
        .table{
            width: 500px;
        }

    </style>
</head>
<body>
<br>
 <font color="#777777"><strong>添加管理员信息：</strong></font>
<form action="" method="post" class="definewidth m20" enctype="multipart/form-data">
<table class="table table-bordered table-hover m10" style="margin-left:10px;margin-top:3px;">
    
   
   <br>
    <tr>
        <td class="tableleft">登录名</td>
        <td><input type="text" name="manager_name"/></td>
        
    </tr>
	<tr>
        <td class="tableleft">密码</td>
        <td><input type="password" name="manager_passwd"/></td>
    </tr>
    <tr>
        <td class="tableleft">权限</td>
        <td><select name='manager_roleid'>
            <option value='1'>超级管理员</option>
            <option value='2'>普通管理员</option>
        </select></td>
    </tr>
    <tr>
        <td class="tableleft">状态</td>
        <td>
            <input type="radio" name="manager_status" value="启用" checked>启用
            <input type="radio" name="manager_status" value="禁用">禁用
        </td>
    </tr>
	<tr>
        <td colspan="2">
            <button type="submit" class="btn btn-primary">提交</button>
        </td>   
    </tr>
	
</table>
</form>
 
<script>	
$("#GoodsPicture").change(function(){
	var objUrl = getObjectURL(this.files[0]) ;
	console.log("objUrl = "+objUrl) ;
	if (objUrl) {
		$("#img0").attr("src", objUrl) ;
	}
}) ;

</body>
</html>
<script>
   $(function (){       
		$('#backid').click(function(){
				window.location.href="goodsQuery.html";
		 });
    });
		
</script>