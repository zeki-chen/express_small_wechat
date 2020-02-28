//app.js
App({
  globalData:{
    openid:'openid'
  },
  onLaunch: function () {
    
    wx.login({
      success: res => {
        if (res.code) {
          wx.request({
            method: 'POST',
            url: 'https://ssl.ycxxkj.com/gzs_express/sudiproject/tp5/public/index.php/index/Login/index',
            data: {
              code: res.code
            },
            success: res => {
              if(res!==null)
                 var to=wx.setStorageSync('token', res);
                 
                this.globalData.token = res;
                
                this.globalData.tokenCallback && this.globalData.tokenCallback({
                });
            }
          });
        }// 发送 res.code 到后台换取 openId, sessionKey, unionId
      }
    });
},
  onPullDownRefresh: function () {
    wx.showNavigationBarLoading() //在标题栏中显示加载

    //模拟加载
    setTimeout(function () {
      // complete
      wx.hideNavigationBarLoading() //完成停止加载
      wx.stopPullDownRefresh() //停止下拉刷新
    }, 1000);
  }

});