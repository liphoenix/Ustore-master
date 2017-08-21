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

<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>编号</th>
        <th>角色名</th>      
        <th>权限</th>
        <th width="500px">权限路径</th>
		<th>操作</th>
    </tr>
    </thead>
        <?php if(is_array($role_list)): foreach($role_list as $key=>$v): ?><tr>
                <td><?php echo ($v["role_id"]); ?></td>
                <td><?php echo ($v["role_name"]); ?></td>
                <td><?php echo ($v["role_auth_ids"]); ?></td>
                <td><?php echo ($v["role_auth_path"]); ?></td>
                <td>
                <a href="<?php echo U('distribute','id='.$v[role_id]);?>"><button>分配权限</button></a>
                <a href="<?php echo U('delRole','id='.$v[role_id]);?>"><button>删除</button></a>
                </td>          
            </tr><?php endforeach; endif; ?>
       </table>
</body>
</html>