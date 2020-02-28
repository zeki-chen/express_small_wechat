<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <title><?php echo ($title); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/czq/Vrent/Public/Admin/css/style.css" rel="stylesheet" type="text/css" charset="utf-8" />
<link href="/czq/Vrent/Public/Validform_v5.3.2/css/validform.css" rel="stylesheet" type="text/css" charset="utf-8" />

<script language="JavaScript" src="/czq/Vrent/Public/js/jquery-1.9.1.min.js"></script>
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
<div class="formbody">

    <div class="formtitle"><span><?php echo ($title); ?></span></div>

    <div class="tab mt10" id="tabid1">
        <table class="formtable">
            <tbody>
            <tr id="" class="">
                <td class="ft_title">用户头像</td>
                <td colspan="3">
                    <img class="wximg" src="<?php echo ($model["headimgurl"]); ?>"/>
                </td>
            </tr>
            <tr id="" class="">
                <td class="ft_title">用户昵称</td>
                <td colspan="3"><?php echo ($model["user_name"]); ?></td>
            </tr>
            <tr id="" class="">
                <td class="ft_title">评论内容</td>
                <td colspan="3"><?php echo ($model["content"]); ?></td>
            </tr>
            <tr id="" class="">
                <td class="ft_title">评论时间</td>
                <td colspan="3"><?php echo date('Y-m-d H:i:s',$model['addtime']);?></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3">
                    <input type="button" value="返回" class="btn button_success btnsave" onclick="javascript:history.go(-1)" />
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="formtitle"><span>订单详情</span></div>

    <div class="tab mt10" id="tabid1">
        <table class="formtable">
            <tbody>
            <tr id="" class="">
                <td class="">
                    <div class="sptimg">
                        <img class="wximg" src="<?php echo ($modelorder["pic"]); ?>"/>
                        <label><?php echo ($modelorder["car_number"]); ?></label>
                    </div>
                </td>
                <td colspan="3">
                    车型：<?php echo ($modelorder["intro"]["kind"]); ?>
                    座位：<?php echo ($modelorder["intro"]["seat"]); ?>
                    品牌：<?php echo ($modelorder["intro"]["brand"]); ?>
                </td>

            </tr>
            <tr id="" class="">
                <td class="ft_title">订单id</td>
                <td colspan="3"><?php echo ($modelorder["order_id"]); ?></td>
            </tr>
            <tr id="" class="">
                <td class="ft_title">订单时间</td>
                <td colspan="3"><?php echo date('Y-m-d H:i:s',$modelorder['addtime']);?></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="h10"></div>
</div>

</div>
</body>
</html>