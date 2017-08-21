<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/style.css" />
    <script type="text/javascript" src="/Public/Admin/js/jquery2.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery2.sorted.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/ckform.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquerypicture.js"></script>
    
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
        select{
            height:30px;
        }
        input[type="text"]{
            height:30px;
        }
        
    </style>
</head>
<body><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<font color="#777777"><strong>添加属性：</strong></font> 
<form action="" method="post" class="definewidth m20" enctype="multipart/form-data">
<table style="margin-left:10px;margin-top:3px;">
    <tr>
         <td>父类别:</td>
         <td>
             <select name='attr_cateid'>   
                    <option value='0' selected>请选择大类</option>        
                <?php if(is_array($cateList)): foreach($cateList as $key=>$v): ?><option value="<?php echo ($v["cate_id"]); ?>}"><?php echo ($v["cate_name"]); ?></option><?php endforeach; endif; ?>
             </select>
         </td>
    </tr>
    <tr>
        <td>属性名称:</td>
        <td><input type="text" name="attr_name"> </td>
    </tr>
    <tr>
        <td>属性类型:</td>
        <td>
        <input type="radio" name="attr_type" value='单选' checked>单选 
            <input type="radio" name="attr_type" value='手填'>手填 
        </td>
    </tr>
	<tr>
         <td>属性值：</td>
		 <td><textarea name='attr_value' style="width: 250px;height: 100px" placeholder="多属性值请用,隔开"></textarea></td>
    </tr>
	
    <tr>
        <td></td>
       <td>
            <button style="margin-left:5px;"type="submit" class="btn btn-primary" type="button"  >保&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid"><a href="classQuery.html"> 返回列表</a></button>
        </td>
    </tr>
</table>
</form>

</body>
</html>