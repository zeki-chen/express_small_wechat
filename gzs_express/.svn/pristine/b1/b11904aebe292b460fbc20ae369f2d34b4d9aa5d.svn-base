<?php

namespace Index\Controller;

use Think\Controller;

class SearchController extends IndexBaseController
{
    public function search()
    {
        $orderBy = "addtime desc";
        $brand = I('get.brand');
        $this->assign('brand_key',$brand);
        $gear = I('get.gear');
          $this->assign('gear_key',$gear);
        $order=I('get.orderBy');
         if($order=='addtime'){
            $orderBy= "addtime asc";
        }
          $this->assign('order',$order);
        $window=I('get.window');
        $this->assign('window_key',$window);
        $carkind=I('get.carkind');
        $this->assign('carkind_key',$carkind);
        if($order=='price'){
            $orderBy= "price asc";
        }
        $param=array();
        if($brand){
            $map['brand_name'] = array('like', "%" . $brand . "%");
            $param['brand_name']=$brand;
            $param['carkind_name']=$carkind;
            $param['window_name']=$window;
            $param['order']=$order;
        }
        if($gear){
            $map['gear_name'] = array('like', "%" . $gear . "%");
            $param['gear_name']=$gear;
            $param['carkind_name']=$carkind;
            $param['window_name']=$window;
             $param['order']=$order;
        }
        if($window){
        $map['window_name'] = array('like', "%" . $window . "%");
        $param['gear_name']=$gear;
        $param['carkind_name']=$carkind;
        $param['brand_name']=$brand;
         $param['order']=$order;
    }
        if($carkind){
            $map['carkind_name'] = array('like', "%" . $carkind . "%");
            $param['gear_name']=$gear;
            $param['window_name']=$window;
            $param['brand_name']=$brand;
             $param['order']=$order;
        }
        $this->assign('param',$param);

        $list = D('CarView')->where($map)->order($orderBy)->select();
        foreach ($list as $k => $v) {
            $list[$k]['intro'] = unserialize($v['intro']);
        }
        $this->assign('list', $list);

        //key
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
        //echo $_SERVER['PHP_SELF'];
        $this->display();
    }

    

    public function getList($table, $where, $order, $pageparam)
    {
        $count = D($table)->where($where)->count();//统计符合条件的记录数量
        $pagesize = '10';//分页大小
        $page = new \Think\Page($count, $pagesize);
        $page->parameter = $pageparam;//分页条件
        $show = $page->show();
        $list = D($table)->where($where)->order($order)->limit($page->firstRow . ',' . $page->listRows)->select();
        $this->assign('page', $show);
        $this->assign('list', $list);
    }
}