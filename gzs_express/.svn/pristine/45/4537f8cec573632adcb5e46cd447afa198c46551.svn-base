<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="Keywords" content="VRent" />
<title>易租车,易生活</title>
    <script type="text/javascript" src="/czq/Vrent/Public/Index/js/jquery-1.9.1.min.js"></script>
<link href="/czq/Vrent/Public/Validform_v5.3.2/css/validform.css" rel="stylesheet" />
<script type="text/javascript" src="/czq/Vrent/Public/layer/layer/layer.js"></script>
<script src="/czq/Vrent/Public/Admin/js/common.js"></script>
<script src="/czq/Vrent/Public/Index/js/jquery.lazyload.js?v=3" type="text/javascript" charset="utf-8"></script>
<script src="/czq/Vrent/Public/Validform_v5.3.2/js/Validform_v5.3.2_min.js"></script>
<script charset="utf-8" src="/czq/Vrent/Public/kindeditor-master/kindeditor-all-min.js"></script>
<script charset="utf-8" src="/czq/Vrent/Public/kindeditor-master/lang/zh-CN.js"></script>
<script charset="utf-8" src="/czq/Vrent/Public/kindeditor-master/plugins/code/prettify.js"></script>
<link rel="stylesheet" href="/czq/Vrent/Public/kindeditor-master/themes/default/default.css"/>
<link href="/czq/Vrent/Public/Index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/czq/Vrent/Public/Index/css/individual.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Yx2uFuiENsRjK7iWpCcedohRdMH0VZhy"></script>
<div id="fade" class="black_overlay"></div>
<div class="register_div">
    <a href="#" onclick="close_RegisterHtml()" class="close_login_reg"><img src="/czq/Vrent/Public/Index/images/close.jpg" alt="cha" class="close_lr_img"></a>
    <input action="<?php echo U('Index/register');?>" method="post" class="mainform reg_content_div">
        <input type="hidden" name="user_id" value="<?php echo ($user["user_id"]); ?>">
        <h2 class="reg_title">注册</h2>
        <input type="text" name="tel" class="reg_ipt phone_ipt" placeholder="手机号" autocomplete='tel'>
        <span class="explain">手机号可用于登录、找回密码、接收订单通知等服务</span>
        <input type="password" name="pwd" placeholder="登录密码" class="reg_ipt password_ipt" autocomplete='pw'>
        <label class="demo--label"><input class="demo--radio"  type="checkbox" name="demo-checkbox1">
        <span class="demo--checkbox demo--radioInput"></span><span class="show_p">显示密码</span>
        </label>

        <span class="explain">密码为6-20个字符，可由英文、数字及符号组成</span>
        <input type="password" name="pwd" placeholder="确认密码" class="reg_ipt con_password_ipt" onBlur=confirmByRegister(this)  autocomplete='con_pw'>
        <label class="demo--label"><input class="demo--radio" type="checkbox" name="demo-checkbox1">
        <span class="demo--checkbox demo--radioInput"></span><span class="show_p">显示密码</span>
        </label>
        <span class="explain explain1">请再次输入密码</span>
        <input type="text" name="" placeholder="手机验证码" class="reg_ipt">
        <button class="phone_check_btn">发送验证码</button>
        <div class="read_div"><label class="demo--label"><input class="demo--radio" type="checkbox" name="demo-checkbox1">
        <span class="demo--checkbox demo--radioInput"></span><span class="show_p">我已阅读并同意</span><a href="#" class="denglu">《VRent用户服务协议》</a>
        </label></div>
        <button type="submit" class="reg_btn">提交注册</button>
        <span>已经注册？</span><a href="javascript:void(0)" onclick="show_loginHtml()" class="denglu">请登录</a>

    </form>
</div>


<div class="login_div">
    <a href="javascript:void(0)" onclick="close_loginHtml()" class="close_login_reg"><img src="/czq/Vrent/Public/Index/images/close.png" alt="cha" class="close_lr_img"></a>
    <form action="<?php echo U('Index/login');?>" method="post" class="mainform login_content_div" >
        <h2 class="reg_title">登录</h2>
        <input type="text" name="tel" class="reg_ipt phone_ipt" placeholder="手机号码" autocomplete='tel'>

        <input type="password" name="pwd" placeholder="密码登录" class="reg_ipt password_ipt"  autocomplete='pw'>
        
        <div class="login_n">
        <label class="demo--label" for="auto_log"><input class="demo--radio" id="auto_log" type="checkbox" name="demo-checkbox1">
        <span class="demo--checkbox demo--radioInput auto_login"></span><span class="show_p">下次自动登录</span>

        </label>
        <a href="#" class="denglu forget_pw">忘记密码</a>
        </div>
        <button type="submit" class="reg_btn">会员登录</button>
        <span class="login_expalin">还没有账号?</span><a href="javascript:void(0)" onclick="show_RegisterHtml()" class="denglu login_expalin">现在注册</a>

    </form>
</div>


<div class="head_div">
<nav class="navbar navbar-default" role="navigation"> 
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="sr-only">展开导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#"><img src="/czq/Vrent/Public/Index/images/VR.png" class="VR_img"></a>
    </div>
    <div class="collapse navbar-collapse navv" id="menu">

        <ul class="nav navbar-nav">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li><a href="<?php echo U('Search/search');?>">租车</a></li>
            <li><a href="<?php echo U('Index/index');?>#about_div">关于我们</a></li>
            <li class="active"><?php if(($user['tel']) == ""): ?><a href="javascript:void(0)" onclick="show_loginHtml()">登录 / 注册</a>
                <?php else: ?>
                <a href="<?php echo U('Individual/individual');?>" ><?php echo ($user["user_name"]); ?></a>
            <li><a href="<?php echo U('Index/quit');?>" target="_parent">退出</a></li><?php endif; ?></li>
            <li><a href="#"><img src="/czq/Vrent/Public/Index/images/location.png" class="location_img"><span class="location_a"></span></a></li>
        </ul>
        
    </div>

</nav>
</div>


<div class="content_big_div">
    <div class="location_div">
        <span class="location_span">您所在的位置：首页 > 个人中心</span>
    </div>
    <div class="container-fluid nav_big_div">
    <div class="navbar-header head_detail_div">
        <div class="head_img_div"><img src="<?php echo ($user["headimgurl"]); ?>" class="head_img"><img src="/czq/Vrent/Public/Index/images/shezhi.png" class="shezhi_img"></div><span class="person_name"><?php echo ($user["user_name"]); ?></span><span class="score">信誉分 &nbsp;&nbsp;100分</span>
    </div>
    
    <div class="nav_div">
        <ul class="nav nav-pills nav-stacked nav2">
        <li class="disabled nav_title">账户中心</li>
        <li class="active first_li"><a href="javascript:void(0)" class="person_d">个人资料</a></li>
        <li><a href="javascript:void(0)" class="change_pw">修改密码</a></li>
        <li><a href="javascript:void(0)" class="shoucang">我的收藏</a></li>
        <li><a href="javascript:void(0)" class="upload">上传车辆</a></li>
        <li class="disabled nav_title">评价管理</li>
        <li><a href="javascript:void(0)" class="evaluted">待评价</a></li>
        <li><a href="javascript:void(0)" class="evalute">已评价</a></li>
        </ul>
    </div>
    </div>
    

    <div class="con_div">
        
    </div>
</div>





<script type="text/javascript" src="/czq/Vrent/Public/Index/js/bootstrap.js"></script>
<script src="/czq/Vrent/Public/Index/js/jsRem.js"></script>
<script src="/czq/Vrent/Public/Index/laydate/laydate.js"></script>

<script>
        $(document).ready(function(){
            cityName=sessionStorage['cityName'];
            $('.location_a').text(cityName);
            var show_password=0;
            $('.demo--label').click(function(){
                //var this
                console.log("??");
                if(show_password==0){
                    console.log("show");
                     $(this).children("input:first-child").prop("checked",true);
                    $(this).prev().attr('type','text');
                    show_password=1;
                    return false;

                }else{
                    console.log(" no show");
                    $(this).children("input:first-child").prop("checked",false);
                    $(this).prev().attr('type','password');
                    show_password=0;
                    return false;
                }
                
            });
            $('.con_div').load('person_data.html');
             $(".person_d").click(function(){
                $('.con_div').load('person_data.html');
            });
            $(".change_pw").click(function(){
                $('.con_div').load('change_pw.html');
                $('.first_li').removeClass("active");
            });
            $(".shoucang").click(function(){
                $('.con_div').load('shoucang.html');
                $('.first_li').removeClass("active");
            });
            $(".evalute").click(function(){
                $('.con_div').load('evalute.html');
                $('.first_li').removeClass("active");
            });
            $(".evaluted").click(function(){
                $('.con_div').load('evaluted.html');
                $('.first_li').removeClass("active");
            });
            $(".upload").click(function(){
                $('.con_div').load('upload.html');
                $('.first_li').removeClass("active");
            });
            
            
            

        })

        function confirmByRegister(obj){
        var pass=$('.password_ipt').val();
        var con_pass=$(obj).val();
        console.log(pass);
        console.log(con_pass);
        if(pass!=con_pass){
            //$.trim(pass) != $.trim(con_pass)
            console.log("no same");
            $('.explain1').text("两次密码不一致，请重新输入密码");
            $('.explain1').css("color","red");
            $('.con_password_ipt').val("");
            return false;
        }else{
            $('.explain1').text("");
            $('.explain1').css("color","#3d3d3d");
        }

    }

    function show_loginHtml(){
        $('.black_overlay').fadeIn();
        $('.register_div').fadeOut();
        $('.login_div').fadeIn();
    }

    function show_RegisterHtml(){
        $('.black_overlay').fadeIn();
        $('.register_div').fadeIn();
        $('.login_div').fadeOut();
    }
    function close_loginHtml(){
        $('.black_overlay').fadeOut();
        $('.login_div').fadeOut();
    }
    function close_RegisterHtml(){
        $('.black_overlay').fadeOut();
        $('.register_div').fadeOut();
    }
    </script>


</body>
</html>