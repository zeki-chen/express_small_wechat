$(document).ready(function($) {

	$('.owl-carousel').owlCarousel({
		autoplayHoverPause:true,		
		nav:true,
		loop:true,
		slideSpeed:100,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		dots:false,
		navText:['<img src="./images/left.png">','<img src="./images/right.png">'],
		responsive:{	
			480:{
				items:2
			},
			678:{
				items:3
			},
			960:{
				items:5
			}
		}
	});

	$(".c_img").hover(
  function () {
    $(this).addClass("c_img_hover");
    var span_o=$(this).siblings(".span_o");
    var span_t=$(this).siblings(".span_t");
    span_o.replaceWith("<hr class='hr'/>");
    //span_o.fadeOut();
    //span_t.fadeIn();
    //setTimeout(function(){span_t.css({"border-top":"1px solid orange","padding-top":"25px","margin-top":"20px"}); }, 1000);
  },
  function () {
    $(this).removeClass("c_img_hover");
    //var span_o=$(this).siblings(".span_o");
    var span_t=$(this).siblings(".span_t");
    var hr=$(this).siblings("hr");
    //hr.fadeOut();
    hr.replaceWith('<span class="span_o">255W最高保额，保障您的权益</span>');
    //hr.replaceWith('??');
    //alert("??");
    /*span_o.fadeIn();
    span_t.css({"border-top":"none","padding-top":"0","margin-top":"0"});*/
  }
);
	/*setTimeout(function(){ $('.content_div h1').fadeIn(); }, 2000);
	setTimeout(function(){ $('.content_div h1').css("top","30%"); }, 3000);*/

});