<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/10/19
 * Time: 20:49
 */

namespace Admin\Controller;
use Think\Controller;

class SpitslotController extends AdminBaseController{
    public function __construct(){
        parent::__construct();
        $this->addBread('评论管理');
        $this->addBread('评论列表',U('Spitslot/index'));
    }

    public function index(){
        $this->assign('title','评论列表');
        $this->assign('bread',$this->bread);
        $where=array();
        $pageParam=array();
        $orderby="addtime desc";
        $this->getList('SpitslotView',$where,$orderby,$pageParam);
        $this->display();
    }

    public function view(){
        $this->addBread('评论详情');
        $this->assign('title','评论详情');
        $this->assign('bread',$this->bread);
        $where['spitslot_id']=I('get.spitslot_id');
        $pageParam['spitslot_id']=I('get.spitslot_id');
        $model=D('SpitslotView')->where($where)->find();
        if(!$model){
            $this->error('参数错误，请重试');
        }
        $this->assign('model',$model);
 //     print_r($model);
        $order['order_id']=1;
        $OrdersView=new \Common\Model\OrdersViewModel();
        $modelorder=$OrdersView->where($order)->find();
        $modelorder['intro']=unserialize($modelorder['intro']);
        $this->assign('modelorder',$modelorder);
        $this->display();
    }

    public function doDel(){
        $ids=I('ids');
        if(empty($ids)){
            $this->error("请先选择要删除的记录！");
        }
        $where['spitslot_id']=array('in',$ids);
        $res=M('spitslot')->where($where)->delete();
        if($res){
            M('reply')->where($where)->delete();
            $this->success("删除成功",U('Spitslot/index'));
        } else {
            $this->error("删除失败");
        }
    }
}