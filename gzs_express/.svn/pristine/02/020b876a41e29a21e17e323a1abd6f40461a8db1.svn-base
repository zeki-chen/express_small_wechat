$(function(){
    var sort = $('#break-sort'), 
    site = $('#break-site'),
    cc = $('#ci');
    
    for(var i=0;i<sortList.length;i++){
        addEle(sort,sortList[i].sort);
    }
    function addEle(ele,value){
        var sortItem = "";
        sortItem = "<option value='"+value+"'>"+value+"</option>";
        ele.append(sortItem);
    }
    function removeEle(ele){
        ele.find('option').remove();
        var optionStart = "<option value="+"请选择"+">"+"请选择"+"</option>";
        ele.append(optionStart);
    }
    var sortText,siteItem,siteItem2;
    sort.on('change',function(i,item){
        sortText = $(this).val();
        $.each(sortList,function(i,item){
            if(sortText == item.sort){
                siteItem = i;
                return siteItem;
            }

        });
        removeEle(site);
        $.each(sortList[siteItem].siteList,function(i,item){
            addEle(site,item);
        });

    });


    site.on('change',function(i,item){
        sortText = $(this).val();
        console.log(sortText);
        console.log(sortList[siteItem].siteList);
        $.each(sortList[siteItem].siteList,function(i,item){
            console.log(item);
            if(sortText == item){
                siteItem2 = i;
                return siteItem2;
            }

        });
        console.log(siteItem2);
        removeEle(cc);
        $.each(sortList[siteItem].city[siteItem2].qu,function(i,item){
            addEle(cc,item);
        });

    });



});