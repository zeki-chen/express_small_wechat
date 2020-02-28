<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/10/19
 * Time: 19:10
 */

namespace Admin\Controller;
use Think\Controller;

class UserController extends AdminBaseController{
    public function __construct(){
        parent::__construct();
        $this->addBread('用户管理');
        $this->addBread('用户管理',U('User/index'));
    }

    public function index(){
        $this->addBread('用户列表');
        $this->assign('title','用户列表');
        $this->assign('bread',$this->bread);
        $where=array();
        $pageParam=array();
        $orderby="addtime desc";
        $this->getList('user',$where,$orderby,$pageParam);
        $this->display();
    }

    public function view(){
        $this->addBread('用户详情');
        $this->assign('title','用户详情');
        $this->assign('bread',$this->bread);
        $where['user_id']=I('get.wx_id');
        $model=M('user')->where($where)->find();
        if(!$model){
            $this->error('参数错误，请重试');
        }
        $this->assign('model',$model);
        $this->display();
    }

    public function doDel(){
        $ids=I('ids');
        if(empty($ids)){
            $this->error("请先选择要删除的记录！");
        }
        $where['user_id']=array('in',$ids);
        $res=M('user')->where($where)->delete();
        if($res){
            $this->success("删除成功",U('User/index'));
        } else {
            $this->error("删除失败");
        }
    }
}