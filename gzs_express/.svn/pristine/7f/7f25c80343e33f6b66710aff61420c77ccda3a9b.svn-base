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
        <form class="mainform" method="POST" action="<?php echo U('Car/doAdd');?>" enctype="multipart/form-data">
            <table class="formtable">
                <tbody>
                <tr id="" class="">
                    <td class="ft_title">车主id</td>
                    <td colspan="3">
                        <input value="<?php echo ($model["user_id"]); ?>" datatype="*" name="user_id" maxlength="50"
                               class="bds inp  w500" nullmsg="请填写车主姓名" placeholder="请填写车主id" type="text">
                        <font class="need show_0"></font><span class="Validform_checktip">请填写车主id</span>
                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">车牌号</td>
                    <td colspan="3">
                        <input value="<?php echo ($model["car_number"]); ?>" datatype="*" name="car_number" maxlength="50"
                               class="bds inp  w500" nullmsg="请填写车牌号" placeholder="请填写车牌号" type="text">
                        <font class="need show_0"></font><span class="Validform_checktip">请填写车牌号</span>
                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">押金</td>
                    <td colspan="3">
                        <input value="<?php echo ($model["cash"]); ?>" datatype="*" name="cash" maxlength="50" class="bds inp  w500"
                               nullmsg="请填写押金" placeholder="请填写押金" type="text">
                        <font class="need show_0"></font><span class="Validform_checktip">请填写押金</span>
                    </td>
                </tr>

                <tr id="" class="">
                    <td class="ft_title">座位</td>
                    <td colspan="3">
                        <select name="seat" datatype="*">
                            <option value="" selected="selected">请选择座位</option>
                            <?php if(is_array($seat)): foreach($seat as $key=>$vo): ?><option value="<?php echo ($vo["seat_id"]); ?>"><?php echo ($vo["seat_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                        <font class="need show_0"></font><span class="Validform_checktip">请选择座位</span>
                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">品牌</td>
                    <td colspan="3">
                        <select name="brand" datatype="*">
                            <option value="" selected="selected">请选择品牌</option>
                            <?php if(is_array($brand)): foreach($brand as $key=>$vo): ?><option value="<?php echo ($vo["brand_id"]); ?>"><?php echo ($vo["brand_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                        <font class="need show_0"></font><span class="Validform_checktip">请选择品牌</span>
                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">车型</td>
                    <td colspan="3">
                        <select name="carkind" datatype="*">
                            <option value="" selected="selected">请选择车型</option>
                            <?php if(is_array($carkind)): foreach($carkind as $key=>$vo): ?><option value="<?php echo ($vo["carkind_id"]); ?>"><?php echo ($vo["carkind_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                        <font class="need show_0"></font><span class="Validform_checktip">请选择车型</span>
                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">挂挡类型</td>
                    <td colspan="3">
                        <select name="gear" datatype="*">
                            <option value="" selected="selected">请选择挂挡类型</option>
                            <?php if(is_array($gear)): foreach($gear as $key=>$vo): ?><option value="<?php echo ($vo["gear_id"]); ?>"><?php echo ($vo["gear_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                        <font class="need show_0"></font><span class="Validform_checktip">请选择挂挡类型</span>
                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">天窗类型</td>
                    <td colspan="3">
                        <select name="window" datatype="*">
                            <option value="" selected="selected">请选择天窗类型</option>
                            <?php if(is_array($window)): foreach($window as $key=>$vo): ?><option value="<?php echo ($vo["window_id"]); ?>"><?php echo ($vo["window_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                        <font class="need show_0"></font><span class="Validform_checktip">请选择天窗类型</span>
                    </td>
                </tr>

                <tr id="" class="">
                    <td class="ft_title">公里数</td>
                    <td colspan="3">
                        <input value="<?php echo ($model["intro"]["mileage"]); ?>" name="mileage" maxlength="50" class="bds inp  w500"
                               nullmsg="请填写公里数" placeholder="请填写公里数" type="text">
                        <font class="need show_0"></font><span class="Validform_checktip">请填写公里数</span>
                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">生产日期</td>
                    <td colspan="3">
                        <input value="<?php echo ($model["intro"]["production"]); ?>" name="production" maxlength="50" class="bds inp  w500"
                               nullmsg="请填写生产日期" placeholder="请填写生产日期" type="text">
                        <font class="need show_0"></font><span class="Validform_checktip">请填写座位</span>
                    </td>
                </tr>

                <tr id="" class="">
                    <td class="ft_title">座位配置</td>
                    <td colspan="3">
                        <input value="<?php echo ($model["intro"]["seat_kind"]); ?>" name="seat_kind" maxlength="50" class="bds inp  w500"
                               nullmsg="请填写座位配置" placeholder="请填写座位配置" type="text">
                        <font class="need show_0"></font><span class="Validform_checktip">请填写座位配置</span>
                    </td>
                </tr>

                <tr id="" class="">
                    <td class="ft_title">自动应答</td>
                    <td colspan="3">
                        <select name="self">
                            <?php if(($model['intro']['self']) == "1"): ?><option value="1" selected="selected">有</option>
                                <option value="0">无</option>
                                <?php else: ?>
                                <option value="0" selected="selected">无</option>
                                <option value="1">有</option><?php endif; ?>
                        </select>
                        <font class="need show_0"></font><span class="Validform_checktip">请选择有无</span>
                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">封面</td>
                    <td colspan="3">
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
                        <div class="file_holder ">
                            <div class="upimg_out">
                                <img src=" " class="upimg"/>
                                <input type="text" id="image1" value="" name="pic" class="upimg_btn"/>
                            </div>
                        </div>

                    </td>
                </tr>
                <tr id="" class="">
                    <td class="ft_title">是否有效</td>
                    <td colspan="3">
                        <label><input type="radio" name="valid" value="1"
                            <?php if(((isset($model['valid']) && ($model['valid'] !== ""))?($model['valid']):1) == "1"): ?>checked<?php endif; ?>
                            />是</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="valid" value="0" datatype="*"
                            <?php if(($model['valid']) == "0"): ?>checked<?php endif; ?>
                            />否</label>
                        <font class="need show_0">*</font><span class="Validform_checktip">请选择是否有效</span>
                    </td>
                </tr>
                <tr>
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


    });
</script>

</body>
</html>