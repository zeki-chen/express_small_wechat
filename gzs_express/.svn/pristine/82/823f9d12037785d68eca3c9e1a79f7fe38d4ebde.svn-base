<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <title><?php echo ($sysInfo["webName"]); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/czq/Vrent/Public/Admin/css/style.css" rel="stylesheet" type="text/css" charset="utf-8" />
<link href="/czq/Vrent/Public/Validform_v5.3.2/css/validform.css" rel="stylesheet" type="text/css" charset="utf-8" />

<script language="JavaScript" src="/czq/Vrent/Public/Index/js/jquery.1.9.1.min.js"></script>
<script language="JavaScript" src="/czq/Vrent/Public/Index/js/jquery-1.8.3.min.js"></script>
<script src="/czq/Vrent/Public/Validform_v5.3.2/js/Validform_v5.3.2_min.js"></script>
<script src="/czq/Vrent/Public/layer/layer/layer.js"></script>
<script language="JavaScript" src="/czq/Vrent/Public/Admin/js/common.js"></script>
</head>
<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <?php if(is_array($bread)): foreach($bread as $key=>$vo): if(empty($vo['url'])): ?><li><?php echo ($vo["name"]); ?></li>
            <?php else: ?>
                <li><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endif; endforeach; endif; ?>
    </ul>
</div>

<div class="rightinfo">

    <div class="tools">
        <ul class="toolbar">
            <li><a href="<?php echo U('Car/add');?>"><span><img src="/czq/Vrent/Public/Admin/images/t01.png" /></span>添加</a></li>
            <li><a href="javascript:delMut('<?php echo U("Car/doDel");?>')"><span><img src="/czq/Vrent/Public/Admin/images/t03.png" /></span>删除</a></li>
        </ul>
    </div>

    <table class="tablelist">
        <thead>
        <tr>
            <th width="60"><label><input type="checkbox" class="selectAll" />全选</label></th>
            <th class="ft" width="100">车辆号码</th>
            <th width="300">车辆类型</th>
            <th width="300">车辆用户者</th>
            <th width="300">有效</th>
            <th width="200">操作</th>
        </tr>
        </thead>

        <tbody>
        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                <td><input name="rid" class="del_checkbox" type="checkbox" value="<?php echo ($vo["car_id"]); ?>" /></td>
                <td class="ft"><?php echo ($vo["car_number"]); ?></td>
                <td>
                    <?php if(($vo["type"]) == "1"): ?>汽车
                <?php else: if(($vo["type"]) == "2"): ?>电瓶车
                     <?php else: ?>自行车<?php endif; endif; ?>
                </td>
                <td><?php echo ($vo["user_name"]); ?></td>
                <td>
                    <?php if(($vo['valid']) == "1"): ?>是
                        <?php else: ?>否<?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo U('Car/photo',array('car_id'=>$vo['car_id']));?>" class="tablelink">上传图片</a>
                    <spand>|</spand>
                    <a href="<?php echo U('Car/view',array('car_id'=>$vo['car_id']));?>" class="tablelink">查看</a>
                    <spand>|</spand>
                    <a class="delBtn tablelink" href="<?php echo U('Car/doDel',array('ids'=>$vo['car_id']));?>" >删除</a>
                </td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>

    <div class="pagin">
        <?php echo ($page); ?>
    </div>

</div>

<script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>
</html>