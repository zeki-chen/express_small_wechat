<?php

namespace Index\Controller;

use Think\Controller;

class IndexBaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if (session('?user')) {
            $user = session('user');
            $this->assign('user', $user);
        } else {
            //未登录，查找cookie记录
            $where['tel'] = I('cookie.tel');
            $where['pwd'] = I('cookie.pwd');
            //$where['valid']=1;
            $model = M('user')->where($where)->find();
            if (!$model) {

            } else {
                session('user', $user);
            }
        }

    }


}