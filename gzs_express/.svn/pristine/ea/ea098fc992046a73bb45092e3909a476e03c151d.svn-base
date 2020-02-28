<?php

namespace Index\Controller;

use Think\Controller;

class IndexController extends IndexBaseController
{
    public function __construct(){
         parent::__construct();
        //控制登陆状态
    }

    public function index()
    {
        //轮播图
        $List1 = M('car')->limit(0, 8)->select();
        $this->assign('list1', $List1);

        //今日特价
        $List2 = D('CarView')->limit(0, 3)->select();
        for ($k = 0; $k < 3; $k++) {
            $List2[$k]['intro'] = unserialize($List2[$k]['intro']);
            $List2[$k]['car_number'] = substr($List2[$k]['car_number'], 0, 5) . "***" . substr($List2[$k]['car_number'], 8, 2);
        }
        $this->assign('list2', $List2);
        $this->display();
    }

    public function login()
    {
        //用户登录
        $tel = I('post.tel');
        $pwd = I('post.pwd');
        $where['tel'] = $tel;
        $where['pwd'] = $pwd;
        $userM=M('user');
        $model =  $userM->where($where)->find();
        if (!$model) {
            $this->error("密码错误");
        } else {
            $timelong = 3600 * 24 * 30;//保存时间长度
            cookie("tel", $tel, $timelong);
            cookie("user_pwd", $pwd, $timelong);
            session("user", $model, 3600 * 2);
            $this->success("登录成功", U("index/index"));
        }
    }

    public function register()
    {
        $tel = I('post.tel');
        $pwd = I('post.pwd');
        $data['tel'] = $tel;
        $data['pwd'] = $pwd;
        $data['user_name'] =I('post.tel');
        $data['addtime']=time();
        $data['updatetime']=time();
        $model = M('user')->data($data)->add();
        if (!$model) {
            $this->error("注册错误");
        } else {
            $this->success("注册成功，返回登录", U("index/index"));
        }
    }

    public function quit()
    {
        session(null);
        cookie("tel", null);
        cookie("pwd", null);
        $this->redirect("Index/index", 3);
    }
}