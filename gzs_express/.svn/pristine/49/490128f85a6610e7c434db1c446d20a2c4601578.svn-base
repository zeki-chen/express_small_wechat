function msgOK(msg){
    layer.msg(msg,{
        icon:1,
        shade:[0.5,'#000'],
        shadeClose:true
    });
}

function msgFaild(msg){
    layer.msg(msg,{
        icon:2,
        shade:[0.5,'#000'],
        shadeClose:true
    });
}

function loading(msg){
    layer.msg(msg,{
        icon:16,
        time:0,
        shade:[0.5,'#000']
    });
}

function hrefTo(url,time){
    if(time==0){
        window.location.href=url;
    }else{
        setTimeout("hrefTo('"+url+"',0)",time);
    }
}

//多行删除
function delMut(url) {
    var chkList = $(".del_checkbox");
    var aids = "";
    var dot = "";
    for (var i = 0; i < chkList.length; i++) {
        if($(chkList[i]).prop('checked')){
            aids += dot + $(chkList[i]).val();
            dot = ",";
        }
    }
    if (aids == "") {
        msgFaild("请先选择要删除的记录");
        return false;
    }
    //询问框
    layer.confirm('删除后不可恢复，确定要删除这些记录吗？', {
        btn: ['确定', '取消'] //按钮
    }, function() {
        loading("正在删除...");
        var query = new Object();
        query.ids = aids;
        $.post(url, query, function(data) {
            if (data.status == 1) {
                //alert(data.info);
                msgOK(data.info);
            } else {
                msgFaild(data.info);
            }if (data.url) {
                //loading("正在提交");
                loading(data.info + ",跳转中...");
                hrefTo(data.url, 500)
            }
        }, "json");
    }, function() {
        //取消时操作
    });
}

$(function() {
    $(".delBtn").on('click',function() {
        var url = $(this).attr("href");
        $(this).removeAttr("href");
        //询问框
        layer.confirm('删除后不可恢复，确定要删除 '+$(this).attr('del_title')+' 吗？', {
            btn: ['确定', '取消'] //按钮
        }, function() {
            loading("正在删除...");
            $.get(url, function(data) {
                if (data.status == 1) {
                    msgOK(data.info);
                } else {
                    msgFaild(data.info);
                }
                if (data.url) {
                    //loading("正在提交");
                    loading(data.info + ",跳转中...");
                    hrefTo(data.url, 500)
                }
            }, "json");
        }, function() {
            //取消时操作
        });
        $(this).attr("href", url);
        return false;
    });
    $('.selectAll').change(function(){
        $('.del_checkbox').prop("checked",this.checked);
    });
});


