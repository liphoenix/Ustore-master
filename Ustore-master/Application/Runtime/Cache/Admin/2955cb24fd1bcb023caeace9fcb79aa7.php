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

    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="#" method="get">
     <font color="#777777"><strong>用户名：</strong></font>
    <input type="text" name="menuname" id="menuname"class="abc input-default" placeholder="" value="">&nbsp;&nbsp; 
    <button type="submit" class="btn btn-primary">查询</button> 
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>编号</th>
        <th>用户名</th>      
        <th width="300px">创建时间</th>
		<th>操作</th>
    </tr>
    </thead>
        <?php if(is_array($manager_list)): foreach($manager_list as $key=>$v): ?><tr>
                <td><?php echo ($v["manager_id"]); ?></td>
                <td><?php echo ($v["manager_name"]); ?></td>
                <td><?php echo (date('Y-m-d H:i:s',$v["manager_time"])); ?></td>
                <td><button type="submit">注销</button></td>          
            </tr><?php endforeach; endif; ?>
       </table>

</body>
</html>