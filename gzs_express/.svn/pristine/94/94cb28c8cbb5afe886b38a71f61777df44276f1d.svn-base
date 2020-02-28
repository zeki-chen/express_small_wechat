<?php if (!defined('THINK_PATH')) exit();?>
<form action="<?php echo U('Individual/dopwd');?>" method="post" class="content_div">
	<input type="hidden" name="user_id" value="<?php echo ($user["user_id"]); ?>">
	<div class="list_div">
		<span class="span_title">新密码</span>
		<input type="text" name="pwd" placeholder="" class="ipt"  maxlength="18"  datatype="*"><img src="/czq/Vrent/Public/Index/images/images/bitian.png" class="bitian_img"><span class="pw_explain">密码为6-20个字符，可由英文、数字及符号组成</span>
	</div>
	<div class="list_div">
		<span class="span_title">输入新密码</span>
		<input type="text" recheck="pwd"  placeholder="请再次输入密码（必填）" maxlength="18"  class="ipt" ><img src="/czq/Vrent/Public/Index/images/images/bitian.png" class="bitian_img">请再次输入密码（必填）
	</div>


	<div class="list_div">
		<span class="span_title">手机号</span>
		<span><?php echo ($user["tel"]); ?></span>
		<button type="button" class="change_phone">更换号码</button>
	</div>
	<div class="list_div">
		<span class="span_title">验证码</span>
		<input type="text" name="" placeholder="" class="ipt check_ipt"><button type="button" class="send_check pw_explain">发送验证码</button>
	</div>
	<button type="submit" class="submit_btn">保 存</button>
</form>


<script type="text/javascript" src="/czq/Vrent/Public/Index/js/bootstrap.js"></script>
<script src="/czq/Vrent/Public/Index/js/jsRem.js"></script>
<script type="text/javascript">

</script>
<script type="text/javascript">
    $(function(){
        $('.mainform').Validform({
            tiptype:4,

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