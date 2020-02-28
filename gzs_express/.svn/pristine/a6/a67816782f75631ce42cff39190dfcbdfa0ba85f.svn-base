<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

	<script type="text/javascript">
		$(function(){
			//导航切换
			$(".menuson li").click(function(){
				$(".menuson li.active").removeClass("active")
				$(this).addClass("active");
			});

			$('.title').click(function(){
				var $ul = $(this).next('ul');
				$('dd').find('ul').slideUp();
				if($ul.is(':visible')){
					$(this).next('ul').slideUp();
				}else{
					$(this).next('ul').slideDown();
				}
			});
		})
	</script>


</head>

<body style="background:#f0f9fd;">
<div class="lefttop"><span></span>功能菜单</div>

<dl class="leftmenu">

	<dd>
		<div class="title">
			<span><img src="/czq/Vrent/Public/Admin/images/leftico01.png"/></span>用户管理
		</div>
		<ul class="menuson">

			<li><cite></cite><a href="<?php echo U('Admin/index');?>" target="rightFrame">管理员管理</a><i></i></li>
			<li><cite></cite><a href="<?php echo U('User/index');?>" target="rightFrame">用户管理</a><i></i></li>
			<!--<li><cite></cite><a href="<?php echo U('User/index');?>" target="rightFrame">车主管理</a><i></i></li>-->
		</ul>
	</dd>

	<dd>
		<div class="title">
			<span><img src="/czq/Vrent/Public/Admin/images/leftico01.png"/></span>订单管理
		</div>
		<ul class="menuson">
			<li><cite></cite><a href="<?php echo U('Car/index');?>" target="rightFrame">车辆列表</a><i></i></li>
			<li><cite></cite><a href="<?php echo U('Order/index');?>" target="rightFrame">订单列表</a><i></i></li>
			<li><cite></cite><a href="<?php echo U('Spitslot/index');?>" target="rightFrame">评论列表</a><i></i></li>
		</ul>
	</dd>

	<dd>
		<div class="title">
			<span><img src="/czq/Vrent/Public/Admin/images/leftico01.png"/></span>系统配置
		</div>
		<ul class="menuson">
			<li><cite></cite><a href="<?php echo U('Config/webSetting');?>" target="rightFrame">网站配置</a><i></i></li>

		</ul>
	</dd>

</dl>

</body>
</html>