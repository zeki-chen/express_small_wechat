$(function(){
	setRem_jq();
    $(window).resize(function(){
        setRem_jq();
    });
});

$(window).load(function(){
    $('body').show();
})

// jq写法
function setRem_jq(){
    var screenWidth = $(window).width();
    var fontsize = screenWidth/320*100;
    $('html').css('font-size',fontsize + "px");
}

// js写法
function setRem_js(){
    var docEl = document.documentElement;
    var fontsize = 100 * (docEl.clientWidth / 320) + 'px';
    docEl.style.fontSize = fontsize;
    docEl.style.height="100%";
}