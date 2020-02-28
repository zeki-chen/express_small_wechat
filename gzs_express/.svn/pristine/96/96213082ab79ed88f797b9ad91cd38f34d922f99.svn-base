<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="Keywords" content="VRent" />
<title>租车</title>


<link href="/czq/Vrent/Public/Index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/czq/Vrent/Public/Index/css/individual.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="content_div shoucang_div">
	<form  action="#" method="get" class="eval_div">
	<img src="/czq/Vrent/Public/Index/images/bottom_1.png" class="car_img2">
	<div class="word_div"><span class="car_name">别克凯越</span><span class="exp1">本次租车体验如何？评价可随机赢取最多100积分</span><span class="my_eval">我的总体评价：</span>
			
            <label class="select_label satisf_label" for="bad">
            <input class="select_radio" type="radio" name="satisfied" id="bad" value="bad">
            <span class="select_radioInput select_radioInput1">差</span>
            </label>
            <label class="select_label satisf_label" for="normal">
            <input class="select_radio" type="radio" name="satisfied" id="normal" value="normal">
            <span class="select_radioInput select_radioInput1">一般</span>
            </label>
            <label class="select_label satisf_label" for="ok">
            <input class="select_radio" type="radio" name="satisfied" id="ok" value="ok">
            <span class="select_radioInput select_radioInput1">满意</span>
            </label>
            <label class="select_label satisf_label" for="v_ok">
            <input class="select_radio" type="radio" name="satisfied" id="v_ok" value="v_ok">
            <span class="select_radioInput select_radioInput1">很满意</span>
            </label>
            <label class="select_label satisf_label" for="good">
            <input class="select_radio" type="radio" name="satisfied" id="good" value="good" checked>
            <span class="select_radioInput select_radioInput1">强烈推荐</span>
            </label>
        <span class="please_choose">请选择评价</span>	
        <div class="baobei_div">
        	<span>宝贝与描述相符：</span><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing(this)"><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing(this)"><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing(this)"><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing(this)"><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing(this)"><span>很满意</span>
        </div>
        <div class="baobei_div2">
        	<span>车主的服务态度：</span><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing2(this)"><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing2(this)"><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing2(this)"><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing2(this)"><img src="/czq/Vrent/Public/Index/images/images/xing_one.png" class="xing_one" onclick="xing2(this)"><span>很满意</span>
        </div>
        <span class="exp1">此宝贝车主描述如何？车主服务态度如何？车内环境如何？</span>
        <div class="descibe_big_div">
        	<div class="descibe_div">
        		<label for="up_picture" class="up_pic">晒 图</label><span>最多传20张</span>
        		<div class="no_name_div"><input id="item1" type="checkbox" name="item" value="匿名评价" checked>
		        <label for="item1" class="item_noname"></label>
		        <span>匿名评价</span></div>
        		<div id="upload-container" class="col-xs-12 text-center">
		            <input accept="image/*" id="up_picture" type="file"/>
		        </div>
        	</div>
        		
        		<textarea class="textarea1">
				</textarea>

		</div>
				<span class="exp2">*请上传原创、真实、合法的图片，如果发现用户上传的图片有侵权内容，VR有权先行删除</span>
        	
        <button type="submit" class="submit_btn submit_btn1">发表评论</button>
    </div>
    
    </form>

</div>

<script type="text/javascript" src="/czq/Vrent/Public/Index/js/jquery.1.9.1.min.js"></script>
<script type="text/javascript" src="/czq/Vrent/Public/Index/js/bootstrap.js"></script>
<script src="/czq/Vrent/Public/Index/js/jsRem.js"></script>

<script type="text/javascript">
	$(document).ready(function(){ 	
		$('.select_radioInput1').click(function(){ 
			console.log($(this).index());
		});
	});
		var a=0;
		var adres0="/czq/Vrent/Public/Index/images/images/xing_one.png";
    	var adres1="/czq/Vrent/Public/Index/images/images/xing_one2.png";
		function xing(obj){
			var num=$(obj).index();
			if(a==0){
				if(num==1){
					$('.baobei_div').find('.xing_one:lt(1)').prop("src",adres1);
				}else if(num==2){
					$('.baobei_div').find('.xing_one:lt(2)').prop("src",adres1);
				}else if(num==3){
					$('.baobei_div').find('.xing_one:lt(3)').prop("src",adres1);
				}else if(num==4){
					$('.baobei_div').find('.xing_one:lt(4)').prop("src",adres1);
				}else{
					$('.baobei_div').find('.xing_one:lt(5)').prop("src",adres1);
				}
				a=1;
			}else{
				if(num==1){
					$('.baobei_div').find('.xing_one:gt(0)').prop("src",adres0);
				}else if(num==2){
					$('.baobei_div').find('.xing_one:gt(1)').prop("src",adres0);
				}else if(num==3){
					$('.baobei_div').find('.xing_one:gt(2)').prop("src",adres0);
				}else if(num==4){
					$('.baobei_div').find('.xing_one:gt(3)').prop("src",adres0);
				}
				a=0;
			}
		};
		function xing2(obj){
			var num=$(obj).index();
			if(a==0){
				if(num==1){
					$('.baobei_div2').find('.xing_one:lt(1)').prop("src",adres1);
				}else if(num==2){
					$('.baobei_div2').find('.xing_one:lt(2)').prop("src",adres1);
				}else if(num==3){
					$('.baobei_div2').find('.xing_one:lt(3)').prop("src",adres1);
				}else if(num==4){
					$('.baobei_div2').find('.xing_one:lt(4)').prop("src",adres1);
				}else{
					$('.baobei_div2').find('.xing_one:lt(5)').prop("src",adres1);
				}
				a=1;
			}else{
				if(num==1){
					$('.baobei_div2').find('.xing_one:gt(0)').prop("src",adres0);
				}else if(num==2){
					$('.baobei_div2').find('.xing_one:gt(1)').prop("src",adres0);
				}else if(num==3){
					$('.baobei_div2').find('.xing_one:gt(2)').prop("src",adres0);
				}else if(num==4){
					$('.baobei_div2').find('.xing_one:gt(3)').prop("src",adres0);
				}
				a=0;
			}
		};
</script>
<script src="/czq/Vrent/Public/Index/js/dist/lrz.bundle.js?v=7687367"></script>
<script src="/czq/Vrent/Public/Index/js/index2.js?v=27ce5f7"></script>
</body>
</html>