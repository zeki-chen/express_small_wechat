<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/10/19
 * Time: 13:17
 */

namespace Admin\Controller;
use Think\Controller;

class AdminController extends AdminBaseController{
    public function __construct(){
        parent::__construct();
        $this->addBread('用户管理');
        $this->addBread('管理员管理',U('Admin/index'));
    }

    public function index(){
        $this->addBread('管理员列表');
        $this->assign('title','管理员列表');
        $this->assign('bread',$this->bread);
        $where=array();
        $pageParam=array();
        $orderBy="addtime desc";
        $this->getList('admin',$where,$orderBy,$pageParam);
        $this->display();
    }

    public function add(){
        $this->addBread('添加管理员');
        $this->assign('title','添加管理员');
        $this->assign('bread',$this->bread);
        $this->display();
    }

 

    public function pwd(){
        $this->addBread('重置密码');
        $this->assign('title','重置密码');
        $this->assign('bread',$this->bread);
        $where['aid']=I('get.aid');
        $model=M('admin')->where($where)->field('aid,aname')->find();
        if(!$model){
            $this->error('参数错误，请重试');
        }
        $this->assign('model',$model);
        $this->display();
    }

    public function doAdd(){
        $data=$_POST;
        $data['pwd']=md5($data['pwd']);
        $data['addtime']=time();
        $data['updatetime']=time();
        $res=M('admin')->data($data)->add();
        if($res){
            $this->success('添加成功',U('Admin/index'));
        }else{
            $this->error('添加失败');
        }
    }



    public function doPwd(){
        $data=$_POST;
        $data['updatetime']=time();
        $data['pwd']=md5($data['pwd']);
        $res=M('admin')->data($data)->save();
        if($res){
            $this->success('修改成功',U('Admin/index'));
        }else{
            $this->error('修改失败');
        }
    }

    public function doDel(){
        $ids=I('ids');
        if(empty($ids)){
            $this->error("请先选择要删除的记录！");
        }
        $where['aid']=array('in',$ids);
        $res=M('admin')->where($where)->delete();
        if($res){
            $this->success("删除成功",U('Admin/index'));
        } else {
            $this->error("删除失败");
        }
    }

    public function checkName(){
        $aname = I('post.aname');
        $where['aname'] = $aname;
        $res = M('admin')->where($where)->find();
        if(!$res){
            $this->ajaxReturn(array("info"=>"success","status"=>1));
        }else{
            $this->ajaxReturn(array("info"=>"error","status"=>0));
        }
    }
}