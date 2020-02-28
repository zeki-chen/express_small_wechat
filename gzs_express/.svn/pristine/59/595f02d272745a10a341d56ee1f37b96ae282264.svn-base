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
        <form class="mainform" method="post" action="<?php echo U('Admin/doAdd');?>">
            <table class="formtable">
    <tbody>
    <?php if((ACTION_NAME) == "add"): ?><tr id="" class="">
            <td class="ft_title">管理员账号</td>

            <td colspan="3">
                <input value="<?php echo ($conf["webName"]); ?>" name="aname" maxlength="50" datatype="*,checkName" class="bds inp  w500" nullmsg="请填写管理员账号（必填）" errormsg="用户名已被占用" placeholder="请填写管理员账号（必填）" type="text">
                <font class="need show_0">*</font><span class="Validform_checktip">请填写管理员账号（必填）</span>
            </td>
        </tr>
        <tr id="" class="">
            <td class="ft_title">密码</td>
            <td colspan="3">
                <input value="<?php echo ($conf["serverName"]); ?>" datatype="*3-18" name="pwd" maxlength="18" class="bds inp  w500" nullmsg="请填写密码（必填）" placeholder="请填写密码（必填）" type="password">
                <font class="need show_0">*</font><span class="Validform_checktip">请填写密码（必填）</span>
            </td>
        </tr>
        <tr id="" class="">
            <td class="ft_title">确认密码</td>
            <td colspan="3">
                <input datatype="*3-18" recheck="pwd" maxlength="18" class="bds inp  w500" nullmsg="请再次输入密码（必填）" placeholder="请再次输入密码（必填）" type="password">
                <font class="need show_0">*</font><span class="Validform_checktip">请再次输入密码（必填）</span>
            </td>
        </tr>
        <?php else: ?>
        <tr id="" class="">
            <td class="ft_title">管理员账号</td>

            <td colspan="3">
                <label><?php echo ((isset($model["aname"]) && ($model["aname"] !== ""))?($model["aname"]):"cs"); ?></label>
            </td>
        </tr><?php endif; ?>
   
  
    <tr id="" class="">
        <td class="ft_title">是否有效</td>
        <td colspan="3">
            <label><input type="radio" name="valid" value="1" <?php if(((isset($model['valid']) && ($model['valid'] !== ""))?($model['valid']):1) == "1"): ?>checked<?php endif; ?>/>是</label>
            &nbsp;&nbsp;
            <label><input type="radio" name="valid" value="0" datatype="*" <?php if(($model['valid']) == "0"): ?>checked<?php endif; ?>/>否</label>
            <font class="need show_0">*</font><span class="Validform_checktip">请选择是否有效</span>
        </td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3">
            <input type="submit" value="保存" class="btn button_primary btnsave" status="0">
            <input type="button" value="返回" class="btn button_success btnsave" onclick="javascript:history.go(-1)" />
        </td>
    </tr>

    </tbody>
</table>
        </form>
    </div>
    <script type="text/javascript">
    $(function(){
       $('.mainform').Validform({
           tiptype:4,
           //传入自定义datatype类型，可以是正则，也可以是函数
           datatype:{
               "checkName":function(gets,obj,curform){
                   var aname = gets;
                   var url_check = "<?php echo U('Admin/checkName');?>";
                   $.ajax({
                       data:{'aname':aname},
                       type:"POST",
                       url:url_check,
                       async:false,
                       datatype:'json',
                       success:function(data){
                           if(data.status==1){
                               flag = true;
                           }else{
                               flag = false;
                           }
                       }
                   });
                   return flag;
               },
           },
           showAllError: true,//提交表单时所有错误提示信息都会显示
           ajaxPost: true,//使用ajax方式提交表单数据，将会把数据POST到config方法或表单action属性里设定的地址
           beforeSubmit: function(curform) {
               loading("正在提交");
           },
           callback: function(data) {
               if (data.status == 1) {
                   msgOK(data.info);
               } else {
                   msgFaild(data.info);
               }
               if (data.url) {
                   loading(data.info + ",跳转中...");
                   hrefTo(data.url, 500)
               }
           }
       });
    });
</script>
    <div class="h10"></div>
</div>
</body>
</html>