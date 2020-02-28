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
            <li><a href="javascript:delMut('<?php echo U("Order/doDel");?>')"><span><img src="/czq/Vrent/Public/Admin/images/t03.png" /></span>删除</a></li>
        </ul>
    </div>

    <table class="tablelist">
        <thead>
        <tr>
            <th width="60"><label><input type="checkbox" class="selectAll" />全选</label></th>
            <th class="ft" width="200">订单ID</th>
            <th width="300">出租用户</th>
            <th width="300">租户</th>
            <th width="300">下单时间</th>
            <th width="200">操作</th>
        </tr>
        </thead>

        <tbody>
        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                <td><input name="order_id" class="del_checkbox" type="checkbox" value="<?php echo ($vo["order_id"]); ?>" /></td>
                <td class="ft"><?php echo ($vo["order_id"]); ?></td>
                <td><?php echo ($vo["sent_name"]); ?></td>
                <td><?php echo ($vo["user_name"]); ?></td>
                <td><?php echo date('Y-m-d H:i:s',$vo['addtime']);?></td>
                <td>
                    <a href="<?php echo U('Order/view',array('order_id'=>$vo['order_id']));?>" class="tablelink">查看</a>
                    <span>|</span>
                    <a href="<?php echo U('Order/doedit',array('order_id'=>$vo['order_id']));?>" class="tablelink">拒绝订单</a>
                    <span>|</span>
                    <a class="delBtn tablelink" href="<?php echo U('Reply/doDel',array('ids'=>$vo['rid']));?>" del_title="<?php echo cutString($vo['content'],20);?>" >删除</a>
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