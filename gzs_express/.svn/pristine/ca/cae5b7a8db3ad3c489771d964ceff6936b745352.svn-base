<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo ($sysInfo["webName"]); ?>后台管理系统</title>
    <title><?php echo ($sysInfo["webName"]); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/czq/Vrent/Public/Admin/css/style.css" rel="stylesheet" type="text/css" charset="utf-8" />
<link href="/czq/Vrent/Public/Validform_v5.3.2/css/validform.css" rel="stylesheet" type="text/css" charset="utf-8" />

<script language="JavaScript" src="/czq/Vrent/Public/Index/js/jquery.1.9.1.min.js"></script>
<script language="JavaScript" src="/czq/Vrent/Public/Index/js/jquery-1.8.3.min.js"></script>
<script src="/czq/Vrent/Public/Validform_v5.3.2/js/Validform_v5.3.2_min.js"></script>
<script src="/czq/Vrent/Public/layer/layer/layer.js"></script>
<script language="JavaScript" src="/czq/Vrent/Public/Admin/js/common.js"></script>

    <script language="javascript">
        $(function(){
            $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
            $(window).resize(function(){
                $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
            })
        });
    </script>

</head>

<body style="background-color:#1c77ac; background-image:url(images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">



<div id="mainBody">
    <div id="cloud1" class="cloud"></div>
    <div id="cloud2" class="cloud"></div>
</div>


<div class="logintop">
    <span>欢迎登录<?php echo ($sysInfo["webName"]); ?>后台管理系统</span>
    <ul>
    </ul>
</div>

<div class="loginbody">

    <div class="logintitle"><?php echo ($sysInfo["webName"]); ?>后台管理系统</div>

    <div class="loginbox">

        <ul>
            <form class="mainform" method="post" action="<?php echo U('Index/doLogin');?>">
                <li><input name="aname" type="text" class="loginuser" placeholder="请输入管理员账号"/></li>
                <li><input name="passwd" type="password" class="loginpwd" placeholder="请输入密码"/></li>
                <li><input name="" type="submit" class="loginbtn" value="登录"/></li>
            </form></ul>


    </div>

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

<div class="loginbm">版权所有 2016 <?php echo ($sysInfo["support"]); ?></div>


</body>

</html>