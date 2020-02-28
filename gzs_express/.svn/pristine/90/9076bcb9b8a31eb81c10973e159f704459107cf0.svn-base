<?php

namespace Index\Controller;

use Think\Controller;

class DetailController extends IndexBaseController
{
    public function detail()
    {
        $where['car_id']=I('get.car_id');
        $model=D('CarView')->where($where)->find();
        if(!$model)
        {
            $this->error();
        }
        $spitslot=D('SpitslotView')->where($where)->select();
        $count=D('SpitslotView')->where($where)->count();
        $carpic=M('carpic')->where($where)->find();

        $model['intro']=unserialize($model['intro']);
        $this->assign('model',$model);
        $this->assign('list',$spitslot);
        $this->assign('count',$count);
        $this->assign('carpic',$carpic);

        //相似车辆
        $List2 = M('car')->limit(0, 3)->select();
        for ($k = 0; $k < 3; $k++) {
            $List2[$k]['intro'] = unserialize($List2[$k]['intro']);
            $List2[$k]['car_number'] = substr($List2[$k]['car_number'], 0, 5) . "***" . substr($List2[$k]['car_number'], 8, 2);
        }
        $this->assign('list2', $List2);

        $this->display();
    }

    public function addorder(){
        $data=$_POST;
        $data['addtime']=time();
        $data['updatetime']=time();
        $data['vaild']=1;
        $res=M('orders')->data($data)->add();
        if ($res) {
            $this->success('下单成功',U('Individual/individual'));
        } else {
            $this->error('下单失败');
        }
    }
}