<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/10/20
 * Time: 12:01
 */

namespace Admin\Controller;
use Think\Controller;

class OrderController extends AdminBaseController{
    public function __construct(){
        parent::__construct();
        $this->addBread('订单管理');
        $this->addBread('订单列表',U('Reply/index'));
    }

    public function index()
    {
        $this->assign('title', '订单列表');
        $this->assign('bread', $this->bread);
        $where = array();
        $pageParam = array();
        $orderby = "addtime desc";
        $count =D('OrdersView')->where($where)->count();//统计符合条件的记录数量
        $pagesize = '10';//分页大小
        $page = new \Think\Page($count,$pagesize);
        $page->parameter = $pageParam;//分页条件
        $show = $page->show();
        $list = D('OrdersView')->where($where)->order($orderby)->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('page',$show);
        foreach ($list as $k => $v) {
        $map['user_id']=$v['sent_id'];
        $sent=M('user')->where($map)->find();
        $list[$k]['sent_name']=$sent['user_name'];
        $list[$k]['sent_true_name']=$sent['true_name'];
        $list[$k]['sent_tel']=$sent['tel'];
        }
        $this->assign('list',$list);
        //var_dump($list);
        $this->display();
    }

    public function view(){
        $this->addBread('订单详情');
        $this->assign('title','订单详情');
        $this->assign('bread',$this->bread);
        $where['order_id']=I('get.order_id');
        $OrdersView=new \Common\Model\OrdersViewModel();
        $model=$OrdersView->where($where)->find();
        if(!$model){
            $this->error('参数错误，请重试');
        }
        $this->assign('model',$model);
        $pageParam=array();
        $orderby="addtime desc";
        $this->getList('SpitslotView',$where,$orderby,$pageParam);

        $this->display();
    }

    public function doDel(){
        $ids=I('ids');
        if(empty($ids)){
            $this->error("请先选择要删除的记录！");
        }
        $where['order_id']=array('in',$ids);
        $res=M('orders')->where($where)->delete();
        if($res){
            $this->success("删除成功",U('Reply/index'));
        } else {
            $this->error("删除失败");
        }


    }


    public function doedit(){
        $where['order_id']=I('get.order_id');
        //dump($data);
        $data['updatetime']=time();
        $data['vaild']=0;
        $res=M('orders')->where($where)->data($data)->save();
        if($res){
            $this->success('修改成功',U('Order/index'));
        }else{
            $this->error('修改失败');
        }
    }

}