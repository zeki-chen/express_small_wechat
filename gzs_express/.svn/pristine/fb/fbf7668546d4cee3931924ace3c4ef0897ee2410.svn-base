<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/10/18
 * Time: 11:40
 */

namespace Admin\Controller;
use Think\Controller;

class AdminBaseController extends Controller{
    public $bread=array();//面包屑
    public function __construct(){
        parent::__construct();
        if(session('?admin')){
            $admin=session('admin');
            $this->assign('admin',$admin);
        }else{
            //未登录，查找cookie记录
             $where['aname']=I('cookie.aname');
             $where['pwd']=I('cookie.pwd');
             $where['valid']=1;
             $model=M('admin')->where($where)->find();
             if(!$model){
                 //cookie中没有记录，跳转到登录页面
                 header ( "Content-type: text/html; charset=utf-8" );
                 echo"<script language='javascript'>top.location.href='".U("Index/index")."';</script>";
                 exit();
             }else{
                 session('admin',$model);
             }
         }
        $this->addBread('首页',U('Main/center'));
        $conf=$this->getConfContent('web');
        $this->assign('sysInfo',$conf);
    }

    public function addBread($name='',$url=''){
        //count()统计$this->bread数组中元素的数量，将新元素插入到数组尾部
        $this->bread[count($this->bread)]=array(
            "name"=>$name,
            "url"=>$url
        );
    }

    //获取配置内容
    public function getConfContent($code=''){
        $where['code']=$code;
        $model=M('config')->where($where)->find();
        if($model){
            $content=unserialize($model['content']);
            return $content;
        }
    }

    //获取列表并分页
    public function getList($table,$where,$order,$pageparam){
        $count =D($table)->where($where)->count();//统计符合条件的记录数量
        $pagesize = '10';//分页大小

        $page = new \Think\Page($count,$pagesize);
        $page->parameter = $pageparam;//分页条件
        $show = $page->show();
        $list = D($table)->where($where)->order($order)->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list',$list);
    }
}