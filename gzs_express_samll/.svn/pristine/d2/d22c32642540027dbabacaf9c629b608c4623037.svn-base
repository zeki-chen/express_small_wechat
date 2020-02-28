//index.js
//获取应用实例
const app = getApp();
let page;
var token = app.globalData.token;

Page({
  data: {
    ticket_id: '',
    id_tips:'none',
    TracesArr: [],
    arr: "",
    state: '',
    loadingHidden: true
  },

  /* 回车搜索触发事件 */
  enter: function(ticket_id) {
  
    if (typeof ticket_id == "object") {
      ticket_id = ticket_id.detail.value;
    }

    if (ticket_id == "") {
      page.setData({
        id_tips: 'block'
      });
      setTimeout(function () {
        page.setData({
          id_tips: 'none'
        });
      }, 2000);
      return false;
    }

    wx.navigateTo({
      url: '../tracking/index?detail=' + ticket_id,
    });


  },

  /* 扫码获取单号信息 */
  scan: function() {
    wx.scanCode({
      success: res => {
        page.setData({
          ticket_id: res.result
        });
        page.enter(res.result);
      },
      fail(res) {
        console.log(res);
      }
    })
  },


  historyRecord:function(token){
    wx.setStorageSync("token",token);
    wx.request({
      method: "POST",
      url: 'https://ssl.ycxxkj.com/gzs_express/sudiproject/tp5/public/index.php/index/index/history',
      data: {
        token: token
      },
      success: res => {
     
        var TracesArr = res.data
 
        for (let i = 0; i < TracesArr.length; i++) {

          let State = TracesArr[i].State

          if (State == 3) {
            TracesArr[i]['transportState'] = '已签收'
          } else if (State == 2) {
            TracesArr[i]['transportState'] = '运输中'
          } else if (State == 4) {
            TracesArr[i]['transportState'] = '问题件'
          } else {
            TracesArr[i]['transportState'] = '暂无信息'
          }

        }

        page.setData({
          TracesArr: TracesArr
        });

      },
      fail: res => {
        console.log("fail:"+res);
      }
    })

  },

  historyTrackTo: function(ticket_id) {

    page.loadingTap();

    var ticket_id = ticket_id.currentTarget.dataset.logisticcode;

    page.enter(ticket_id);

  },

  loadingTap: function () {
    page.setData({
      loadingHidden: false
    });
    setTimeout(function () {
      page.setData({
        loadingHidden: true
      });
    }, 1500);
  },

  isLoginLegal:function(token){

    var bool;
    wx.request({
      method: 'POST',
      url: 'https://ssl.ycxxkj.com/gzs_express/sudiproject/tp5/public/index.php/index/Index/valid',
      data: {
        token
      },
      success: res => {
        // console.log(res);
        if (res.data) {
          bool = res.data;
        } else {
          console.log('身份验证失败');
        }
      }
    })

    if (!bool) {
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
                if (res !== null)
                  app.globalData.token = res;
              }
            });
          } // 发送 res.code 到后台换取 openId, sessionKey, unionId
        }
      });
    }


  },


  /* 页面相关事件处理函数 -- 监听用户下拉动作 */
  onPullDownRefresh: function () {
    wx.showNavigationBarLoading();//在标题栏显示加载
    setTimeout(function () {
      page.historyRecord(token);
      wx.hideNavigationBarLoading();//完成停止加载
      wx.stopPullDownRefresh();//关闭下拉刷新动画
    }, 2000);

  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function(options) {
    
    if(options.detail){
     
      wx.navigateTo({
        url: '/pages/tracking/index?detail=' + ticket_id,
      })
    }

    page = this;
    if (token) {//如果已经赋值成功就直接用
      page.isLoginLegal(token);
      page.historyRecord(token);
      console.log(token);

    } else {//回调函数,获取到token后执行回调函数
      app.globalData.tokenCallback = function () {
        token = app.globalData.token;
        page.isLoginLegal(token); 
        page.historyRecord(token);
      }
    }
    page.loadingTap();

  },


  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function (ops) {
    console.log(ops);
    if (ops.from === 'button') {
      // 来自页面内转发按钮
      console.log(ops.target.dataset);
    }
    return {
      path: 'pages/index/index',
      success: function (res) {
        console.log(res);// 转发成功
      },
      fail: function (res) {
        console.log("失败");// 转发失败
      }
    };

  }

});