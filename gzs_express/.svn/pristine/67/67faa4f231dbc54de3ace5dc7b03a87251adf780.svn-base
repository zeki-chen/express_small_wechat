<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <title><?php echo ($title); ?></title>
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
<style>
    .upimg_out {
        width: 70px;
        height: 70px;
        position: relative;
    }

    .upimg {
             width: 70px;
             height: 70px;
             display: block;
         }
    .upimg2 {
        width: 70px;
        height: 70px;
        display: block;
    }
    .upimg3 {
        width: 70px;
        height: 70px;
        display: block;
    }
    .upimg4 {
        width: 70px;
        height: 70px;
        display: block;
    }

    .upimg_btn {
        display: block;
        opacity: 0;
        position: absolute;
        width: 70px;
        height: 70px;
        left: 0;
        top: 0;
    }
</style>
<script charset="utf-8" src="/czq/Vrent/Public/kindeditor-master/kindeditor-all-min.js"></script>
<script charset="utf-8" src="/czq/Vrent/Public/kindeditor-master/lang/zh-CN.js"></script>
<script charset="utf-8" src="/czq/Vrent/Public/kindeditor-master/plugins/code/prettify.js"></script>
<link rel="stylesheet" href="/czq/Vrent/Public/kindeditor-master/themes/default/default.css"/>
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
        <form class="mainform" method="POST" action="<?php echo U('Car/doPhoto');?>" enctype="multipart/form-data">
            <input type="hidden" name="car_id" value="<?php echo ($model["car_id"]); ?>"/>
            <table class="formtable">
                <tbody>

                <tr id="" class="">
                    <td class="ft_title">封面1</td>
                    <td colspan="3">

                        <div class="file_holder ">
                            <div class="upimg_out">
                                <img src="<?php echo ($model["pic"]); ?>" class="upimg"/>

                                <input type="text" id="image1" value="" name="pic" class="upimg_btn"/>
                            </div>

                        </div>

                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">封面2</td>
                    <td colspan="3">

                        <div class="file_holder ">
                            <div class="upimg_out">
                                <img src="<?php echo ($model["pic2"]); ?>" class="upimg2"/>

                                <input type="text" id="image2" value="" name="pic2" class="upimg_btn"/>
                            </div>

                        </div>

                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">封面3</td>
                    <td colspan="3">

                        <div class="file_holder ">
                            <div class="upimg_out">
                                <img src="<?php echo ($model["pic3"]); ?>" class="upimg3"/>

                                <input type="text" id="image3" value="" name="pic3" class="upimg_btn"/>
                            </div>

                        </div>

                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">封面4</td>
                    <td colspan="3">

                        <div class="file_holder ">
                            <div class="upimg_out">
                                <img src="<?php echo ($model["pic4"]); ?>" class="upimg4"/>

                                <input type="text" id="image4" value="" name="pic4" class="upimg_btn"/>
                            </div>

                        </div>

                    </td>
                </tr>

                <td></td>
                <td colspan="3">
                    <input type="submit" value="保存" class="btn button_primary btnsave" status="1">
                    <input type="button" value="返回" class="btn button_success btnsave"
                           onclick="javascript:history.go(-1)"/>
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
<script>
    KindEditor.ready(function (K) {
        var editor = K.editor({
            uploadJson: "<?php echo U('Car/pic');?>",
            // fileManagerJson : '/czq/Vrent/Public/kindeditor-master/php/file_manager_json.php',
            // allowFileManager : true
        });
        K('#image1').click(function () {
            editor.loadPlugin('image', function () {
                editor.plugin.imageDialog({
                    // showRemote : false,
                    imageUrl: K('#url1').val(),
                    clickFn: function (url, title, width, height, border, align) {
                        console.log("url:" + url);
                        K('#image1').val(url);
                        K('.upimg').attr('src', url);
                        editor.hideDialog();
                    }
                });
            });
        });
        K('#image2').click(function () {
            editor.loadPlugin('image2', function () {
                editor.plugin.imageDialog({
                    // showRemote : false,
                    imageUrl: K('#url2').val(),
                    clickFn: function (url2, title, width, height, border, align) {
                        console.log("url:" + url2);
                        K('#image2').val(url2);
                        K('.upimg2').attr('src', url2);
                        editor.hideDialog();
                    }
                });
            });
        });
        K('#image3').click(function () {
            editor.loadPlugin('image3', function () {
                editor.plugin.imageDialog({
                    // showRemote : false,
                    imageUrl: K('#url3').val(),
                    clickFn: function (url3, title, width, height, border, align) {
                        console.log("url:" + url3);
                        K('#image3').val(url3);
                        K('.upimg3').attr('src', url3);
                        editor.hideDialog();
                    }
                });
            });
        });
        K('#image4').click(function () {
            editor.loadPlugin('image4', function () {
                editor.plugin.imageDialog({
                    // showRemote : false,
                    imageUrl: K('#url4').val(),
                    clickFn: function (url4, title, width, height, border, align) {
                        console.log("url:" + url4);
                        K('#image4').val(url4);
                        K('.upimg4').attr('src', url4);
                        editor.hideDialog();
                    }
                });
            });
        });


    });
</script>

</body>
</html>