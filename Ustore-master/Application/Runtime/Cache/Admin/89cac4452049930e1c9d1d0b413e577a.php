<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/style.css" />
    <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
    <link rel="stylesheet" href="/Public/Home/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/Home/css/buttons.css">
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

<form action="" method="post">
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th colspan="2">
        <i class="fa fa-user"></i>【<font color="red"><?php echo ($role_info["role_name"]); ?></font>】
        <input id='qx' type='button' value='全选' />
        <input id='qbx' type='button' value='清空' />
        </th>
    </tr>
    <tr>
        <th width="300px">权限分类</th>
        <th width="500px">权限</th>
    </tr>
    </thead>
    <tbody>
      <?php if(is_array($authA)): foreach($authA as $key=>$ov): ?><tr>
            <td>
                <input class='aa' type="checkbox" name="ids[]" value="<?php echo ($ov["auth_id"]); ?>" <?php if(in_array(($ov["auth_id"]), is_array($role_info["role_auth_ids"])?$role_info["role_auth_ids"]:explode(',',$role_info["role_auth_ids"]))): ?>checked='checked'<?php endif; ?>
                /><?php echo ($ov["auth_name"]); ?>
           </td>
            <td>
                <?php if(is_array($authB)): foreach($authB as $key=>$v): if($ov["auth_id"] == $v["auth_pid"] ): ?><input class='bb'type="checkbox" name='ids[]' value="<?php echo ($v["auth_id"]); ?>"
                    <?php if(in_array(($v["auth_id"]), is_array($role_info["role_auth_ids"])?$role_info["role_auth_ids"]:explode(',',$role_info["role_auth_ids"]))): ?>checked='checked'<?php endif; ?> 
                    /><?php echo ($v["auth_name"]); ?>&emsp;<?php endif; endforeach; endif; ?>
            </td>
        </tr><?php endforeach; endif; ?>  
        <tr>           
       <td colspan="2">
            <button style="margin-left:5px;"type="submit" class="btn btn-primary" type="button"  >保&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid"><a href="classQuery.html"> 返回列表</a></button>
        </td>
        </tr>
    </tbody>
    </table>
    <input type="hidden" name="role_id" value="<?php echo ($role_info["role_id"]); ?>">
</form>
</body>
</html>
<script>
    
$('#qx').click(function(){
    $(':checkbox').prop('checked',true);
})
$('#qbx').click(function(){
    $(':checkbox').prop('checked',false);
})
$('.aa').click(
    function(){
        if($(this).prop('checked')){
             $(this).parent().parent().find('.bb').prop('checked',true);
         }else{
             $(this).parent().parent().find('.bb').prop('checked',false);
         }
    }
)
$('.bb').click(
    function(){
        if($(this).prop('checked')){
             $(this).parent().parent().find('.aa').prop('checked',true);
         }else{
             $(this).parent().parent().find('.aa').prop('checked',false);
            $.each($('.bb'),function(){
                if($(this).prop('checked')){
                    $(this).parent().parent().find('.aa').prop('checked',true);
                }
            })
        }
    }
)
</script>