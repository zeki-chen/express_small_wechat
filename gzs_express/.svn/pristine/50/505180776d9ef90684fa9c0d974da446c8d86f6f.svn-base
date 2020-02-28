
var map = new BMap.Map("allmap");
function myFun(result) {
    var cityName = result.name;
    map.setCenter(cityName);
    // $('.location_img').text(cityName);
    $('.map').text(cityName);
    alert(cityName);//这个cityName就已经拿到定位城市结果
    sessionStorage['cityName'] = cityName;
}
var myCity = new BMap.LocalCity();
myCity.get(myFun);
