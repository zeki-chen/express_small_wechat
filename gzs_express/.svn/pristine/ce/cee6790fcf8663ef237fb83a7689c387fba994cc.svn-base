<?php

namespace Index\Controller;

use Think\Controller;

class IndividualController extends IndexBaseController
{
    public function individual()
    {
        if (session('?user')) {
            $user = session('user');
            $this->assign('user', $user);
        }
        $this->display();
    }

    public function change_pw()
    {
        if (session('?user')) {
            $user = session('user');
            $this->assign('user', $user);
        }
        $this->display();

    }

    public function person_data()
    {
        if (session('?user')) {
            $user = session('user');
            $this->assign('user', $user);
        }
        $this->display();

    }

    public function doedit()
    {
        $data = $_POST;
        $where['user_id'] = $data['user_id'];
        $data['updatatime'] = time();
        $res = M('user')->where($where)->data($data)->save();
        if ($res) {
            $model = M('user')->where($where)->find();
            session("user", $model, 3600 * 2);
            $this->success('修改成功', U('Individual/individual'));
        } else {
            $this->error('修改失败');
        }
    }

    public function dopwd()
    {
        $data = $_POST;
        $where['user_id'] = $data['user_id'];
        $data['updatatime'] = time();
        $res = M('user')->where($where)->data($data)->save();
        if ($res) {
            $model = M('user')->where($where)->find();
            $timelong = 3600 * 24 * 30;//保存时间长度
            cookie("tel", $model['tel'], $timelong);
            cookie("user_pwd", $model['pwd'], $timelong);
            $this->success('修改成功', U('Individual/individual'));
        } else {
            $this->error('修改失败');
        }
    }

    public function pic()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'pdf');// 设置附件上传类型
        $upload->rootPath = './Uploads/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        //var_dump($info);
        //print_r($info);
        if (!$info) {// 上传错误提示错误信息
//            $this->error($upload->getError());
        } else {// 上传成功
            foreach ($info as $file) {
                $bigimg = dirname($_SERVER['SCRIPT_NAME']) . '/Uploads/' . $file['savepath'] . $file['savename'];
            }
            $pic = array('"error" ' => '0', 'url' => $bigimg);
//                $this->ajaxReturn($pic);
            echo json_encode(array('error' => 0, 'url' => $bigimg));
        }
    }


    public function doAdd()
    {
        $data = $_POST;
        $intro = array('mileage' => $data['mileage'], 'production' => $data['production'],
            'seat_kind' => $data['seat_kind'],
             'self' => $data['self'], 'describe' => $data['describe']);
        $data['intro'] = serialize($intro);
        $data['updatetime'] = time();
        $data['addtime'] = time();
        $data['type'] = 1;
        $data['valid'] = 1;
        $data['carkind_id'] = $data['carkind'];
        $data['seat_id'] = $data['seat'];
        $data['brand_id'] = $data['brand'];
        $data['gear_id'] = $data['gear'];
        $data['window_id'] = $data['window'];
        $model = M('car')->data($data)->add();
        $map2['car_id'] = $model['car_id'];
        $carpic = M('carpic')->data($map2)->add();
        if ($model&& $carpic) {
            $this->success('上传成功', U('Individual/individual'));
        } else {
            $this->error('上传失败');
        }

    }

    public function upload()
    {
        if (session('?user')) {
            $user = session('user');
            $this->assign('user', $user);
        }
        $seat = M('seat')->select();
        $carkind = M('carkind')->select();
        $brand = M('brand')->select();
        $gear = M('gear')->select();
        $window = M('window')->select();
        $this->assign('seat', $seat);
        $this->assign('gear', $gear);
        $this->assign('carkind', $carkind);
        $this->assign('brand', $brand);
        $this->assign('window', $window);
        $this->display();

    }

}