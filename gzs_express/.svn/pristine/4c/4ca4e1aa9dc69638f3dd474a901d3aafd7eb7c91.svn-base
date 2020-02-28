<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $where['code'] = 'web';
        $conf = M('config')->where($where)->find();
        if ($conf) {
            $conf = unserialize($conf['content']);
            $this->assign('sysInfo', $conf);
        }
        $this->display();
    }

    
     /**
     * 验证码生成
     */
    // public function verify(){
    //     $Verify = new \Think\Verify();
    //     $Verify->fontSize = 16;
    //     $Verify->length   = 4;
    //     $Verify->useNoise = false;
    //     $Verify->useCurve = false;
    //     $Verify->useNoise = false;
    //     $Verify->codeSet = '0123456789';
    //     $Verify->imageW = 114;
    //     $Verify->imageH = 46;
    //     $Verify->entry();
    // }
    /**
     * 验证码检查
     */
    // public function check_verify($code, $id = ""){
    //     $verify = new \Think\Verify();
    //     return $verify->check($code, $id);
    // }


    public function doLogin()
    {
        // $verify = I('post.verify');
        // if(!$this->check_verify($verify)){
        //     $this->error("亲，验证码输错了哦！");
        // }
        $aname = I('post.aname');
        $passwd = md5(I('post.passwd'));
        $where['aname'] = $aname;
        $where['pwd'] = $passwd;
        $where['valid'] = 1;

        $model = M('admin')->where($where)->find();
        if ($model) {
            $timelong = 3600 * 24 * 30;//保存时间长度
            cookie("aname", $aname, $timelong);
            cookie("pwd", $passwd, $timelong);
            session("admin", $model, 3600 * 2);
            $this->success("登录成功", U("Main/index"));
        } else {
            $this->error("登录失败：用户名或密码不正确！");
        }
    }

    public function quit()
    {
        session(null);
        cookie("aname", null);
        cookie("pwd", null);
        $this->redirect("Index/index", 3);
    }
}
